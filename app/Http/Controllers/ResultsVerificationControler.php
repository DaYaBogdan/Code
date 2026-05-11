<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultsRequest;
use App\Models\testResult;
use App\Models\testAnswers;
use Illuminate\Support\Str;
use App\Models\tests;
class ResultsVerificationControler extends Controller
{
    public function submit(ResultsRequest $request) {

        $answer = new testResult();
        $answer->fio = $request->fio;
        $answer->group = $request->group;
        $answer->answer = Str::lower($request->question1);
        $answer->task = tests::where('testID', 1)->where('taskID', 1)->value('id');
        $answer->isCorrect = $answer->answer == testAnswers::where('task', $answer->task)->value('answer');
        $answer->save();

        $answer = new testResult();
        $answer->fio = $request->fio;
        $answer->group = $request->group;
        $answer->answer = Str::lower($request->question2);
        $answer->task = tests::where('testID', 1)->where('taskID', 2)->value('id');
        $answer->isCorrect = $answer->answer == testAnswers::where('task', $answer->task)->value('answer');
        $answer->save();

        $answer = new testResult();
        $answer->fio = $request->fio;
        $answer->group = $request->group;
        $answer->answer = Str::lower($request->question3);
        $answer->task = tests::where('testID', 1)->where('taskID', 3)->value('id');
        $answer->isCorrect = $answer->answer == testAnswers::where('task', $answer->task)->value('answer');
        $answer->save();

        return view("static.Test");
    }
}
