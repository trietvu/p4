@extends('layouts.master')


@section('title')
    P4 - My First Ledger App
@stop

@section('content')

{!! Form::open(
array(
    'route' => 'admin.products.store',
    'class' => 'form',
    'novalidate' => 'novalidate',
    'files' => true)) !!}

<div class="form-group">
{!! Form::label('Transaction Name') !!}
{!! Form::string('trans_name') !!}
</div>

<div class="form-group">
{!! Form::label('Category') !!}
{!! Form::string('trans_type') !!}
</div>

<div class="form-group">
{!! Form::label('Amount') !!}
{!! Form::decimal('amount') !!}
</div>

<div class="form-group">
{!! Form::label('Recipient') !!}
{!! Form::string('recipient') !!}
</div>

<div class="form-group">
{!! Form::label('Memo') !!}
{!! Form::text('memo') !!}
</div>

<div class="form-group">
{!! Form::label('Receipt Image') !!}
{!! Form::file('image', null) !!}
</div>

<div class="form-group">
{!! Form::submit('Create Product!') !!}
</div>
{!! Form::close() !!}
</div>

@stop


-------------------------------

@extends('layouts.master')


@section('title')
    P4 - My First Ledger App
@stop

@section('content')

    <div class="stage">
        <div class="pageContent">
            <div class="pageTitle"><h2>My First Ledger</h2></div>
            <h1>My First Ledger</h1>
                <form action='upload' method='post' enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <label>Select image to upload</>
                    <input type='file' name='file' id='file'>
                    <input type='submit' value='Upload' name='submit'>
                </form>
            </div>
        </div>
    </div>

@stop
