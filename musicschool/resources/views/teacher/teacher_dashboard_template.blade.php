@extends('MainLayout.mainlayout')

@section('main_menu')
	<li data-toggle="collapse" data-target="#lessons" ><a href="#"><span>Lessons</span></a>
		<ul id="lessons" class="collapse" >
			<li><a href="#" onclick="window.location ='{{route("add_lesson")}}'">Add Lesson</a></li>
			<li><a href="#" onclick="window.location ='{{route("update_lesson")}}'">Update Lesson</a></li>
		</ul>
	</li>

	<li data-toggle="collapse" data-target="#attendance" ><a href="#"><span>Attendance</span></a>
		<ul id="attendance" class="collapse">
			<li><a href="#" onclick="window.location ='{{route("mark_student_attendance")}}'">Mark Attendance</a></li>
			<li><a href="#" onclick="window.location ='{{route("view_student_attendance")}}'">Student Attendance</a></li>
			<li><a href="#" onclick="window.location ='{{route("view_teacher_attendance")}}'">My Attendance</a></li>
		</ul>
	</li>

	<li data-toggle="collapse" data-target="#monthly_payment"><a href="#" onclick="window.location ='{{route("monthly_payment")}}'"><span>Monthly Payment</span></a></li>

	<li data-toggle="collapse" data-target="#grades" ><a href="#"><span>Student Grades</span></a>
		<ul id="grades" class="collapse">
			<li><a href="#" onclick="window.location ='{{route("add_grades")}}'">Add Grades</a></li>
			<li><a href="#" onclick="window.location ='{{route("view_grades")}}'">View Grades</a></li>
		</ul>
	</li>

@stop

@section('content_area')
	@yield('content_area_main')
@stop

