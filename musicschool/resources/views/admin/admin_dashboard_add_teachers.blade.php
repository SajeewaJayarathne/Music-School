@extends('admin.admin_dashboard_template')



@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ADD TEACHER</h3>
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
                    <li><h4 style="padding-right:5px;">*Gender :</h4></li>
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
            <h4 style="padding-left: 25px; background: #761c19;">Office Use</h4>
            <div class="list-in-a-row">
                <ul>
                    <li><h4 style="padding-right:5px;">*Index No :</h4></li>
                    <li><input list = "indexes" class="form-control" type = "text" name="index" id="index" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">*Confirm Index No :</h4></li>
                    <li><input list = "indexes" class="form-control" type = "text" name="index_confirm" id="index_confirm" size="1px"></li>
                </ul>

                <ul>
                    <li><h4 style="padding-right:5px;">Basic Salary :</h4></li>
                    <li><input class="form-control" type = "text" name="basic_salary" id="basic_salary" size="1px"></li>
                </ul>

                <ul>
                    <li style="padding-left: 50px">
                        <button id = "submit" type="button" class="btn-lg btn-success" style="color:#000000; font-size:110%; "><b>SUBMIT</b></button>
                    </li>
                </ul>

            </div>
        </div>




    </form>


    <script>
        function validateEmail(sEmail) {
            var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            if (filter.test(sEmail)) {
                return true;
            }
            else {
                return false;
            }
        }
        function clearData() {
            $('#index').val("");
            $('#index_confirm').val("");
            $('#basic_salary').val("");
            $('#phone_emergency').val("");
            $('#phone_mobile').val("");
            $('#phone_home').val("");
            $('#email').val("");
            $('#first_name').val("");
            $('#middle_initials').val("");
            $('#last_name').val("");
            $('#street_no').val("");
            $('#street_name').val("");
            $('#city').val("");
            $('#state').val("");
            $('#country').val("");



        }
        $(document).ready(function() {
            $('#select_2').hide();
            $('#index').keyup(function(){
                $.ajax({
                    url : 'http://localhost:8000/getTeacherID',
                    data : { id : $('#index').val()},
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

        $(document).ready(function () {
            $('#submit').hover(function () {
                $.ajax({
                    url : 'http://localhost:8000/getTeacherID',
                    data : { id : $('#index').val()},
                    type : 'get',
                    success:function (data) {
                        if(data[0].id==null){
                            $('#submit').disable();
                        }else{
                            $('#submit').enable();
                        }
                    },
                    error:function (data) {
                        $('#submit').disable();
                    }
                })
            })
        })
        $(document).ready(function() {

            $('#submit').click(function(){
                var sEmail=$('#email').val();
                if($('#first_name').val() == "" || $('#last_name').val() == "" || $('#street_no').val() == "" || $('#city').val() == "" ||
                    $('#state').val() == "" || $('#country').val() == "" || $('#phone_emergency').val() == "" || $('#gendar').val()=="")
                {
                    alert("Required fields are empty");

                }
                else
                {
                    if(validateEmail(sEmail)) {
                        $.ajax({
                            url: 'http://localhost:8000/storeTeacher',
                            data: {

                                id: $('#index').val().toString(),
                                first_name: $('#first_name').val(),
                                middle_initials: $('#middle_initials').val(),
                                last_name: $('#last_name').val(),
                                gendar: $('#gendar').val(),

                                street_no: $('#street_no').val(),
                                street_name: $('#street_name').val(),
                                city: $('#city').val(),
                                state: $('#state').val(),
                                country: $('#country').val(),

                                email: $('#email').val(),
                                phone_home: $('#phone_home').val(),
                                phone_mobile: $('#phone_mobile').val(),
                                phone_emergency: $('#phone_emergency').val(),

                                basic_salary: $('#basic_salary').val(),


                            },
                            type: 'post',
                            success: function (data) {
                                alert("Successfully added the teacher!");
                                console.log(data);
                                clearData();

                            },
                            error: function (error) {
                                alert(error.statusText);
                                console.log(error);
                            }
                        })
                    }else {
                        alert('WRONG EMAIL')
                    }
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

        $(document).ready(function () {

            $('#phone_emergency')

                .keydown(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    $phone = $(this);
                    // Allow numeric (and tab, backspace, delete) keys only
                    return (key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    key == 37 ||
                    key == 39 ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
                })
                .keyup(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    $phone = $(this);


                })

                .bind('focus click', function () {
                    $phone = $(this);


                    var val = $phone.val();
                    $phone.val('').val(val); // Ensure cursor remains at the end
                })

                .blur(function () {
                    $phone = $(this);

                });

        });
        $(document).ready(function () {
            $('#phone_mobile')
                .keydown(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    $phone = $(this);

                    // Allow numeric (and tab, backspace, delete) keys only
                    return (key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
                })

                .bind('focus click', function () {
                    $phone = $(this);


                    var val = $phone.val();
                    $phone.val('').val(val); // Ensure cursor remains at the end
                })

                .blur(function () {
                    $phone = $(this);

                    if ($phone.val() === '(') {
                        $phone.val('');
                    }
                });

        });

        $(document).ready(function () {
            $('#phone_home')
                .keydown(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    $phone = $(this);

                    // Allow numeric (and tab, backspace, delete) keys only
                    return (key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
                })

                .bind('focus click', function () {
                    $phone = $(this);


                    var val = $phone.val();
                    $phone.val('').val(val); // Ensure cursor remains at the end
                })

                .blur(function () {
                    $phone = $(this);

                    if ($phone.val() === '(') {
                        $phone.val('');
                    }
                });

        });


        $(document).ready(function () {
            $('#basic_salary')
                .keydown(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    $phone = $(this);

                    // Allow numeric (and tab, backspace, delete) keys only
                    return (key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    key == 110 ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
                })

                .bind('focus click', function () {
                    $phone = $(this);


                    var val = $phone.val();
                    $phone.val('').val(val); // Ensure cursor remains at the end
                })

                .blur(function () {
                    $phone = $(this);

                    if ($phone.val() === '(') {
                        $phone.val('');
                    }
                });

        });





    </script>



@stop


