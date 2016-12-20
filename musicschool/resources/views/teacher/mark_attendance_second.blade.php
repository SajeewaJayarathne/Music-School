@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>MARK ATTENDANCE</h3>
    </div>

    <form>
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Lesson :</h4></li>
                <li><h4 style="padding-right:5px;">{{$studentList[0]}}</h4></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Date :</h4></li>
                <li><h4 style="padding-right:5px;">{{$studentList[1]}}</h4></li>
            </ul>





        </div>

        <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%; font-size: 16px;">
            <table>
                    @foreach($studentList[2] as $row)
                    <tr>
                        <td>
                            <input type="checkbox" id="checkbox_id" value="{{$row -> student_id}}"/>
                            <label for="checkbox_id">{{$row -> student_id}}</label>
                        </td>

                    </tr>
                    @endforeach

            </table>
        </div>

        <div class="col-md-10" style="margin-left: 2.2%;">
            <button name = "submit_btn" id = "submit_btn" type="button" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>SUBMIT</b></button>

        </div>



    </form>

    <script>

        $(document).ready(function() {

            $('#submit_btn').click(function(){

                var inputs = document.getElementsByTagName("input");
                var checked = [];
                var lesson_id = "{{$studentList[0]}}";
                var attend_date = "{{$studentList[1]}}";
                for ( var i = 0; i < inputs.length; i++ ) {
                    if ( inputs[i].type == "checkbox" && inputs[i].checked ) {
                        checked.push(inputs[i].value);
                    }
                }

                for (var j =0; j < checked.length; j++){
                    $.ajax({
                        url : 'http://localhost:8000/storeStudentAttendance',
                        data : {

                            student_id : checked[j],
                            lesson_id : lesson_id,
                            attend_date : attend_date
                        },
                        type : 'post',
                        success : function(data){
                        },
                        error : function(error){
                            alert("Error!!!");
                        }
                    })
                }
                alert("Successfully marked the attendance!");

            });
        });


    </script>



@stop

