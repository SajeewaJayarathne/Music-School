@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>MARK ATTENDANCE</h3>
    </div>

    <form>
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Lesson :</h4></li>
                <li><h4 style="padding-right:5px;">{{$studentList[0]}} </h4></li>
            </ul>

            <ul id = "test_ul">
                <li><h4 style="padding-right:5px;">Date :</h4></li>
                <li><h4 style="padding-right:5px;">{{$studentList[1]}} </h4></li>
            </ul>





        </div>

        <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%;">
            <table>
                    @foreach($studentList[2] as $row)
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$row -> student_id}}</td>

                    </tr>
                    @endforeach

            </table>
        </div>

        <div class="col-md-10" style="margin-left: 2.2%;">
            <button onclick="checkBoxCheck()" name = "submit_btn" id = "submit_btn" type="button" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>SUBMIT</b></button>

        </div>



    </form>

    <script>

        $('#submit_btn').click(function checkBoxCheck() {
            console.log("a");

            checkBoxes = document.getElementsByTagName("input");
            var attendedStudents = new Array();
            for(var i=0;i<checkBoxes.length;i++){
                var checkBox = checkBoxes[i];
                if(this.checked){
                    var currentRow = this.parentNode.parentNode;
                    var secondColumn = currentRow.getElementsByTagName("td")[1];
                    alert(secondColumn.textContent);
                    attendedStudents.push(secondColumn.textContent);
                }
            }

        });


    </script>



@stop

