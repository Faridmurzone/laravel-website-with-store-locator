@extends('layouts.sub')

@section('head')
	<title>User registration</title>
@stop

@section('nav')
    <li class="fadeover"><a href="patient-info">INFO</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">LOCATIONS <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="locations-list">LOCATIONS LIST</a></li>
            <li><a href="google-locations">LOCATIONS NEAR ME</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="bone_densitometry">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct_angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general_xray">GENERAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear_medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet_rich_plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental_x_ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="cardiac_imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
    <li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li><a href="blog">BLOG</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div></li>
    <li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
	@if($errors->any())
	  <ul>
	    {{ implode('', $errors->all('<li>:message</li>'))}}
	  </ul>
	@endif
	{{ Form::open(array('route' => 'register.store')) }}
	<p>{{ Form::label('email', 'Email') }}
	  {{ Form::text('email') }}
	</p>
	<p>{{ Form::label('password', 'Password') }}
	  {{ Form::text('password') }}
	</p>
	<p>{{ Form::label('password_confirmation', 'Password confirm') }}
	  {{ Form::text('password_confirmation') }}
	</p>
	<p>
	{{ Form::label('dob', 'Date of birth') }}
	  {{ Form::text('dob') }}
	</p>
	<p>
	{{ Form::label('firstName', 'First Name') }}
	  {{ Form::text('first_name') }}
	</p>
	<p>
	{{ Form::label('surname', 'Surname') }}
	  {{ Form::text('surname') }}
	</p>
	<p>
	{{ Form::label('phoneNumber', 'Phone number') }}
	  {{ Form::text('phone_number') }}
	</p>
	<p>{{ Form::submit('Submit') }}
	</p>
	 
	{{ Form::close() }}
@stop