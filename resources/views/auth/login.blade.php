@extends('layouts.master')

@section('content')
    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle"><h2>My First Ledger</h2></div>
                <h1>Login</h1>

                <p>Don't have an account? <a href='/register'>Register here.</a></p>



                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form class='login' method='POST' action='/login'>

                    {!! csrf_field() !!}

                    <div class='form-group-login'>
                        <label for='email'>Email</label>
                        <input type='text' name='email' id='email' value='{{ old('email') }}'>
                    </div>

                    <div class='form-group-login'>
                        <label for='password'>Password</label>
                        <input type='password' name='password' id='password' value='{{ old('password') }}'>
                    </div>

                    <div class='form-group-login'>
                        <input type='checkbox' name='remember' id='remember'>
                        <label for='remember' class='checkboxLabel'>Remember me</label>
                    </div>

                    <button type='submit' class='btn btn-primary'>Login</button>

                </form>
            </div>
        </div>
    </div>
@stop
