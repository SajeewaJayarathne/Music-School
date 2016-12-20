@extends('admin.admin_dashboard_template')

@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ALLOCATE CLASSROOM</h3>
    </div>


    <form>
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Lesson ID :</h4></li>
                <li><input list = "lesson_IDs" class="form-control" type="text" name="lesson_id" size="25px" id="lesson_id" style="color:#000000;" /></li>
                <datalist id="lesson_IDs">

                </datalist>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Room Number :</h4></li>
                <li><input list = "lesson_IDs" class="form-control" type="text" name="room_number" size="30px" id="room_number" style="color:#000000;" /></li>

            </ul>




        </div>

        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Date :</h4></li>
                <li style="padding-left: 39px">
                    <select class="form-control" name="date" id="date" style="color:#000000; size:35px;">
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                </li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Start Time :</h4></li>
                <li>
                    <select class="form-control" name="start_time" id="start_time" style="color:#000000; size:35px;">
                        <option value="8.15AM">8.15AM</option>
                        <option value="9.15AM">9.15AM</option>
                        <option value="10.15AM">10.15AM</option>
                        <option value="11.15AM">11.15AM</option>
                        <option value="12.15PM">12.15PM</option>
                        <option value="1.15PM">1.15PM</option>
                        <option value="2.15PM">2.15PM</option>
                        <option value="3.15PM">3.15PM</option>
                        <option value="4.15PM">4.15PM</option>
                        <option value="5.15PM">5.15PM</option>
                    </select>
                </li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">End Time :</h4></li>
                <li>
                    <select class="form-control" name="end_time" id="end_time" style="color:#000000; size:35px;">

                        <option value="9.15AM">9.15AM</option>
                        <option value="10.15AM">10.15AM</option>
                        <option value="11.15AM">11.15AM</option>
                        <option value="12.15PM">12.15PM</option>
                        <option value="1.15PM">1.15PM</option>
                        <option value="2.15PM">2.15PM</option>
                        <option value="3.15PM">3.15PM</option>
                        <option value="4.15PM">4.15PM</option>
                        <option value="5.15PM">5.15PM</option>
                        <option value="6.15PM">6.15PM</option>
                    </select>
                </li>
            </ul>

        </div>

        <div class="list-in-a-row" style = "margin-left: 15px;margin-top: 55px;padding-top: 30px;float: left">
            <button name = "submit_btn" id = "submit_btn" type="submit" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>ALLOCATE</b></button>
        </div>


    </form>

    <script>
        $(document).ready(function() {

            $('#submit_btn').click(function(){

                if($('#lesson_id').val() == "" || $('#room_number').val() == "")
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/allocateClass',
                        data : {

                            lesson_id : $('#lesson_id').val(),
                            room_number : $('#room_number').val(),
                            date : $('#date').val(),
                            start_time : $('#start_time').val(),
                            end_time : $('#end_time').val()

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