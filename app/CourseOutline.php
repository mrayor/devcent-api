<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOutline extends Model
{
    protected $fillable = [
        'name', 'duration', 'course_id'
    ];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
