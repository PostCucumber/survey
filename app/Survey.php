<?php

namespace App;

use App\Feedback;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['question'];

    /**
     * A survey has many feedback.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany;
     */
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    /**
     * Return the URL for the survey
     *
     * @return string
     */
    public function path()
    {
        return '/surveys/'. $this->id;
    }
    /**
     * Return the URL for the Survey's responses
     *
     * @return string
     */
    public function feedbackPath()
    {
        return $this->path() . '/feedback';
    }
}
