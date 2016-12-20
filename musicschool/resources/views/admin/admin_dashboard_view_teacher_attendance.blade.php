@extends('admin.admin_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>TEACHER ATTENDANCE</h3>
    </div>

    <form method="post" action="{{route('view_teacher_attendance_admin')}}">


        <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%; margin-top: 2%; font-size: large;">
            <table border="0" cellspacing="20" cellpadding="30">
                <tr>
                    <th style="padding: 0 30px;">Teacher ID</th>
                    <th style="padding: 0 30px;">First Name</th>
                    <th style="padding: 0 30px;">Last Name</th>
                    <th style="padding: 0 30px;">Attendance Count</th>


                </tr>
                @foreach($teacherAttendanceSummary as $row)
                    <tr>
                        <td style="padding: 0 30px;">{{$row -> id}}</td>
                        <td style="padding: 0 30px;">{{$row -> first_name}}</td>
                        <td style="padding: 0 30px;">{{$row -> last_name}}</td>
                        <td style="padding: 0 30px;">{{$row -> attendance_count}}</td>


                    </tr>
                @endforeach

            </table>
        </div>





    </form>

    <script>




    </script>



@stop

