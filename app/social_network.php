<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social_network extends Model
{
    protected $fillable = ['linkedin_id', 'name', 'avatar', 'id_applicant'];
	
	protected $hidden = ['linkedin_id','avatar'];
}
