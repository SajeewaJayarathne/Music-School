@extends('MainLayout.mainlayout')

@section('main_menu')
	<li data-toggle="collapse" data-target="#add_users" ><a href="#"><span>Classes</span></a>
		<ul id="add_users" class="collapse" >
			<li><a href="#" >View Lessons</a></li>
			<li><a href="#" >View Grades</a></li>
			<li><a href="#" >View Time Table</a></li>
		</ul>
	</li>

	<li data-toggle="collapse" data-target="#classes" ><a href="#"><span>Management</span></a>
		<ul id="classes" class="collapse">
			<li><a href="#" onclick="window.location ='{{route("student_dashboard_view_my_attendance")}}'" >View Attendance</a></li>
			<li><a href="#" onclick="window.location ='{{route("student_dashboard_view_my_payments")}}'" >View Payments</a></li>
			<li><a href="#" >Change Password</a></li>
		</ul>
	</li>


@stop

@section('content_area')
	@yield('content_area_main')
@stop

