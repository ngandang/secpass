<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GPGKeys extends Model
{
    use Uuids;
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    
    protected $table = 'gpgkeys';
    public function Users()
    {
        return $this->belongsTo('App\Users', 'user_id','id');
    }
}
