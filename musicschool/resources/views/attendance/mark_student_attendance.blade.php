@extends('MainLayout.mainlayout')

@section('main_menu')
	<li><a href="#"><span>Attendance</span></a>
		<ul>
			<li><a href="#">Mark Student Attendance</a></li>
			<li><a href="#">Mark Teacher Attendance</a></li>
			<li><a href="#">View Attendance</a></li>
		</ul>
	</li>

	<li><a href="#"><span>My Progress</span></a></li>

	<li><a href="#"><span>Class Allocation</span></a></li>

@stop


@section('content_area')
	<div style="color: white; text-align:center; padding:10px 10px;">
	  <h3>MARK ATTENDANCE</h3>                                             
	</div>

<form>
	<div class="list-in-a-row">
	<ul>
		<li><h4 style="padding-right:5px;">Lesson ID :</h4></li>
		<li><input class="form-control" type = "text" name="semester" id="semester" size="1px"></li>
	</ul>	

	<ul>
	    <li><h4 style="padding-right:5px;">Semester :</h4></li>
	    <li><input class="form-control" type = "text" name="semester" id="semester" size="1px"></li>
	</ul>

	<ul>
	    <li><h4 style="padding-right:5px;">Teacher ID :</h4></li>
	    <li><input class="form-control" type = "text" name="teacher-id" id="teacher-id" size="2px"></li>
	</ul> 

	<ul>
	    <li><h4 style="padding-right:5px;">Date :</h4></li>    
		<li><input type="date" value="" name="date"  size="15px" style="color:#000000;"> </li>
	</ul> 

	</div>

	<div class = "col-md-10" style="margin-left:2.2%;">		
		<h4>Student Names :</h4>
	</div>

	<div class = "col-md-10" style="margin-left:2.2%;">		
		<table style="width:80%; color:#FFFFFF; margin-left:20%;">
		    <thead>
		        <th></th>
		        <th>Index No:</th>
		        <th>Name</th>
		    </thead>
		   	
		   	<tbody>
		   		<tr>
		   			<td><input type='checkbox'/></td>
		   			<td>140710N</td>
		   			<td>D. S. G. Jayarathne</td>
		   		</tr>

		   		<tr>
		   			<td><input type='checkbox'/></td>
		   			<td>140710N</td>
		   			<td>D. S. G. Jayarathne</td>
		   		</tr>

		   	</tbody>
		</table>


	</div>

	<div class = "col-md-10" style="margin-left:2.2%; margin-top:2%;">
		<button type="submit-attendance" class="btn btn-primary1" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
	</div>
</form>

@stop

