@extends('layouts.master')

@section('content')
<div class="stage">
    <div class="pageContent">
        <div class="pageTitle"><h2>My First Ledger</h2></div>
            <h1>Update your information</h1>

            @if(count($errors) > 0)
                <ul class='errors'>
                    @foreach ($errors->all() as $error)
                        <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form class='create' method='POST' action='/info'>
                {!! csrf_field() !!}
                <input type='hidden' name='id' id='id' value='{{ $user->id }}'>

                <div class='form-group'>
                    <label for='name'>First Name</label>
                    <input type='text' name='name' id='name' value='{{ $user->name }}'>
                </div>

                <div class='form-group'>
                    <label for='middlename'>Middle Name</label>
                    <input type='text' name='middlename' id='middlename' value='{{ $user->middlename }}'>
                </div>

                <div class='form-group'>
                    <label for='lastname'>Last Name</label>
                    <input type='text' name='lastname' id='lastname' value='{{ $user->lastname }}'>
                </div>

                <div class='form-group'>
                    <label for='email'>Email</label>
                    <input type='text' name='email' id='email' value='{{ $user->email }}'>
                </div>

                <div class='form-group-notice'>
                    *Leave password fields empty to keep your current password.
                </div>

                <div class='form-group'>
                    <label for='password'>Change Password </label>
                    <input type='password' name='password' id='password'>
                </div>

                <div class='form-group'>
                    <label for='password_confirmation'>Confirm Change Password</label>
                    <input type='password' name='password_confirmation' id='password_confirmation'>
                </div>

                <button type='submit' class='create'>Update</button>

            </form>
            </div>
        </div>
    </div>
@stop
