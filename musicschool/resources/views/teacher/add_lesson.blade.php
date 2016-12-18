@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ADD LESSON</h3>
    </div>

<form>
    <div class="col-md-6">
        <ul >
            <li><h4 style="padding-right:5px;">Lesson ID :</h4></li>
            <li><input class="form-control" type="text" name="lesson_id" size="35px" style="color:#000000;"></li>
        </ul>

        <ul>
            <li><h4 style="padding-right:5px;">Lesson Name :</h4></li>
            <li><input class="form-control" type="text" name="lesson_name" size="35px" style="color:#000000;"> </li>
        </ul>

        <ul>
            <li><h4 style="padding-right:5px;">Lesson Type :</h4></li>
            <li>
                <select class="form-control" name="lesson_type" style="color:#000000; size:35px;">
                    <option value="Theory">Theory</option>
                    <option value="Practical">Practical</option>
                    <option value="Both">Theory & Practical</option>

                </select>
            </li>
        </ul>

        <ul>
            <li><h4 style="padding-right:5px;">Credits :</h4></li>
            <li><input class="form-control" type="text" name="lesson_credits" size="35px" style="color:#000000;"> </li>
        </ul>


    </div>

    <div class = "col-md-10" style="margin-left:3.8%; margin-top:2%;">
        <button type="button" class="btn btn-primary1" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
    </div>

</form>

@stop