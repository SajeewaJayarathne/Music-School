@extends('admin.admin_dashboard_template')

@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>INSTRUMENTS</h3>
    </div>

    <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%; margin-top: 2%; font-size: large;">
        <table border="0" cellspacing="20" cellpadding="30">
            <tr>
                <th style="padding: 0 30px;">Instrument Id</th>
                <th style="padding: 0 30px;">Instrument Name</th>
                <th style="padding: 0 30px;">Category</th>

            </tr>
            @foreach($instrumentList[0] as $row)
                <tr>
                    <td style="padding: 0 30px;">{{$row -> instrument_id}}</td>
                    <td style="padding: 0 30px;">{{$row -> instrument_name}}</td>
                    <td style="padding: 0 30px;">{{$row -> category}}</td>

                </tr>
            @endforeach

        </table>
    </div>

@stop