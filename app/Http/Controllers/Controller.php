<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session('success')) {
                Alert::success(session('success'));
            }

            if (session('error')) {
                Alert::error(session('error'));
            }

            if (session('errorForm')) {
                $html = "<ul style='list-style: none;'>";
                foreach (session('errorForm') as $error) {
                    $html .= "<li>$error[0]</li>";
                }
                $html .= "</ul>";

                Alert::html('Form Tidak Lengkap! Masukkan Data Anda.', $html, 'error');
            }

            return $next($request);
        });
    }

    protected RedirectResponse $response;

    protected function isError(array $response): bool
    {
        if (!$response["success"]) {
            $this->setErrorResponse(redirect()->back()->withErrors($response["message"])->withInput());
            return true;
        }

        return false;
    }

    protected function setErrorResponse(RedirectResponse $response): void
    {
        $this->response = $response;
    }
    protected function getErrorResponse(): RedirectResponse
    {
        return $this->response;
    }
}
