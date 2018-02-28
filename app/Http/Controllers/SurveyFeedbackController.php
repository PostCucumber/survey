<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Survey;

use Illuminate\Http\Request;

class SurveyFeedback extends Controller
{
    /**
     * Return the feedback for the given survey.
     *
     * @param Survey $survey
     * @return \Illuminate\Database\Eloquent\Collection
    */
    public function index(Survey $survey)
    {
        return Feedback::forSurvey($survey->id)->get();
    }
}
