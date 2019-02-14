@extends('layouts.adminApp')

@section('MainContent')

    <div class="row">
      <div class="col-md-12">
        <center>
        	<div style="font-size: 150px;font-weight: 600;">
        		403!
        	</div>
        	<div style="font-size: 30px;font-weight: 400;">
        		{{-- Unfortunately,You Do Not Have Permission to view this page. --}}
        		Unfortunately,You Do Not Have Permission to access this section.
        	</div>
        	<br>
        	<a href="/">
                <button style="background-color: #333; color: white;font-weight: 600">Back To Home</button>
            </a>
        </center>
      </div>
    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection

