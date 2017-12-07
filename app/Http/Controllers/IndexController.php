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

      foreach ($parameters as $key => $value) {
        $response = [
          'value' => $value,
          'description' => $value,
          'question_id' => $key,
          'user_id' => 1,
        ];
        Response::create($response);
      }
      return view('thanks');
    }

    public function rankingAction($value='')
    {
      return view('ranking');
    }
}
