@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


           <?php 
           
           //Auth::guest();


           //echo "<pre>"; echo Auth::user()->name; echo "</pre>";
          // echo "<pre>"; Auth::guest(); echo "</pre>"; 

           ?> 

        <h1>Create New Post</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'posts.store')) }}

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('body', 'Post Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                    

             @if (isset(Auth::user()->id))
                {!! Form::hidden('author_id', Auth::user()->id ) !!}
             @endif
            <br>
            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection
