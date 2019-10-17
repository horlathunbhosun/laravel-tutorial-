@extends('layouts.app')


@section('content')
{{--    <form method="post" action="/posts">--}}

    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}
        {{ csrf_field() }}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Enter Title')) !!}
        </div>

        <div class="form-group">
            {!! Form::file('file',  ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
        </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    </div>


@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>

    </div>
    @endif
    {!! Form::close() !!}




@endsection

@yield('footer')