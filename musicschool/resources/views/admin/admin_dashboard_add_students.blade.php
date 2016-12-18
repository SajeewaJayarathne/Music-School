@extends('admin.admin_dashboard_template')



@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ADD STUDENT</h3>
    </div>

    <form>



        <div class="row" style="padding-left: 20px; ">
        <h4 style="padding-left: 25px; background: #2e3436;">Name</h4>
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">First Name :</h4></li>
                <li><input class="form-control" type = "text" name="first_name" id="first_name" size="1px"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Middle Initials :</h4></li>
                <li><input class="form-control" type = "text" name="middle_initials" id="middle_initials" size="1px"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Last Name :</h4></li>
                <li><input class="form-control" type = "text" name="last_name" id="last_name" size="1px"></li>
            </ul>
        </div>
        </div>

        <div class="row" style="padding-left: 20px;">
            <h4 style="padding-left: 25px; background: #2e3436;">Address</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">Street No :</h4></li>
                    <li><input class="form-control" type = "text" name="street_no" id="street_no" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Street Name :</h4></li>
                    <li><input class="form-control" type = "text" name="street_name" id="street_name" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">City :</h4></li>
                    <li><input class="form-control" type = "text" name="city" id="city" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">State :</h4></li>
                    <li><input class="form-control" type = "text" name="state" id="state" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Country :</h4></li>
                    <li><input class="form-control" type = "text" name="country" id="country" size="1px"></li>
                </ul>
            </div>
        </div>

        <div class="row" style="padding-left: 20px;">
            <h4 style="padding-left: 25px; background: #2e3436;">Contact</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">Email    :</h4></li>
                    <li><input class="form-control" type = "text" name="email" id="email" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Phone(Home) :</h4></li>
                    <li><input class="form-control" type = "text" name="phone_home" id="phone_home" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Phone(Mobile) :</h4></li>
                    <li><input class="form-control" type = "text" name="phone_mobile" id="phone_mobile" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Phone(Emergency) :</h4></li>
                    <li><input class="form-control" type = "text" name="phone_emergency" id="phone_emergency" size="1px"></li>
                </ul>
            </div>
        </div>

        <div class="row" style="padding-left: 20px; ">
            <h4 style="padding-left: 25px; background: #2e3436;">Parent</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">First Name :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_first_name" id="parent_first_name" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Middle Initials :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_middle_initials" id="parent_middle_initials" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Last Name :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_last_name" id="parent_last_name" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Email :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_email" id="parent_email" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Relationship :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_last_name" id="parent_last_name" size="1px"></li>
                </ul>
            </div>
        </div>

        <div class="row" style="padding-left: 20px; ">
            <h4 style="padding-left: 25px; background: #761c19;">Office Use</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">Index No :</h4></li>
                    <li><input list = "indexes" class="form-control" type = "text" name="parent_first_name" id="index" size="1px"></li>
                    <datalist id="indexes">
                      {{--  @foreach($dataRows as $row)
                            <option value=$row -> id >
                        @endforeach --}}
                    </datalist>
                </ul>

                <ul>
                    <li style="padding-left: 750%">
                    <button type="submit-attendance" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>SUBMIT</b></button>
                    </li>
                </ul>

            </div>
        </div>


        <div class="row" style="padding-left: 20px; ">
            <h4 style="padding-left: 25px; background: #761c19;"></h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;"></h4></li>
                </ul>


            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $('#select_2').hide();
            $('#index').keyup(function(){
                $.ajax({
                    url : 'http://localhost:8000/',
                    data : { index : $('#index').val()},
                    type : 'get',
                    success : function(data){
                        $('#select_2').show();
                        $('#indexes').cleanData();
                        for(i =0; i < data.length; i++){
                            $('#indexes').append('<option value='+data[i].id+'>');
                        }
                        console.log(data);
                    }
                })
            });
        });
    </script>

@stop

