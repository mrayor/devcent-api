<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'description', 'objectives', 'eligibility', 'schedule', 'training_instructor', 'featured_image', 'category_id', 'available_seats', 'price'
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function course_outlines()
    {
        return $this->hasMany('App\CourseOutlines');
    }
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
}
