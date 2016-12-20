@extends('admin.admin_dashboard_template')

@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ADD CLASSROOM</h3>
    </div>


    <form>
        <div class="col-md-6">
            <ul >
                <li><h4 style="padding-right:5px;">Room Number :</h4></li>
                <li><input class="form-control" type="text" name="room_number" id="room_number" size="35px" style="color:#000000;"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Building :</h4></li>
                <li><input class="form-control" type="text" name="building" id="building" size="35px" style="color:#000000;"> </li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Room Capacity :</h4></li>
                <li><input class="form-control" type="text" name="capacity" id="capacity" size="35px" style="color:#000000;"> </li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Room Type :</h4></li>
                <li>
                    <select class="form-control" name="room_type" id="room_type" style="color:#000000; size:35px;">
                        <option value="Lecture Room">Lecture Room</option>
                        <option value="Practical Lab">Practical Lab</option>
                    </select>
                </li>
            </ul>


        </div>

        <div class = "col-md-10" style="margin-left:3.8%; margin-top:2%;">
            <button type="button" class="btn btn-primary1" name="submit" id="submit" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>
    </form>

    <script>
        $(document).ready(function() {

            $('#submit').click(function(){

                if($('#room_number').val() == "" || $('#building').val() == "" || $('#capacity').val() == "")
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/storeRoom',
                        data : {

                            room_number : $('#room_number').val().toString(),
                            building : $('#building').val().toString(),
                            capacity : $('#capacity').val().toString(),
                            room_type : $('#room_type').val().toString()

                        },

                        type : 'post',
                        success : function(){
                            alert("Success: Successfully added the room");
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
