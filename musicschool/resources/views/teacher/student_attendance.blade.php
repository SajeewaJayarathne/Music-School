@extends('MainLayout_teacher.mainlayout_teacher')

@section('content_area')

<div style="color: white; text-align:center; padding:10px 10px;">
  <h3>STUDENT ATTENDANCE</h3>                                             
</div>

<form>
	<div class="list-in-a-row">
		<ul>
			<li><h4 style="padding-right:5px;">Lesson :</h4></li>
			<li>
				<select class="form-control" name="lessonId">
					@foreach($lessonArray as $lessonItem)
						<option value="volvo">Volvo</option>
					@endforeach
				</select>
			</li>
		</ul>	

		<ul>
		    <li><h4 style="padding-right:5px;">Semester :</h4></li>    
			<li><input class="form-control" type="text" name="semester"  size="15px" style="color:#000000;"> </li>
		</ul>

		<ul>
		    <li><h4 style="padding-right:5px;">Date :</h4></li>    
			<li><input class="form-control" type="date" value="" name="date" id="semester" size="1px" style="color:#000000;"> </li>
		</ul>
	</div>

    <div class = "col-md-10" style="margin-left:2.2%; padding-top:2%;">
        <button type="button" class="btn btn-primary1" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
    </div>

	<div class = "col-md-10" style="margin-left:2.2%;">
    	<h4>Attendance	:</h4>
 	</div>
	
    <div class = "col-md-10" style="margin-left:2.2%;">		
        <table style="width:100%; color:#FFFFFF; margin-left:10%;">
            <thead>
                <th>Date</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Attendance</th>
            </thead>
            
            <tbody>
                <tr>
                    <td>dsdfhbh</td>
                    <td>140710N</td>
                    <td>D. S. G. Jayarathne</td>
                    <td>12</td>
                </tr>

                <tr>
                    <td>dsdfhbh</td>
                    <td>140710N</td>
                    <td>D. S. G. Jayarathne</td>
                    <td>12</td>
                </tr>
            </tbody>
        </table>
	</div>
</form>

@stop