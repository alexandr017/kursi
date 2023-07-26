<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            $httpCode = Response::HTTP_UNPROCESSABLE_ENTITY;
            $statusCode = BusinessLogicException::VALIDATION_FAILED;
            $details['message'] = $exception->getMessage();
            foreach ($exception->errors() as $key => $error) {
                $details['errors'][$key] = $error[0] ?? 'Unknown error';
            }

            $data = [
                'status'  => $statusCode,
                'errors' => $details,
            ];

            return response()->json($data, $httpCode);
        }

        return parent::render($request, $exception);

    }
}
