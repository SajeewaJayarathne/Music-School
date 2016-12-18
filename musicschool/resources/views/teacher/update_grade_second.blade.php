@extends('teacher.teacher_dashboard_template')

@section('content_area_main')

    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>STUDENT GRADES</h3>
    </div>

    <form>
        <div class="col-md-10">
            @foreach($studentArray as $row)
                {{--*/
                $student_id = $row->student_id
                $first_name = $row->first_name
                $middle_initials = $row->middle_initials
                $last_name = $row->last_name
                /*--}}
                <div class="list-in-a-row" style="padding-right: 5px;">
                    <ul>
                        <li><span>$student_id</span></li>
                        <li><span>$first_name+" "+$middle_initials+" "+$last_name</span></li>
                        <li>
                            <select class="form-control" name="grade-{{$student_id}}" style="color:#000000; size:15px;">
                                @foreach($grade as $lessonTypeItem)
                                    <option value="A+">A+</option>
                                    <option value="A">A</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B">B</option>
                                    <option value="B-">B-</option>
                                    <option value="C+">C+</option>
                                    <option value="C">C</option>
                                    <option value="C-">C-</option>
                                    <option value="D">D</option>
                                    <option value="I-we">I-we</option>
                                    <option value="I-ca">I-ca</option>
                                    <option value="F">F</option>
                                @endforeach
                            </select>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="col-md-10" style="margin-left:2.2%; margin-top:2%;">
            <button type="button" class="btn btn-primary1" name="submit" id="submit" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>
    </form>

@stop