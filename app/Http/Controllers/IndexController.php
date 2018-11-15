<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    function index(Request $request)
    {
        // Lay du lieu email tu URL
        $email = $request->email;

        $check = true;

        // Kiem tra validate email theo ham mac dinh thu vien PHP
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $check = false;
        }

        return view('index', compact('check'));
    }
}