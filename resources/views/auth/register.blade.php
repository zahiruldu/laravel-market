@extends('layouts.app')

@section('content')
	<div class="conatner">
    	<div style="text-align:center;">Register</div>
    	 <div class="row ">
    	 @include('common.errors')
		    <form class="col s4 offset-m4 " style="background:white;" method="POST" action="/auth/register">
		    {!! csrf_field() !!}
		      
		       <div class="row">
		        <div class="input-field col s12">
		          <input id="first_name" type="text"  class="validate" name="name" value="{{ old('name') }}">
                  <label for="first_name">Username</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="first_name" type="text"  class="validate" name="first_name" value="{{ old('first_name') }}">
                  <label for="first_name">First Name</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="last_name" type="text" class="validate" name="last_name" value="{{ old('last_name') }}">
                  <label for="last_name">Last Name</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
		          <label for="email">Email</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" name="password" class="validate" >
		          <label for="password">Password</label>
		        </div>
		      </div>
		       <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" name="password_confirmation" class="validate" >
		          <label for="password">Confirm Password</label>
		        </div>
		      </div>
		      <div class="row">
		      <button class="btn waves-effect waves-light" type="submit" name="action">Register
    <i class="material-icons right">send</i>
  </button>
		      	
		      </div>
		     
		    </form>
		  </div>
    </div>
@endsection
