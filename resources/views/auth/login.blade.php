@extends('layouts.app')

    
@section('content')
    <div class="conatner">
    	<div style="text-align:center;">Login</div>
    	 <div class="row ">
    	 @include('common.errors')
		    <form class="col s4 offset-m4 " style="background:white;" method="POST" action="/auth/login">
		    {!! csrf_field() !!}
		      
		       <div class="row">
		        <div class="input-field col s12">
		          <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
		          <label for="email">Email</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" name="password" class="validate">
		          <label for="password">Password</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input type="checkbox" class="filled-in" id="filled-in-box" name="remember" checked="checked" />
                  <label for="filled-in-box">Remember me</label>
		        </div>
		      </div>
		      
		      <div class="row">
		      <button class="btn waves-effect waves-light" type="submit" name="action">Login
    <i class="material-icons right">send</i>
  </button>
		      	
		      </div>
		     
		    </form>
		  </div>
    </div>


 @endsection

 