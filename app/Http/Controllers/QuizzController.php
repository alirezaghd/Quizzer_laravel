<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizzController extends Controller
{
    function index($id)
    {

       $question = Question::find($id);
        $total=Question::count();

        return view("question",[
            "question" => $question,
            "total" => $total
        ]);
    }

    function check(Request $request)
    {
        $question_id = $request["question_id"];
        $user_choice_id = $request["answer"];
        $total=Question::count();
        $correct_choice_id = Answer::where('question_id', '=', $question_id)
                                                    ->where('is_true','=',1)->first()->id;
        if($user_choice_id == $correct_choice_id)
        {
            $user_score = Session::get("user_score");
            $user_score++;
            Session::put("user_score", $user_score);

        }
        $question_id++;
        if($question_id>$total){
            return redirect("/score");
        }
        else{

        }
        return redirect("/question/$question_id");

    }

    function score()
    {
        $total=Question::count();
        $user_score=Session::get("user_score");
        return view("score",[
            "user_score" => $user_score,
            "total" => $total
        ]);
    }

    function index_admin()
    {
        $questions = Question::all();
        return view("admin",[
            "questions" => $questions
        ]);
    }

    function new_questions(Request $request)
    {

        $questions =new Question();
        $questions->text=$request["question"];
        $questions->save();

        $qestion_id = Question::all()->last()->id;
        $true_answer = $request["true_answer"];

        foreach($request["answer"] as $i=>$answer){
            $answers=new Answer();
            if($i+1 == $true_answer)
            {
                $is_true = 1;
            }
            else
            {
                $is_true = 0;
            }

            $answers -> text = $answer;
            $answers -> is_true = $is_true;
            $answers -> question_id = $qestion_id;
            $answers->save();
        }
        return redirect("admin");
    }



}
