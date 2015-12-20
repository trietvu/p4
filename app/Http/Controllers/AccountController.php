<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller{

    public function getIndex(Request $request) {

        $address = \App\Address::where('user_id','=',\Auth::id())->get()->first();

        if(is_null($address)) {
            \Session::flash('flash_message','Please create an address for your account');
            return redirect('addresses/create');
        }

        $accounts = \App\Account::where('user_id','=',\Auth::id())->orderBy('id','ASC')->get();

        return view('account.index')->with('accounts',$accounts);

    }

    public function getCreate() {

        $accounts = new \App\Account();

        $stateModel = new \App\State();
        $states_for_dropdown = $stateModel->getStatesForDropdown();
        $acctTypes = ['Checking', 'Savings', 'Credit Card'];

        return view('account.create')->with('accounts',$accounts)->with(['states_for_dropdown' => $states_for_dropdown])->with(['acctTypes' => $acctTypes]);

    }

    public function postCreate(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'type' => 'required',
                'number' => 'required|max:4',
                'streetaddress' => 'required',
                'city' => 'required',
                'state_id' => 'required',
                'zip' => 'required',
                'phone' => 'required',
                ]
        );

        $accounts = new \App\Account();

        $accounts->name = $request->name;
        $accounts->type = $request->type;
        $accounts->number = $request->number;
        $accounts->streetaddress = $request->streetaddress;
        $accounts->streetaddress2 = $request->streetaddress2;
        $accounts->city = $request->city;
        $accounts->state_id = $request->state_id;
        $accounts->zip = $request->zip;
        $accounts->phone = $request->phone;
        $accounts->website = $request->website;
        $accounts->username = $request->username;
        $accounts->user_id = $request->user_id;

        $accounts->save();

    #        \Session::flash('flash_message','Your address was added.');
        \Session::flash('flash_message','Your account was added');
        return redirect('/accounts');

    }

    public function getEdit($id = null) {

        $accounts = \App\Account::where('user_id','=',\Auth::id())->find($id);

        if(is_null($accounts)) {
            \Session::flash('flash_message','Account not found');
            return redirect('account/create');
        }

        $stateModel = new \App\State();
        $states_for_dropdown = $stateModel->getStatesForDropdown();

        $acctTypes = ['Checking', 'Savings', 'Credit Card'];

        return view('account.edit')->with('accounts', $accounts)->with(['states_for_dropdown' => $states_for_dropdown])->with(['acctTypes' => $acctTypes]);
    }

    public function postEdit(Request $request) {

        $this->validate(
            $request,
            [
                'name' => 'required',
                'type' => 'required',
                'number' => 'required|max:4',
                'streetaddress' => 'required',
                'city' => 'required',
                'state_id' => 'required',
                'zip' => 'required',
                'phone' => 'required',
                ]
        );

        $accounts = \App\Account::find($request->id);

        $accounts->id = $request->id;
        $accounts->user_id = $request->user_id;
        $accounts->name = $request->name;
        $accounts->type = $request->type;
        $accounts->number = $request->number;
        $accounts->streetaddress = $request->streetaddress;
        $accounts->streetaddress2 = $request->streetaddress2;
        $accounts->city = $request->city;
        $accounts->state_id = $request->state_id;
        $accounts->zip = $request->zip;
        $accounts->phone = $request->phone;
        $accounts->website = $request->website;
        $accounts->username = $request->username;

    //    $accounts->user_id = $request->user_id;

        $accounts->save();

        \Session::flash('flash_message','Your address was updated.');
        return redirect('/accounts');

    }

    public function getConfirmDelete($id) {

        $accounts = \App\Account::find($id);

        return view('account.delete')->with('accounts', $accounts);
    }

    public function getDelete($id) {

        $accounts = \App\Account::find($id);

        if(is_null($accounts)) {
            \Session::flash('flash_message','Account not found.');
            return redirect('\accounts');
        }

        $accounts->delete();

        \Session::flash('flash_message','Your'.$accounts->name.' account was deleted.');

        return redirect('/accounts');

    }


}
