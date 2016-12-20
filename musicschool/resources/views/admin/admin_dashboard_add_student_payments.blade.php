@extends('admin.admin_dashboard_template')



@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ADD STUDENT PAYMENT</h3>
    </div>

    <form>
        <div class="col-md-6">

            <ul>
                <li><h4 style="padding-right:5px;">*Student ID :</h4></li>
                <li><input class="form-control" type="text" name="student_id" id="student_id" size="35px" style="color:#000000;"> </li>
            </ul>


            <ul>
                <li><h4 style="padding-right:5px;">*Amount :</h4></li>
                <li><input class="form-control" type="text" name="amount" id="amount" size="35px" style="color:#000000;"> </li>
            </ul>



        </div>

        <div class = "col-md-10" style="margin-left:3.8%; margin-top:2%;">
            <button type="button" class="btn btn-primary1" name="submit" id="submit" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>
    </form>

    <script>
        $(document).ready(function() {

            $('#submit').click(function(){

                if( $('#student_id').val() == "" || $('#amount').val() == "" )
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/storeStudentPayment',
                        data : {

                            student_id : $('#student_id').val().toString(),
                            amount : $('#amount').val().toString(),

                        },

                        type : 'post',
                        success : function(data){
                            alert("Successfully added the payment!");
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

