@extends('layouts.master')

@section('content')
    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle"><h2>My First Ledger</h2></div>

                <h1>Transactions: Add a transaction:</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form class="create" method='POST' action='/transactions/create' enctype='multipart/form-data'>
                    {!! csrf_field() !!}
                    <input type='hidden' name='account_id' value='{{ $accounts->id }}'>
                    <input type='hidden' name='id' value='{{ $transactions->id }}'>

                    <div class='form-group'>
                        <label for='trans_name'>Transaction name</label>
                        <input type='text' name='trans_name' id='trans_name' value='{{ old('trans_name') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='trans_type'>Category</label>
                        <select id='trans_type' name='trans_type'>
                            <option value='' selected>Select a category</option>
                            @foreach ($categories as $category)
                                <option value='{{ $category }}'>{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class='form-group'>
                        <label for='amount'>Amount</label>
                        $<input type='text' name='amount' id='amount' value='
                        @if($category != 'Deposit/Credit')
                            -1
                        @endif
                        {{ old('amount') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='streetaddress'>Recipient</label>
                        <input type='text' name='recipient' id='recipient' value='{{ old('recipient') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='memo'>Memo</label>
                        <input type='text' name='memo' id='memo' value='{{ old('memo') }}'>
                    </div>

                    <div class='form-group-upload'>
                        <label for='file'>Select receipt image to upload</label>
                        <input type='file' name='file' id='file'>
                    </div>

                    <button type='submit' class='create'>Add Transaction</button>

                </form>
            </div>
        </div>
    </div>
@stop
