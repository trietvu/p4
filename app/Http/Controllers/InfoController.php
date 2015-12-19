<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller{

    public function getEdit($id)
    {
        $user = \App\User::find($id);

        return view('info.edit')->with('user',$user);
    }

    public function postEdit(Request $request)
    {
        $user = \App\User::find($request->id);

        $user->name = $request->name;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        \Session::flash('flash_message','Your information was updated.');
        return redirect('/');
    }


}
