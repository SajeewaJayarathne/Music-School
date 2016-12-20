@extends('admin.admin_dashboard_template')

@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>UPDATE TEACHER PAYMENTS</h3>
    </div>


    <form>
        <div class="col-md-6">
            <ul >
                <li><h4 style="padding-right:5px;">Add Additional Payment For All Teachers:</h4></li>
                <li><h5 style="padding-right:5px;">Amount:</h5></li>
                <li><input class="form-control" type="text" name="all_payment" id="all_payment" size="35px" style="color:#000000;"></li>
            </ul>
        </div>

        <div class = "col-md-10" style="margin-left:3.8%; margin-top:2%;">
            <button type="submit" class="btn-lg btn-success" name="submit_all" id="submit_all" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>

        <div class="col-md-6">
            <ul >
                <li><h4 style="padding-right:5px;">Add Additional Payment:</h4></li>

                <li><h5 style="padding-right:5px;">Teacher ID:</h5></li>

                <li><input class="form-control" type="text" name="teacher_id" id="teacher_id" size="35px" style="color:#000000;"></li>
                <li><h5 style="padding-right:5px;">Amount:</h5></li>
                <li><input class="form-control" type="text" name="teacher_payment" id="teacher_payment" size="35px" style="color:#000000; margin-top: 10px"></li>
            </ul>
        </div>

        <div class = "col-md-10" style="margin-left:3.8%; margin-top:2%;">
            <button type="submit" class="btn-lg btn-success" name="submit_single" id="submit_single" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>
    </form>

    <script>

        $(document).ready(function() {
            $('#submit_all').click(function(){
                alert("Error: Required fields are empty!");
                if($('#all_payment').val() == "")
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/all_payment_update',
                        data : {

                            all_payment : $('#all_payment').val().toString()


                        },

                        type : 'post',
                        success : function(){
                            alert("Success: Successfully updated the receipt!");
                        },
                        error : function(error){
                            alert(error.statusText);
                        }

                    })


                }

            });
        });

        $(document).ready(function() {

            $('#submit_single').click(function(){

                if($('#teacher_payment').val() == "" || $('#teacher_id').val() == "")
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/teacher_payment_update',
                        data : {

                            teacher_payment : $('#teacher_payment').val().toString()
                            teacher_id : $('#teacher_id').val().toString()


                        },

                        type : 'post',
                        success : function(){
                            alert("Success: Successfully updated the receipt!");
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
