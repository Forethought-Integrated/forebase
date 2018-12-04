@extends('layouts.app')

@section('title', '| Edit Post')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Post</h1>
        <hr>
            {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}<br>

            {{ Form::label('body', 'Post Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}<br>

            {{ Form::label('author_id', 'Author Id') }}
            {{ Form::text('author_id', null, array('class' => 'form-control')) }}

            @if (isset($post->author_id))
                {!! Form::hidden('author_id', $post->author_id) !!}
            @endif
            
            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
    </div>
    </div>
</div>

@endsection