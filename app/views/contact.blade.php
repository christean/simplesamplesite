@extends('layout')
@section('content')

<section class="header section-padding">
	<div class="background">&nbsp;</div> 
	<div class="container">
		<div class="header-text">
			<h1>Contact Me</h1>
			<p>Nuts! This form just check validation, doesn't send an email is just for sample.</p>
		</div>
	</div>
</section>

<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>HAVE ANY QUESTIONS?</h1>
			<p>Please contact me by sending a message using the form below:</p>
			{{HTML::ul($errors->all(),array('class'=>'errors'))}}
			{{ Form::open(array('url' => 'contact')) }}
			{{ Form::label('Subject') }}
			{{ Form::text('subject') }}
			<br />
			{{ Form::label('Email') }}
			{{ Form::text('email') }}
			<br />
			{{ Form::label('Phone') }}
			{{ Form::text('phone') }}
			<br />
			{{ Form::label('Message') }}
			{{ Form::textarea('message') }}
			<br />
			{{ Form::submit('Send') }}
			{{ Form::close() }}
		</div>
	</section>
</div> 
@stop