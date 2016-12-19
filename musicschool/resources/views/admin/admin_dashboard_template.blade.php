@extends('MainLayout.mainlayout')

@section('main_menu')
	<li data-toggle="collapse" data-target="#add_users" ><a href="#"><span>Add Users</span></a>
		<ul id="add_users" class="collapse" >
			<li><a href="#" onclick="window.location ='{{route("add_students")}}'">Student</a></li>
			<li><a href="#" onclick="window.location ='{{route("add_teachers")}}'">Teacher</a></li>
			<li><a href="#" onclick="window.location ='{{route("add_admin")}}'">Administrator</a></li>
		</ul>
	</li>

	<li data-toggle="collapse" data-target="#classes" ><a href="#"><span>Classes</span></a>
		<ul id="classes" class="collapse">
			<li><a href="#" onclick="window.location ='{{route("add_classroom")}}'" >Add Classrooms</a></li>
			<li><a href="#">View Classrooms</a></li>
			<li><a href="#">Allocate Classrooms</a></li>
			<li><a href="#">Update Allocations</a></li>
		</ul>
	</li>

	<li data-toggle="collapse" data-target="#instruments"><a href="#"><span>Instruments</span></a>
		<ul id="instruments" class="collapse">
			<li><a href="#">View Instruments</a></li>
			<li><a href="#">Add Instruments</a></li>
		</ul>
	</li>

	<li data-toggle="collapse" data-target="#payments"><a href="#"><span>Payments</span></a>
		<ul id="payments" class="collapse">
			<li><a href="#">Add Student Payments</a></li>
			<li><a href="#">Update Student Payments</a></li>
			<li><a href="#">View Teachers Payments</a></li>
			<li><a href="#">Update Teachers Payments</a></li>
		</ul>
	</li>

	<li data-toggle="collapse" data-target="#attendance"><a href="#"><span>Attendance</span></a>
		<ul id="attendance" class="collapse">
			<li><a href="#">View Teachers Attendance</a></li>
			<li><a href="#">Add Teachers Attendance</a></li>
			<li><a href="#">View Student Attendance</a></li>
		</ul>
	</li>
@stop

@section('content_area')
	@yield('content_area_main')
@stop

