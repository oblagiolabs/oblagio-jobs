@extends('layouts.layout')

@section('content')

<div class="container" style="padding-top:100px;">
			
	<div class="well">

		<h3>Form Registrasi OBLGIOJOBS</h3>

	</div>
	

	<div id = 'alert'  class="alert alert-danger fade out">
		<div id = 'alertContent'></div>
	</div>


	{!! Form::open(['id' => 'form-registrasi']) !!}
	  
	  <div class="form-group">
	    
	  	<label>Username</label>
	  	{!! Form::text('username' , null , ['id' => 'username' , 'class' => 'form-control']) !!}
	  
	  </div>
	  
	  <div class="form-group">
	    
	  	<label>Email</label>
	  	{!! Form::text('email' , null , ['id' => 'email' , 'class' => 'form-control']) !!}
	  
	  </div>

	  <div class="form-group">
	    
	  	<label>Password</label>
	  	{!! Form::password('password' , ['id' => 'password' , 'class' => 'form-control']) !!}
	  
	  </div>

	  <div class="form-group">
	    
	  	<label>Verify Password</label>
	  	{!! Form::password('verify' , ['id' => 'verify' , 'class' => 'form-control']) !!}
	  
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Daftar</button>
	{!! Form::close() !!}
	
</div>

@endsection

@section('script')

<script type="text/javascript">
	
$(document).ready(function(){

	$("#form-registrasi").on('submit'  , function(){

		datas = $(this).serialize();

		$.ajax({

			type : 'post',
			url : '{{ url("registrasi-validate") }}',
			data : datas,
			success : function(data){


				$("#alert").attr('class' , 'alert alert-danger fade in');
				$("#alertContent").html(data.messages);
					
			},

		});

		return false;

	});

});

</script>


@endsection