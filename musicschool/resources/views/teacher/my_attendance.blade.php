@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>MY ATTENDANCE</h3>
    </div>

    <form action="{{route('getTeacherAttendanceList')}}" method="post">
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Year :</h4></li>
                <li><input class="form-control" type="text" id="year" name="year" size="15px" style="color:#000000;"> </li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Month :</h4></li>
                <li><input class="form-control" type="text" id="month" name="month" size="15px" style="color:#000000;"> </li>
            </ul>

            <ul>
                <li style="padding-left: 50px">
                    <button name = "next" id = "next" type="submit" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>NEXT</b></button>
                </li>
            </ul>
        </div>
    </form>

@stop