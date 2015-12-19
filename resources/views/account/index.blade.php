@extends('layouts.master')


@section('title')
    My Accounts
@stop

@section('content')

    <div class='stage'>
        <div class='pageContent'>
            <div class='pageTitle'><h2>My First Ledger</h2></div>
                <h1>My Accounts</h1>
                <div class='balance'> &nbsp; </div>
                <div class='links'><a href='/accounts/create' class='topLinks'>>> Add an account</a></div>
            </div>
            <div class='pageContent'>
                    <div class='shell'>
                        <div class='account-name-title'>Account Name</div>
                        <div class='account-type-title'>Acct. Type</div>
                        <div class='account-number-title'>Acct. Number</div>
                        <div class='account-phone-title'>Phone No.</div>
                        <div class='account-website-title'>Website</div>
                        <div class='account-username-title'>Username</div>
                        <div class='account-action-title'>Action</div>
                    </div>
                @foreach($accounts as $account)
                    <div class='shell2'>
                        <div class='account-name'>{{ $account->name }}</div>
                        <div class='account-type'>{{ $account->type }}</div>
                        <div class='account-number'>XXXX{{ $account->number }}</div>
                        <div class='account-phone'>{{ $account->phone }}</div>
                        <div class='account-website'>{{ $account->website }}</div>
                        <div class='account-username'>{{ $account->username }}</div>
                        <div class='account-action'><a href='transactions/{{ $account->id }}'>View</a> | <a href='accounts/edit/{{ $account->id }}'>Edit</a> | <a href='accounts/confirm-delete/{{ $account->id }}'>Delete</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop
