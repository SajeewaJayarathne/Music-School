@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>MY ATTENDANCE</h3>
    </div>

    <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%; margin-top: 2%; font-size: large;">
        <table border="0" cellspacing="20" cellpadding="30">
            <tr>
                <th style="padding: 0 30px;">Date</th>
                <th style="padding: 0 30px;">Check_In Time</th>
                <th style="padding: 0 30px;">Check_Out Time</th>
            </tr>
            @foreach($AttendanceList[0] as $row)
                <tr>
                    <td style="padding: 0 30px;">{{$row -> attend_date}}</td>
                    <td style="padding: 0 30px;">{{$row -> check_in}}</td>
                    <td style="padding: 0 30px;">{{$row -> check_out}}</td>

                </tr>
            @endforeach

        </table>
    </div>

@stop