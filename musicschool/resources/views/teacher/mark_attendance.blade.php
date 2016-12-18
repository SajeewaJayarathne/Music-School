@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

<div style="color: white; text-align:center; padding:10px 10px;">
  <h3>MARK ATTENDANCE</h3>                                             
</div>

<form method="post" action="{{route('mark_student_attendance_second')}}">
	<div class="list-in-a-row">
	<ul>
		<li><h4 style="padding-right:5px;">Lesson :</h4></li>
		<li><input list = "lesson_IDs" class="form-control" type="text" name="lesson_id" size="35px" id="lesson_id" style="color:#000000;" /></li>
		<datalist id="lesson_IDs">

		</datalist>
	</ul>	

	<ul>
	    <li><h4 style="padding-right:5px;">Date :</h4></li>    
		<li><input class="form-control" type="date" value="" name="date" id="date" size="15px" style="color:#000000;"> </li>
	</ul> 

	</div>

	<div class = "col-md-10" style="margin-left:2.2%; margin-top:2%;">
		<button type="button" class="btn btn-primary1" name="mark_attendance" id="mark_attendance" style="color:#000000; font-size:110%;"><b>MARK ATTENDANCE</b></button>
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
				<td><input type="checkbox"/></td>
				<td>140710N</td>
				<td>D. S. G. Jayarathne</td>
			</tr>

			<tr>
				<td><input type="checkbox"/></td>
				<td>140710N</td>
				<td>D. S. G. Jayarathne</td>
			</tr>

			</tbody>
		</table>


	</div>

</form>

<script>
    $(document).ready(function() {
        $('#select_2').hide();
        $('#lesson_id').keyup(function(){
            $.ajax({
                url : 'http://localhost:8000/getLessonID',
                data : { lesson_id : $('#lesson_id').val()},
                type : 'get',
                success : function(data){
                    $('#select_2').show();
                    $('#lesson_IDs').empty();
                    for(i =0; i < data.length; i++){
                        $('#lesson_IDs').append('<option value='+data[i].lesson_id+'>');
                    }



                }
            })
        });
    });

</script>

@stop

