@extends('layouts.master')


@section('title')
    My Accounts
@stop

@section('content')

    <div class='stage'>
        <div class='pageContent'>
            <div class='pageTitle'><h2>My First Ledger</h2></div>
                <h1>Accounts: Delete an Account</h1>
                <p>
                     Are you sure you want to delete your <em>{{$accounts->name}}</em> account?
                 </p>
                 <p>
                     <a href='/accounts/delete/{{$accounts->id}}'>>> Yes</a> | <a href='/accounts'>>> No</a>
                </p>

            </div>
        </div>
    </div>

@stop
