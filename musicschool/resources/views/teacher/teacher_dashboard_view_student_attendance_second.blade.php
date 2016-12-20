@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>STUDENT ATTENDANCE</h3>
    </div>

    <form method="post" action="{{route('getStudentAttendanceList_teacher')}}">


        <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%; margin-top: 2%; font-size: large;">
            <table border="0" cellspacing="20" cellpadding="30">
                <tr>
                    <th style="padding: 0 30px;">Date</th>


                </tr>
                @foreach($studentAttendanceList as $row)
                    <tr>
                        <td style="padding: 0 30px;">{{$row -> attend_date}}</td>


                    </tr>
                @endforeach

            </table>
        </div>









    </form>

    <script>







    </script>



@stop

