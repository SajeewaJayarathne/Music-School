@extends('admin.admin_dashboard_template')

@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>UPDATE RECEIPT</h3>
    </div>


    <form>
        <div class="col-md-6">
            <ul >
                <li><h4 style="padding-right:5px;">*Receipt No :</h4></li>
                <li><input class="form-control" type="text" name="receipt_number" id="receipt_number" size="35px" style="color:#000000;"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">*New Amount :</h4></li>
                <li><input class="form-control" type="text" name="new_amount" id="new_amount" size="35px" style="color:#000000;"> </li>
            </ul>


        </div>

        <div class = "col-md-10" style="margin-left:3.8%; margin-top:2%;">
            <button type="submit" class="btn-lg btn-success" name="submit" id="submit" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>
    </form>

    <script>
        $(document).ready(function() {

            $('#submit').click(function(){

                if($('#receipt_number').val() == "" || $('#new_amount').val() == "")
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/updateReceipt',
                        data : {

                            receipt_id : $('#receipt_number').val().toString(),
                            amount : $('#new_amount').val().toString()


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
