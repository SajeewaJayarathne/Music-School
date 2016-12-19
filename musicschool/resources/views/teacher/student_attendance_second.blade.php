@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>STUDENT ATTENDANCE</h3>
    </div>

    <form>
        <div class="list-in-a-row" style="margin-left: 2%;">
            <ul>
                <li><h4 style="padding-right:5px;">Lesson :</h4></li>
                <li><h4 style="padding-right:5px;">{{$studentList[0]}} </h4></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Date :</h4></li>
                <li><h4 style="padding-right:5px;">{{$studentList[1]}} </h4></li>
            </ul>
        </div>

        <div class="col-md-10" style="margin-left: 10%; margin-bottom: 2%; font-size: 20px;">
            <table>
                @foreach($studentList[2] as $row)
                    <tr>
                        <td>{{$row -> student_id}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </form>

@stop