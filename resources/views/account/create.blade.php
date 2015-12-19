@extends('layouts.master')

@section('content')
    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle"><h2>My First Ledger</h2></div>

                <h1>Accounts: Add an account:</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form class='create' method='POST' action='/accounts/create'>
                    {!! csrf_field() !!}
                    <input type='hidden' name='user_id' value='{{ $user->id }}'>

                    <div class='form-group'>
                        <label for='name'>Account name</label>
                        <input type='text' name='name' id='name' value='{{ old('name') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='type'>Account type </label>
                        <select id='type' name='type'>
                            <option value='' selected>Select a type</option>
                            @foreach ($acctTypes as $acctType)
                                <option value='{{ $acctType }}'>{{ $acctType }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class='form-group'>
                        <label for='number'>Account number (last 4 digits only)</label>
                        <input type='text' name='number' id='number' value='{{ old('number') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='streetaddress'>Street Address</label>
                        <input type='text' name='streetaddress' id='streetaddress' value='{{ old('streetaddress') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='streetaddress2'>Street Address2</label>
                        <input type='text' name='streetaddress2' id='streetaddress2' value='{{ old('streetaddress2') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='city'>City</label>
                        <input type='text' name='city' id='city' value='{{ old('city') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='state_id'>State </label>
                        <select id='state_id' name='state_id'>
                            <option value='' selected>Select a state</option>
                            @foreach($states_for_dropdown as $state_id => $name)
                                <option value='{{ $state_id }}'>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class='form-group'>
                        <label for='zip'>Zip Code</label>
                        <input type='text' name='zip' id='zip' value='{{ old('zip') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='phone'>Phone number</label>
                        <input type='text' name='phone' id='phone' value='{{ old('phone') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='website'>Website URL</label>
                        <input type='text' name='website' id='website' value='{{ old('website') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='username'>Username</label>
                        <input type='text' name='username' id='username' value='{{ old('username') }}'>
                    </div>

                    <button class="create" type='submit'>Add Account</button>

                </form>
            </div>
        </div>
    </div>
@stop
