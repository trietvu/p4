@extends('layouts.master')

@section('content')
    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle"><h2>My First Ledger</h2></div>

                <h1>Accounts: Edit your account:</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form class='create' method='POST' action='/accounts/edit'>
                    {!! csrf_field() !!}
                    <input type='hidden' name='user_id' value='{{ $user->id }}'>
                    <input type='hidden' name='id' value='{{ $accounts->id }}'>

                    <div class='form-group'>
                        <label for='name'>Account name</label>
                        <input type='text' name='name' id='name' value='{{ $accounts->name }}'>
                    </div>

                    <div class='form-group'>
                        <label for='type'>Account type </label>
                        <select id='type' name='type'>
                            <option value='' >Select a type</option>
                            @foreach ($acctTypes as $acctType)
                                {{ $typeSelected = ($acctType == $accounts->type) ? 'SELECTED' : '' }}
                                <option value='{{ $acctType }}' {{ $typeSelected }}>{{ $acctType }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class='form-group'>
                        <label for='number'>Account number (last 4 digits only) </label>
                        <input type='text' name='number' id='number' value='{{ $accounts->number }}'>
                    </div>

                    <div class='form-group'>
                        <label for='streetaddress'>Street Address</label>
                        <input type='text' name='streetaddress' id='streetaddress' value='{{ $accounts->streetaddress }}'>
                    </div>

                    <div class='form-group'>
                        <label for='streetaddress2'>Street Address2</label>
                        <input type='text' name='streetaddress2' id='streetaddress2' value='{{ $accounts->streetaddress2 }}'>
                    </div>

                    <div class='form-group'>
                        <label for='city'>City</label>
                        <input type='text' name='city' id='city' value='{{ $accounts->city }}'>
                    </div>

                    <div class='form-group'>
                        <label for='state_id'>State </label>
                        <select id='state_id' name='state_id'>
                            <option value='' >Select a state</option>
                            @foreach($states_for_dropdown as $state_id => $name)

                                {{ $selected = ($state_id == $accounts->state_id) ? 'SELECTED' : '' }}

                                <option value='{{ $state_id }}' {{ $selected }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class='form-group'>
                        <label for='zip'>Zip Code</label>
                        <input type='text' name='zip' id='zip' value='{{ $accounts->zip }}'>
                    </div>

                    <div class='form-group'>
                        <label for='phone'>Phone number</label>
                        <input type='text' name='phone' id='phone' value='{{ $accounts->phone }}'>
                    </div>

                    <div class='form-group'>
                        <label for='website'>Website URL</label>
                        <input type='text' name='website' id='website' value='{{ $accounts->website }}'>
                    </div>

                    <div class='form-group'>
                        <label for='username'>Username</label>
                        <input type='text' name='username' id='username' value='{{ $accounts->username }}'>
                    </div>

                    <button type='submit' class='create'>Save account</button>

                </form>
            </div>
        </div>
    </div>
@stop
