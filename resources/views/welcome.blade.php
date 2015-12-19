@extends('layouts.master')


@section('title')
    P4 - My First Ledger App
@stop

@section('content')

    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle"><h2>My First Ledger</h2></div>
            <h1>My First Ledger</h1>
                <div class="welcome-text">
                    Welcome to My First Ledger! This checkbook app will help you organize financial accounts into an easy-to-use ledger that can be accessed and stored online. We don't claim to be the most secure but be assured that it works!<br><br>
                    Please begin by registering for a free account.  If you have already registered, please log in.
                </div>
                <div class="welcome-login">
                    <form class="login" method='POST' action='/login'>
                        <h3>Login</h3>
                        {!! csrf_field() !!}

                        <div class='form-group-login'>
                            <label for='email'>Email: </label>
                            <input type='text' name='email' id='email' value='{{ old('email') }}'>
                        </div>

                        <div class='form-group-login'>
                            <label for='password'>Password: </label>
                            <input type='password' name='password' id='password' value='{{ old('password') }}'>
                        </div>

                        <div class='form-group-login'>
                            <input type='checkbox' name='remember' id='remember'>
                            <label for='remember' class='checkboxLabel'>Remember me</label>
                        </div>

                        <div class='form-group-login'>
                            <label for='remember' class='checkboxLabel'>Forgot your password? <a href='/password/email'>Click here</a>.</label>
                        </div>

                        <button type='submit' class='btn btn-primary'>Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
