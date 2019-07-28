<?php

namespace App\Controllers;

use Bellona\Http\Controller;

class Home extends Controller
{
    public function index()
    {
        render('home');
    }
}
