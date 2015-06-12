<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
	
	protected $fillable = [
			
		'bio',
		'twitter_username',
		'facebook_username',
		'github_username',
		'user_id',
	];

	// creates a user method stating that the profile belongs to the user
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function scopewhereUserID($id)
    {
        $this->where('user_id', '==', $id);
    }

}
