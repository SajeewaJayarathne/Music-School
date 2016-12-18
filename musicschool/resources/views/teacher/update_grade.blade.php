@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>STUDENT GRADES</h3>
    </div>

    <form method="post" action="{{route('add_grades_second')}}">
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">Lesson ID :</h4></li>
                <li><input list = "lesson_ids" class="form-control" type="text" name="lesson_id" size="35px" id="lesson_id" style="color:#000000;" /></li>
                <datalist id="lesson_ids">
                    {{--  @foreach($dataRows as $row)
                          <option value=$row -> id >
                      @endforeach --}}
                </datalist>
            </ul>
        </div>

        <div class = "col-md-10" style="margin-left:2.2%; margin-top:2%;">
            <button type="button" class="btn btn-primary1" id="update_grades" style="color:#000000; font-size:110%;"><b>UPDATE GRADES</b></button>
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
                        $('#lesson_ids').cleanData();
                        for(i =0; i < data.length; i++){
                            $('#lesson_ids').append('<option value='+data[i].lesson_id+'>');
                        }
                        console.log(data);
                    }
                })
            });
        });


    </script>

@stop