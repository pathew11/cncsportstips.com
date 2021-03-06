@extends('layouts.app')

@section('content')
    <h1>Edit Tip</h1>
    {!! Form::open(['action'=>['TipsController@update', $tip->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $tip->title, ['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $tip->body, ['id'=>'article-ckeditor','class'=> 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('tip_image')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="application/javascript"> window.addEventListener('load', function () {
            CKEDITOR.replace( 'article-ckeditor' )
        })
    </script>
@endsection
