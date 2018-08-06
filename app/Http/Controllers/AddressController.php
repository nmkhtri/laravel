<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\Address;
use samenta\User;

class AddressController extends Controller
{
    public function userAddress()
    {
        /*insert
         $user = User::findorFail(1);
        $address = new Address(['name'=>'Hossein Abad St.']);
        $user->Address()->save($address);
        return 'true';*/
       /*update
       $address = Address::where('user_id',1)->firstOrFail();
        $address->name = 'updated address';
        $address->save();
        return 'true';*/
      /* //delete
       $user = User::findOrFail(1);
       $user->Address()->delete();
       return 'true';
       //error*/
      /*//read
        $user = User::find(1);
        echo $user->Address->name;
        //error*/
    }
}
