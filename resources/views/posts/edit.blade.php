@extends('layouts.app')


@section('content')

    <h1>Edit Post</h1>

    {!! Form::model($post, array('method'=>'PATCH', 'action'=> array('PostsController@update', $post->id))) !!}
    {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null,array('class'=>'form-control', 'placeholder'=>'Enter Title')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Post', array('class'=>'btn btn-info')) !!}

    </div>
    {!! Form::close() !!}




    {!! Form::open(array('method'=>'DELETE', 'action'=> array('PostsController@destroy', $post->id))) !!}
        {{ csrf_field() }}


    <div class="form-group">
        {!! Form::submit('Delete Post', array('class'=>'btn btn-danger')) !!}

    </div>
    {!! Form::close() !!}

    {{--        <input type="hidden" name="_method" value="DELETE">--}}
{{--        <input type="submit" value="DELETE">--}}
{{--    </form>--}}



@endsection

@yield('footer')