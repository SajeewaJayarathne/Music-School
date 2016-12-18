@extends('MainLayout_teacher.mainlayout_teacher')

@section('content_area')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>MY ATTENDANCE</h3>
    </div>

    <form>
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Year :</h4></li>
                <li><input class="form-control" type="text" id="year" size="15px" style="color:#000000;"> </li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Month :</h4></li>
                <li><input class="form-control" type="text" id="month" size="15px" style="color:#000000;"> </li>
            </ul>
        </div>

        <div class = "col-md-10" style="margin-left:2.2%; margin-top:2%;">
            <button type="button" class="btn btn-primary1" id="submit_button" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>

        <div class="col-md-10" style="padding-top:3%;">
            <div class="col-md-10">
                <ul>
                    <li><h4 style="padding-right:5px;">Conducted Days :</h4><span id="conducted_days" style="margin-left:10%; color:WHITE; font-size:20px;">20</span></li>
                </ul>
            </div>
            <div class="col-md-10">
                <ul>
                    <li><h4 style="padding-right:5px;">Present Days :</h4><span id="present_days" style="margin-left:10%; color:WHITE; font-size:20px;">15</span></li>
                </ul>
            </div>
            <div class="col-md-10">
                <ul>
                    <li><h4 style="padding-right:5px;">Absent Days:</h4><span id="absent_days" style="margin-left:10%; color:WHITE; font-size:20px;">5</span></li>
                </ul>
            </div>
        </div>
    </form>

@stop