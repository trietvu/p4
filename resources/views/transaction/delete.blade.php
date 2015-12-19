@extends('layouts.master')


@section('title')
    My Accounts
@stop

@section('content')

    <div class='stage'>
        <div class='pageContent'>
            <div class='pageTitle'><h2>My First Ledger</h2></div>
                <h1>Transactions: Delete a Transaction</h1>
                <p>
                     Are you sure you want to delete the "<em>{{$transactions->trans_name}}</em>" transaction?
                 </p>
                 <p>
                     <a href='/transactions/delete/{{$transactions->id}}'>>> Yes</a> | <a href='/transactions/{{ $transactions->account_id }}'>>> No</a>
                </p>

            </div>
        </div>
    </div>

@stop
