<?php 

namespace Larapress\Models;

class UserTerm extends \Eloquent{

    protected $table = 'user_meta';

    public function user(){
        return $this->belongsTo('Larapress\Models\User');
    }
    
}
