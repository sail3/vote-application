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
      $questions = Question::all();
      return view('question', compact('questions'));
    }

    public function responseAction(Request $request)
    {
      $parameters = $request->all();
      unset($parameters['button']);
      foreach ($parameters as $key => $value) {
        $response = new Response();
        $response->value = $value;
        $response->description = $value;
        $response->question_id = $key;
        $response->user_id = 1;
        $response->save();
      }
      return view('thanks');
    }

    public function rankingAction($value='')
    {
      return view('ranking');
    }
}
