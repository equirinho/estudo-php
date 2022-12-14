<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal'); //o proprio laravel entende que isso está dentro de resourses/site/principal.blade.php
    }
}
