<?php

namespace samenta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id','title','content'];
    protected $dates = ['deleted_at'];
    public function user()
    {
        return $this->belongsTo('samenta\User');
    }
}
