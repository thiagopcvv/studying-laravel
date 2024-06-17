<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class SobreNosController extends Controller
{

    public static function middleware()
    {
        return [
            new Middleware(LogAcessoMiddleware::class)
        ];
    }

    public function sobreNos() {
        return view('site.sobre-nos');
    }
}