@extends('admin.admin_dashboard_template')



@section('content_area_main')
<div style="color: white; text-align:center; padding:10px 10px;">
    <h3>ADD ADMINISTRATOR</h3>
</div>

<form>



    <div class="row" style="padding-left: 20px; ">
        <h4 style="padding-left: 25px; background: #2e3436;">Name</h4>
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
                <li><h4 style="padding-right:5px;">*Email    :</h4></li>
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
        <h4 style="padding-left: 25px; background: #761c19;">Office Use</h4>
        <div class="list-in-a-row">
            <ul>
                <li><h4 style="padding-right:5px;">*User ID :</h4></li>
                <li><input class="form-control" type = "text" name="user_id" id="user_id" size="1px"></li>
                <li><h4 style="padding-right:5px;">*Confirm User ID :</h4></li>
                <li><input list = "indexes" class="form-control" type = "text" name="index_confirm" id="user_id_confirm" size="1px"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">*Basic Salary :</h4></li>
                <li><input class="form-control" type = "text" name="basic_salary" id="basic_salary" size="1px"></li>
            </ul>

            <ul>
                <li style="padding-left: 10px%;">
                    <button id= "submit" name = "submit" type="button" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>SUBMIT</b></button>
                </li>
            </ul>

        </div>
    </div>

</form>

<script>

    $(document).ready(function() {

        $('#submit').click(function(){

            if($('#first_name').val() == "" || $('#last_name').val() == "" ||  $('#email').val() == "" ||  $('#phone_emergency').val() == ""
                ||  $('#street_no').val() == "" ||  $('#city').val() == "" ||  $('#state').val() == "" ||  $('#country').val() == ""
                ||  $('#user_id').val() == ""  ||  $('#basic_salary').val() == "")
            {
                alert("Required fields are empty");

            }
            else
            {
                $.ajax({
                    url : 'http://localhost:8000/storeAdmin',
                    data : {

                        user_id : $('#user_id').val(),
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
                        phone_home : $('#phone_home').val(),
                        phone_mobile : $('#phone_mobile').val(),
                        phone_emergency : $('#phone_emergency').val(),
                        basic_salary : $('#basic_salary').val()



                    },
                    type : 'post',
                    success : function(data){
                        alert("Successfully added the admin!")
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
            if($('#user_id').val() == $('#user_id_confirm').val() && $('#user_id').val() != "" && $('#user_id_confirm').val() != "" ){
                $('#submit').prop('disabled', false);
            }else{
                $('#submit').prop('disabled', true);
            }
        });
    });

    $(document).ready(function() {

        $('#user_id').keyup(function(){
            $('#submit').prop('disabled', false);

        });
    });

    $(document).ready(function() {

        $('#user_id_confirm').keyup(function(){
                $('#submit').prop('disabled', false);
        });
    });



</script>



@stop

