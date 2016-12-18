@extends('admin.admin_dashboard_template')



@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ADD STUDENT</h3>
    </div>

    <form>
        <div class="row" style="padding-left: 20px; ">
        <h4 style="padding-left: 25px; background: #2e3436;">Basic</h4>
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">*First Name :</h4></li>
                <li><input class="form-control" type = "text" name="first_name" id="first_name" size="1px"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Middle Initials :</h4></li>
                <li><input class="form-control" type = "text" name="middle_initials" id="middle_initials" size="1px"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">*Last Name :</h4></li>
                <li><input class="form-control" type = "text" name="last_name" id="last_name" size="1px"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">Gendar :</h4></li>
                <li><select class="form-control" type = "text" name="gendar" id="gendar" size="1px">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></li>
            </ul>
        </div>
        </div>

        <div class="row" style="padding-left: 20px;">
            <h4 style="padding-left: 25px; background: #2e3436;">Address</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">*Street No :</h4></li>
                    <li><input class="form-control" type = "text" name="street_no" id="street_no" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Street Name :</h4></li>
                    <li><input class="form-control" type = "text" name="street_name" id="street_name" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">*City :</h4></li>
                    <li><input class="form-control" type = "text" name="city" id="city" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">*State :</h4></li>
                    <li><input class="form-control" type = "text" name="state" id="state" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">*Country :</h4></li>
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
                    <li><h4 style="padding-right:5px;">*Phone(Emergency) :</h4></li>
                    <li><input class="form-control" type = "text" name="phone_emergency" id="phone_emergency" size="1px"></li>
                </ul>
            </div>
        </div>

        <div class="row" style="padding-left: 20px; ">
            <h4 style="padding-left: 25px; background: #2e3436;">Parent</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">*First Name :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_first_name" id="parent_first_name" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Middle Initials :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_middle_initials" id="parent_middle_initials" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">*Last Name :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_last_name" id="parent_last_name" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Email :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_email" id="parent_email" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">NIC :</h4></li>
                    <li><input class="form-control" type = "text" name="nic" id="nic" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Gendar :</h4></li>
                    <li><select class="form-control" type = "text" name="parent_gendar" id="parent_gendar" size="1px">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Relationship :</h4></li>
                    <li><input class="form-control" type = "text" name="parent_relationship" id="parent_relationship" size="1px"></li>
                </ul>
            </div>
        </div>

        <div class="row" style="padding-left: 20px; ">
            <h4 style="padding-left: 25px; background: #2e3436;">Siblings</h4>
            <div class="list-in-a-row">
                <ul id = "siblings">
                    <li><h4 style="padding-right:5px;">Index No :</h4></li>
                    <li><input list = "indexes" class="form-control" type = "text" name="sibling_index" id="sibling_index" size="1px"></li>
                    <datalist id="indexes">

                    </datalist>
                    <li style="padding-left: 10px; padding-right: 10px">
                        <button type="button" class="btn" id ="btn_sibling" style="color:#000000; font-size:110%;  "><b>ADD</b></button>
                    </li>
                    <li > <input disabled="true" class="form-control" type = "text" name="sibling_list" id="sibling_list" size="98px"></li>

                </ul>

            </div>
        </div>

        <div class="row" style="padding-left: 20px; ">
            <h4 style="padding-left: 25px; background: #761c19;">Office Use</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">Index No :</h4></li>
                    <li><input list = "indexes" class="form-control" type = "text" name="index" id="index" size="1px"></li>
                    <li><h4 style="padding-right:5px;">Confirm Index No :</h4></li>
                    <li><input list = "indexes" class="form-control" type = "text" name="index_confirm" id="index_confirm" size="1px"></li>

                </ul>

                <ul>
                    <li style="padding-left: 5px">
                    <button type="button" class="btn-lg btn-success" id ="submit" style="color:#000000; font-size:110%; "><b>SUBMIT</b></button>
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
            $('#sibling_index').keyup(function(){
                $.ajax({
                    url : 'http://localhost:8000/getStudentID',
                    data : { index : $('#sibling_index').val()},
                    type : 'get',
                    success : function(data){
                        $('#select_2').show();
                        $('#indexes').empty();
                        for(i =0; i < data.length; i++){
                            $('#indexes').append('<option value='+data[i].id+'>');
                        }

                    }
                })
            });
        });

        $(document).ready(function() {

            $('#submit').click(function(){

                if($('#first_name').val() == "" || $('#last_name').val() == "" || $('#street_no').val() == "" || $('#city').val() == "" ||
                    $('#state').val() == "" || $('#country').val() == "" || $('#parent_first_name').val() == "" ||
                    $('#parent_last_name').val() == "" || $('#phone_emergency').val() == "")
                {
                    alert("Required fields are empty");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/storeStudent',
                        data : {

                            index : $('#index').val(),
                            first_name : $('#first_name').val(),
                            middle_initials : $('#middle_initials').val(),
                            last_name : $('#last_name').val(),
                            gendar : $('#gendar').val(),

                            street_no : $('#street_no').val(),
                            street_name : $('#street_name').val(),
                            city : $('#city').val(),
                            state : $('#state').val(),
                            country : $('#country').val(),

                            email : $('#email').val(),
                            phne_home : $('#phone_home').val(),
                            phone_mobile : $('#phone_mobile').val(),
                            phone_emergency : $('#phone_emergency').val(),

                            nic : $('#nic').val(),
                            parent_first_name : $('#parent_first_name').val(),
                            parent_last_name : $('#parent_last_name').val(),
                            parent_email : $('#parent_email').val(),
                            parent_middle_initials : $('#parent_middle_initials').val(),
                            parent_relationship : $('#parent_relationship').val(),

                            sibling_list : $('#sibling_list').val(),
                            parent_gendar : $('#parent_gendar').val()


                        },
                        type : 'post',
                        success : function(data){
                                console.log(data);
                        },
                        error : function(error){
                            alert(error.statusText);
                            console.log(error);
                        }
                    })
                }

            });
        });


        $(document).ready(function() {

            $('#submit').click(function(){
                if($('#index').val() == $('#index_confirm').val() && $('#index').val() != "" && $('#index_confirm').val() != "" ){
                    $('#submit').prop('disabled', false);
                }else{
                    $('#submit').prop('disabled', true);
                }
            });
        });

        $(document).ready(function() {

            $('#index').keyup(function(){
                if($('#index').val() == $('#index_confirm').val() && $('#index').val() != "" && $('#index_confirm').val() != "" ){
                    $('#submit').prop('disabled', false);
                }else{
                    $('#submit').prop('disabled', true);
                }
            });
        });

        $(document).ready(function() {

            $('#index_confirm').keyup(function(){
                if($('#index').val() == $('#index_confirm').val() && $('#index').val() != "" && $('#index_confirm').val() != "" ){
                    $('#submit').prop('disabled', false);
                }else{
                    $('#submit').prop('disabled', true);
                }
            });
        });
        $(document).ready(function() {
            $('#btn_sibling').click(function(){
                $('#sibling_list').val($('#sibling_list').val() +","+ $('#sibling_index').val());
                $('#sibling_index').val("");

            });
        });
    </script>

@stop

