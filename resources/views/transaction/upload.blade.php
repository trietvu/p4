@extends('layouts.master')

@section('content')
    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle"><h2>My First Ledger</h2></div>

                <h1>File Upload</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method='POST' action='/transactions/postUpload'>
                    {!! csrf_field() !!}
                    <div class='form-group'>
                        <label for='receipt_img'>Select image to upload</label>
                        <input type='file' name='file' id='file'>
                    </div>

                    <input type='submit' value='Upload' name='Submit'>

                </form>
            </div>
        </div>
    </div>
@stop
