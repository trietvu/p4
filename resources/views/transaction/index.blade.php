@extends('layouts.master')


@section('title')
    My Accounts
@stop

@section('content')

    <div class='stage'>
        <div class='pageContent'>
            <div class='pageTitle'><h2>My First Ledger</h2></div>
                <h1>{{ $accounts->name }} Account Transactions</h1>
                <div class='balance'>{{ $accounts->type }} Balance: ${{ $balance }}</div>
                <div class='links'><a href='/transactions/create/{{ $accounts->id }}' class='topLinks'>>> Add a transaction</a></div>
            </div>
            <div class='pageContent'>
                <div class='shell'>
                    <div class='trans-date-title'>Date</div>
                    <div class='trans-name-title'>Transaction</div>
                    <div class='trans-type-title'>Category</div>
                    <div class='trans-amount-title'>Amount ($)</div>
                    <div class='trans-recipient-title'>Recipient</div>
                    <div class='trans-memo-title'>Memo</div>
                    <div class='trans-action-title'>Action</div>
                </div>

            @foreach($transactions as $transaction)
                <div class='shell2'>
                    <div class='trans-date'>{{ $transaction->created_at }}</div>
                    <div class='trans-name'>{{ $transaction->trans_name }}</div>
                    <div class='trans-type'>{{ $transaction->trans_type }}</div>
                    <div class='trans-amount'>{{ $transaction->amount }}</div>
                    <div class='trans-recipient'>{{ $transaction->recipient }}</div>
                    <div class='trans-memo'>{{ $transaction->memo }}</div>
                    <div class='trans-action'><a href='/transactions/edit/{{ $transaction->id }}' class='transaction'>Edit</a> | <a href='/transactions/confirm-delete/{{ $transaction->id }}' class='transaction'>Delete</a>
                        @if($transaction->receipt_url != null)
                        | <a class='group1' href='/{{ $transaction->receipt_url }}' data-lity><img src='/css/img/receipt-icon.gif' valign='bottom'></a></div>
                        @endif
                </div>
            @endforeach
            </div>
        </div>
    </div>

@stop
