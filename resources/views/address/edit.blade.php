@extends('layouts.master')

@section('content')
    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle">My First Ledger</div>

                <h1>Edit your address information:</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method='POST' action='/addresses/edit'>
                    <input type='hidden' value='{{ csrf_token() }}' name='_token'>
                    <input type='hidden' name='id' value='{{ $address->id }}'>
                    <input type='hidden' name='user_id' value='{{ $address->user_id }}'>

                    <div class='form-group'>
                        <label for='streetaddress'>Street Address</label>
                        <input type='text' name='streetaddress' id='streetaddress' value='{{ $address->streetaddress }}'>
                    </div>

                    <div class='form-group'>
                        <label for='streetaddress2'>Street Address2</label>
                        <input type='text' name='streetaddress2' id='streetaddress2' value='{{ $address->streetaddress2 }}'>
                    </div>

                    <div class='form-group'>
                        <label for='city'>City</label>
                        <input type='text' name='city' id='city' value='{{ $address->city }}'>
                    </div>

                    <div class='form-group'>
                        <label for='state_id'>State </label>
                        <select id='state_id' name='state_id'>
                            <option value='' >Select a state</option>
                            @foreach($states_for_dropdown as $state_id => $name)

                                {{ $selected = ($state_id == $address->state_id) ? 'SELECTED' : '' }}

                                <option value='{{ $state_id }}' {{ $selected }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class='form-group'>
                        <label for='zip'>Zip Code</label>
                        <input type='text' name='zip' id='zip' value='{{ $address->zip }}'>
                    </div>

                    <div class='form-group'>
                        <label for='phone'>Phone number</label>
                        <input type='text' name='phone' id='phone' value='{{ $address->phone }}'>
                    </div>

                    <button type='submit' class='btn btn-primary'>Save</button>

                </form>
            </div>
        </div>
    </div>
@stop
