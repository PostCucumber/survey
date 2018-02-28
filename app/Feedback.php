<?php

namespace App;

use App\Survey;
use App\Feedback;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['survey_id','rating','message','sender'];

    /**
     * feedback belongs to a survey.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }

        /**
     * Scope a query to only include feedback for the survey.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForSurvey($query, $id)
    {
        return $query->where('survey_id', $id)->orderBy('updated_at');
    }

}
