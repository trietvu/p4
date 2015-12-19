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

                <form method="POST" action="/password/email">
                    {!! csrf_field() !!}

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
                        <button type="submit">
                            Send Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
