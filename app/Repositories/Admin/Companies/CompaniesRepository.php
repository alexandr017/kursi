<?php

namespace App\Repositories\Admin\Companies;

use DB;
use App\Models\Companies\Company;
use App\Services\FakeRating\FakeRating;
use App\Models\Urls\Url;
use Throwable;

class CompaniesRepository
{
    private const SECTION_TYPE = 5;

    public function getAllCompaniesForShow() : array
    {
        return DB::table('companies')
            ->leftJoin('urls', 'urls.section_id', 'companies.id')
            ->select(['companies.id', 'companies.name', 'companies.status', 'urls.url'])
            ->where(['urls.section_type' => CompaniesRepository::SECTION_TYPE])
            ->whereNull('companies.deleted_at')
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return Company::find($id);
    }

    /**
     * @throws Throwable
     */
    public function createCompany(array $data) : Company
    {
        if (!isset($data['rating_value']) && !isset($data['rating_count'])) {
            [$data['rating_value'], $data['rating_count']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($data) : Company
        {

            $company = new Company($data);
            $company->save();

            $url = new Url([
                'url' => $data['url'],
                'section_id' => $company->id,
                'section_type' => CompaniesRepository::SECTION_TYPE
            ]);
            $url->save();

            return $company;
        });
    }

    /**
     * @throws Throwable
     */
    public function updateCompany(int $id, array $data) : null|Company
    {
        if (!isset($data['average_rating']) && !isset($data['number_of_votes'])) {
            [$data['average_rating'], $data['number_of_votes']] = FakeRating::makeRating();
        }

        return DB::transaction(function() use($id, $data) : null|Company
        {
            $company = Company::find($id);
            $company->update($data);

            $url = Url::where(['section_id' => $id, 'section_type' => CompaniesRepository::SECTION_TYPE])->first();

            if ($url != null && $url->url != $data['url']) {
                $url->url = $data['url'];
                $url->update();
            }

            return $company;
        });
    }

    /**
     * @throws Throwable
     */
    public function deleteCompany(int $id) : null|Company
    {
        return DB::transaction(function() use($id) : null|Company
        {
            $company = Company::find($id);
            $company->delete();

            $url = Url::where(['section_id' => $id, 'section_type' => CompaniesRepository::SECTION_TYPE])->first();
            $url->delete();

            return $company;
        });
    }

    public function getCompaniesForSelect() : array
    {
        return Company::select(['id', 'name'])->whereNull('deleted_at')->pluck('name', 'id')->toArray();
    }
}
