@extends('student.student_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>VIEW MY ATTENDANCE</h3>
    </div>

    <form>
        <div class="col-md-10" style="margin-left: 2.2%; margin-bottom: 2%; margin-top: 2%; font-size: large;">
            <table border="0" cellspacing="20" cellpadding="30">
                <tr>
                    <th style="padding: 0 30px;">Lesson ID</th>
                    <th style="padding: 0 30px;">Date</th>

                </tr>
                @foreach($attendedStudents as $row)
                    <tr>
                        <td style="padding: 0 30px;">{{$row -> lesson_id}}</td>
                        <td style="padding: 0 30px;">{{$row -> attend_date}}</td>
                   </tr>
                @endforeach

            </table>
        </div>


    </form>

    {{--<script>
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





    </script>--}}

@stop

