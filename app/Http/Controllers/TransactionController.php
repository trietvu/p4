<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller{

    public function getIndex(Request $request) {

        $accounts = \App\Account::where('user_id','=',\Auth::id())->find($request->id);
        $transactions = \App\Transaction::where('account_id','=',$accounts->id)->orderBy('id','ASC')->get();

        $balance = $transactions->sum('amount');
        $acctType = $accounts->type;
        if($acctType == 'Credit Card') {
            $balance = $balance * -1;
        }

        return view('transaction.index')->with('transactions',$transactions)->with('accounts',$accounts)->with('balance',$balance);
    }

    public function getCreate(Request $request) {

        $accounts = \App\Account::where('user_id','=',\Auth::id())->find($request->id);
        $transactions = new \App\Transaction();

        $categories = ['Deposit/Credit', 'Automobile', 'Groceries', 'Health & Beauty', 'Home Improvement', 'Meals & Entertainment', 'Medical Expense', 'Utilities', 'Insurance', 'Miscellaneous'];

        return view('transaction.create')->with('transactions',$transactions)->with(['categories' => $categories])->with('accounts',$accounts);

    }

    public function postCreate(Request $request)
    {
        $this->validate(
            $request,
            [
                'trans_name' => 'required',
                'trans_type' => 'required',
                'amount' => 'required',
                'recipient' => 'required',
                ]
        );

        $transactions = new \App\Transaction();

        $transactions->trans_name = $request->trans_name;
        $transactions->trans_type = $request->trans_type;
        $transactions->amount = $request->amount;
        $transactions->recipient = $request->recipient;
        $transactions->memo = $request->memo;

        $transactions->account_id = $request->account_id;

        if ($transactions->trans_type != 'Deposit/Credit') {
            $transactions->amount = $transactions->amount * -1;
        }

        if(\Input::hasFile('file')) {
            $file = \Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            $fileurl = 'uploads/'.$file->getClientOriginalName();
            $transactions->receipt_url = $fileurl;
        }

        $transactions->save();

        \Session::flash('flash_message','Your transaction was added');
        return redirect('/transactions/'.$transactions->account_id);

    }

    public function getEdit(Request $request) {

        $transactions = \App\Transaction::find($request->id);

        $categories = ['Deposit', 'Automobile', 'Groceries', 'Health & Beauty', 'Home Improvement', 'Meals & Entertainment', 'Medical Expense', 'Utilities', 'Insurance', 'Miscellaneous'];

        return view('transaction.edit')->with('transactions',$transactions)->with(['categories' => $categories]);
    }

    public function postEdit(Request $request) {

        $this->validate(
            $request,
            [
                'trans_name' => 'required',
                'trans_type' => 'required',
                'amount' => 'required',
                'recipient' => 'required',
                ]
        );

        $transactions = \App\Transaction::find($request->id);

        $transactions->trans_name = $request->trans_name;
        $transactions->trans_type = $request->trans_type;
        $transactions->amount = $request->amount;
        $transactions->recipient = $request->recipient;
        $transactions->memo = $request->memo;
        
        if ($transactions->trans_type != 'Deposit/Credit') {
            $transactions->amount = $transactions->amount * -1;
        }

        if(\Input::hasFile('file')) {
            $file = \Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            $fileurl = 'uploads/'.$file->getClientOriginalName();
            $transactions->receipt_url = $fileurl;
        }

        $transactions->save();

        \Session::flash('flash_message','Your transaction was updated.');
        return redirect('/transactions/'.$transactions->account_id);

    }

    public function getConfirmDelete($id) {

        $transactions = \App\Transaction::find($id);

        return view('transaction.delete')->with('transactions', $transactions);
    }

    public function getDelete($id) {

        $transactions = \App\Transaction::find($id);

        if(is_null($transactions)) {
            \Session::flash('flash_message','Transaction not found.');
            return redirect('/transactions/'.$transactions->account_id);
        }

        $transactions->delete();

        \Session::flash('flash_message','Your "'.$transactions->trans_name.'" transaction was deleted.');

        return redirect('/transactions/'.$transactions->account_id);

    }

}
