@extends('admin.admin_dashboard_template')

@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>TEACHER ATTENDANCE</h3>
    </div>


    <form >
        <div class="col-md-6">
            <ul >
                <li><h4 style="padding-right:5px;">*Teacher ID :</h4></li>
                <li><input class="form-control" type="text" name="teacher_id" id="teacher_id" size="35px" style="color:#000000;"></li>

            </ul>
        </div>

        <div class = "list-in-a-row" style ="margin-top: 28px; margin-left: -150px">
            <ul >
                <li>
                    <div class = "col-md-3" >
                        <button type="button" class="btn btn-success" name="check_in" id="check_in" style="color:#000000; font-size:110%;"><b>CHECK IN</b></button>
                    </div>
                </li>

                <li>
                    <div class = "col-md-3">
                        <button type="button" class="btn btn-success" name="check_out" id="check_out" style="color:#000000; font-size:110%;"><b>CHECK OUT</b></button>
                    </div>
                </li>
            </ul>
        </div>






    </form>

    <script>
        $(document).ready(function() {

            $('#check_in').click(function(){

                if($('#teacher_id').val() == "")
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/check_in_teacher',
                        data : {

                            teacher_id : $('#teacher_id').val().toString(),

                        },

                        type : 'post',
                        success : function(){
                            alert("Success: Successfully checked in!");
                        },
                        error : function(error){
                            alert("Already Checked in!");
                        }

                    })


                }

            });
        });

        $(document).ready(function() {

            $('#check_out').click(function(){

                if($('#teacher_id').val() == "")
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/check_out_teacher',
                        data : {

                            teacher_id : $('#teacher_id').val().toString(),

                        },

                        type : 'post',
                        success : function(){
                            alert("Success: Successfully checked out!");
                        },
                        error : function(error){
                            alert(error.statusText);
                        }

                    })


                }

            });
        });



    </script>



@stop
