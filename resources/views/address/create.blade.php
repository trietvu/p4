@extends('layouts.master')

@section('content')
    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle">My First Ledger</div>

                <h1>Add an address:</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form class='create' method='POST' action='/addresses/create'>
                    {!! csrf_field() !!}
                    <input type='hidden' name='user_id' value='{{ $user->id }}'>
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

                    <button type='submit' class='create'>Save</button>

                </form>
            </div>
        </div>
    </div>
@stop
