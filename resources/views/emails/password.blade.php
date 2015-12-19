@extends('layouts.master')

@section('content')
<div class="stage">
    <div class="pageContent">
        <div class="pageTitle"><h2>My First Ledger</h2></div>
            <h1>Reset your password</h1>

            @if(count($errors) > 0)
                <ul class='errors'>
                    @foreach ($errors->all() as $error)
                        <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

                <form method="POST" action="/password/reset">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class='form-group'>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class='form-group'>
                        Password
                        <input type="password" name="password">
                    </div>

                    <div class='form-group'>
                        Confirm Password
                        <input type="password" name="password_confirmation">
                    </div>

                    <div class='form-group'>
                        <button type="submit">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
