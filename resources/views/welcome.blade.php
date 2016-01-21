@extends('layouts.layout')

@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>Welcome To <b>{{ oblagio()->applicationName }}</b></h1>
   	
   	<p>
   		
   		Permudah pekerjaan anda dengan oblagio Jobs.

   	</p>

    <p><a class="btn btn-primary btn-lg" href="{{ url('registrasi') }}" role="button">Daftar &raquo;</a></p>
  </div>
</div>




@endsection