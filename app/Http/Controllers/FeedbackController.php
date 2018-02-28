<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $feedback = Feedback::create($request->all());
        return back();
    }

    public function create(Survey $survey)
    {
        $survey_id = $survey->id;
        return view('feedback', compact('survey_id','response'));
    }
}
