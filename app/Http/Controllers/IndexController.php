<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
use App\Question;
use DB;

class IndexController extends Controller
{
    public function indexAction($value='')
    {

      return view('welcome');
    }
    public function questionAction($value='')
    {
      $questions = [
        [1, 'hola mundo 01', 'hola mundo 01'],
        [2, 'hola mundo 01', 'hola mundo 01'],
        [3, 'hola mundo 01', 'hola mundo 01'],
        [4, 'hola mundo 01', 'hola mundo 01'],
      ];
      return view('question', compact('questions'));
    }

    public function responseAction(Request $request)
    {

      return view('thanks');
    }

    public function rankingAction($value='')
    {
      return view('ranking');
    }
}
