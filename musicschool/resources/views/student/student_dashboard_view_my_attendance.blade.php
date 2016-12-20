@extends('student.student_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>VIEW MY ATTENDANCE</h3>
    </div>

    <form action="{{route('getStudentAttendanceList_student')}}" method="post">
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Lesson ID :</h4></li>
                <li>
                    <select class="form-control" name="lesson_id" id="lesson_id" style="color:#000000; size:35px;">
                        @foreach($lessons as $lesson)
                        <option >{{$lesson -> lesson_id}}</option>
                        @endforeach

                    </select>
                </li>
            </ul>


            <ul>
                <li style="padding-left: 50px">
                    <button name = "next" id = "next" type="submit" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>NEXT</b></button>
                </li>
            </ul>

        </div>


    </form>

    <script>
        $(document).ready(function() {
            $('#select_2').hide();
            $('#lesson_id').keyup(function(){
                $.ajax({
                    url : 'http://localhost:8000/getLessonID',
                    data : { lesson_id : $('#lesson_id').val()},
                    type : 'get',
                    success : function(data){
                        $('#select_2').show();
                        $('#lesson_IDs').empty();
                        for(i =0; i < data.length; i++){
                            $('#lesson_IDs').append('<option value='+data[i].lesson_id+'>');
                        }
                    }
                })
            });
        });






    </script>

@stop

