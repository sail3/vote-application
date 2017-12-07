<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexAction($value='')
    {
      return view('welcome');
    }
    public function questionAction($value='')
    {
      return view('question');
    }
    public function rankingAction($value='')
    {
      return view('ranking');
    }
}
