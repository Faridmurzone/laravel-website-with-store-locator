@extends('layouts.sub')

@section('head')
	<title>Patients - Contact</title>
@stop

@section('nav')
	<li class="fadeover"><a href="patient-info">PATIENT INFORMATION</a></li>
	<li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="fadeover"><a href="bone-densitometry-dexa">BONE DENSITOMETRY (DEXA)</a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct-angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X-RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear-medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="#">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X-RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="#">BILLING</a></li>
    <li class="fadeover"><a href="blog">BLOG</a></li>
	<li><a href="#">CONTACT</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon-new.png" alt="glyphicon" width="31" height="31"></div></li>
@stop

@section('content')
    <p>&nbsp;</p>
    <p>At Capital Radiology we offer premium level imaging and treatment services to the sporting and wider community meaning that you can have access to the same high quality imaging services, personnel, expertise and treatments as Australia’s elite athletes. We are open extended hours during the week and on weekends and free patient parking is available onsite. We invite you to contact us for more information, enquiries or bookings on 1300 X-RAY (9729).</p>
@stop