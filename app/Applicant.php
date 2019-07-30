<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'payment_mode', 'course_id'
    ];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
