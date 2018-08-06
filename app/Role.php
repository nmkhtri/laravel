<?php

namespace samenta;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /*
     *MassAssignment Error
     */
protected $fillable =['name','description'];

    public function users()
    {
        return $this->belongsToMany('samenta\User');
    }
}
