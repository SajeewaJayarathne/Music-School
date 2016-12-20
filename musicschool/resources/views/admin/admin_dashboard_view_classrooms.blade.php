@extends('admin.admin_dashboard_template')

@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>CLASSROOMS</h3>
    </div>

    <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%; margin-top: 2%; font-size: large;">
        <table border="0" cellspacing="20" cellpadding="30">
            <tr>
                <th style="padding: 0 30px;">Room Number</th>
                <th style="padding: 0 30px;">Building</th>
                <th style="padding: 0 30px;">Room Capacity</th>
                <th style="padding: 0 30px;">Room Type</th>
            </tr>
            @foreach($classRoomList[0] as $row)
                <tr>
                    <td style="padding: 0 30px;">{{$row -> room_number}}</td>
                    <td style="padding: 0 30px;">{{$row -> building}}</td>
                    <td style="padding: 0 30px;">{{$row -> capacity}}</td>
                    <td style="padding: 0 30px;">{{$row -> room_type}}</td>

                </tr>
            @endforeach

        </table>
    </div>

@stop