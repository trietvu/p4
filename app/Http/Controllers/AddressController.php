<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller{

    public function getIndex() {

        return view('address.index');

    }

    public function getCreate() {

        $address = new \App\Address();

        $stateModel = new \App\State();
        $states_for_dropdown = $stateModel->getStatesForDropdown();

        return view('address.create')->with('address',$address)->with(['states_for_dropdown' => $states_for_dropdown]);

    }

    public function postCreate(Request $request)
    {
        $this->validate(
            $request,
            [
                'streetaddress' => 'required',
                'city' => 'required',
                'state_id' => 'required',
                'zip' => 'required',
                'phone' => 'required',
                ]
        );

        $address = new \App\Address();

        $address->streetaddress = $request->streetaddress;
        $address->streetaddress2 = $request->streetaddress2;
        $address->city = $request->city;
        $address->state_id = $request->state_id;
        $address->zip = $request->zip;
        $address->phone = $request->phone;
        $address->user_id = $request->user_id;

        $address->save();

    #        \Session::flash('flash_message','Your address was added.');
        \Session::flash('flash_message','Your address was added');
        return redirect('/');

    }

    public function getEdit($id = null) {

        $address = \App\Address::where('user_id','=',\Auth::id())->get()->first();

        if(is_null($address)) {
            \Session::flash('flash_message','Address not found');
            return redirect('address/create');
        }

        $stateModel = new \App\State();
        $states_for_dropdown = $stateModel->getStatesForDropdown();

        return view('address.edit')->with('address', $address)->with(['states_for_dropdown' => $states_for_dropdown]);
    }

    public function postEdit(Request $request) {

        $this->validate(
            $request,
            [
                'streetaddress' => 'required',
                'city' => 'required',
                'state_id' => 'required',
                'zip' => 'required',
                'phone' => 'required',
                ]
        );

        $address = \App\Address::find($request->id);

        $address->streetaddress = $request->streetaddress;
        $address->streetaddress2 = $request->streetaddress2;
        $address->city = $request->city;
        $address->state_id = $request->state_id;
        $address->zip = $request->zip;
        $address->phone = $request->phone;
    //    $address->user_id = $request->user_id;

        $address->save();

        \Session::flash('flash_message','Your address was updated.');
        return redirect('/');

    }

}
