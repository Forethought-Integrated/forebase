@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div>
                       <a href="{{asset('/knowledge')}}">FileManagergit </a>
                       <br>
                       <a href="{{asset('/socialjson')}}">Socialjson</a>
                       <br>
                       <a href="{{asset('/permissions')}}">Permissions</a>
                       <br>
                       <a href="{{asset('/socialapp')}}">Social</a>
                       <br>
                       

   <div class="dropdown">
    <b class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CRM
    
  </b>
    <ul class="dropdown-crm">
      <li><a href="{{asset('account')}}">Account</a></li>
      <li><a href="{{asset('campaign')}}">Campaign</a></li>
      <li><a href="{{asset('contact')}}">Contact</a></li>
      <li><a href="{{asset('lead')}}">Lead</a></li>
      <li><a href="{{asset('opportunity')}}">Opportunity</a></li>
      <li><a href="{{asset('customer')}}">Customer</a></li>
    </ul>
  </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Posts</h3></div>
                    <div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>

                   <?php //echo "<pre>"; print_r($posts); echo "</pre>"; ?>
                   
                    @foreach ($posts as $post)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('posts.show', $post->id ) }}"><b>{{ $post->title }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($post->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection