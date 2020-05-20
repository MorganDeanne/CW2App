<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionnaire extends Model
{
  protected $fillable = [
        'title',
        'desc',
    ];

    public function question()
    {
      return $this->belongsTo(questions::class);
    }
}
