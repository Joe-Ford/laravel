<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function index()
    {
        return view('account.template');
    }
}
