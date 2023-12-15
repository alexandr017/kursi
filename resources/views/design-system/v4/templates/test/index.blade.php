@extends('design-system.v4.templates.layout')
@section('title', 'Дизайн система - Шаблон "' . $templateName . '"')
@section('h1', 'Дизайн система - Шаблон "' . $templateName . '"')

@section('content')

<div style="background: var(--light_bg_primary, #F5F6F7)">

    @include('design-system.v4.components.organisms.header.index')

    <div class="container">

        <div class="breadcrumbs-block" style="padding-top: 20px; margin-top: 76px; margin-bottom: 32px;">
            @include('design-system.v4.components.molecules.breadcrumbs.index')
        </div>

        <div class="lead-block_wrapper" style="margin-bottom: 52px">
            <h1 class="h1 page-title" style="margin-bottom: 16px">Курсы UX/UI дизайна</h1>
            @include('design-system.v4.components.molecules.lead-block.index')
        </div>

        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            @include('design-system.v4.components.molecules.top-links.index')

            @include('design-system.v4.components.organisms.sort.index')
        </div>

        <div class="page_wrapper" style="display: flex; flex-wrap: wrap; gap: 40px; margin-bottom: 40px;">

            <div class="page_top-grid" style="display: flex; gap: var(--spacing-x5, 20px); flex-wrap: nowrap; width: 100% ">
                <div class="page_aside">
                    <div class="filter-block" style="width: 312px;">
                        @include('design-system.v4.components.organisms.filter.index')
                    </div>
                </div>
                <div class="page_content" style="display: flex; gap: 16px; flex-wrap: wrap; width: calc(100% - 20px - 312px);">
                    @include('design-system.v4.components.organisms.card-course-fixed.index')

                    @include('design-system.v4.components.molecules.button-more.index')
                </div>
            </div>

            @include('design-system.v4.components.organisms.card-course-carousel.index')

            @include('design-system.v4.components.organisms.card-review-carousel.index')

            <div class="course-info-block">
                @include('design-system.v4.components.molecules.course-info.index')
            </div>

            <div class="bottom-links-block">
                @include('design-system.v4.components.molecules.rating-table.index')
            </div>

            <div class="bottom-links-block">
                @include('design-system.v4.components.molecules.bottom-links.index')
            </div>

            <div class="rating-area-block">
                @include('design-system.v4.components.organisms.star-rating-area.index')
            </div>

        </div>

    </div>
    @include('design-system.v4.components.organisms.footer.index')
</div>
@endsection
