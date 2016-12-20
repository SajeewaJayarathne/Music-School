@extends('admin.admin_dashboard_template')



@section('content_area_main')
    <div style="color: white; text-align:center; padding:10px 10px;">
        <h3>ADD INSTRUMENT</h3>
    </div>

    <form>
        <div class="col-md-6">
            <ul >
                <li><h4 style="padding-right:5px;">*Instrument ID :</h4></li>
                <li><input class="form-control" type="text" name="instrument_id" id="instrument_id" size="35px" style="color:#000000;"></li>
            </ul>

            <ul>
                <li><h4 style="padding-right:5px;">*Instrument Name :</h4></li>
                <li><input class="form-control" type="text" name="instrument_name" id="instrument_name" size="35px" style="color:#000000;"> </li>
            </ul>


            <ul>
                <li><h4 style="padding-right:5px;">*Instrument Category :</h4></li>
                <li>
                    <select class="form-control" name="category" id="category" style="color:#000000; size:35px;">
                        <option value="String">String Instrument</option>
                        <option value="Bass">Bass Instrument</option>
                        <option value="Keyboard">Keyboard Instrument</option>
                        <option value="Woodwind">Woodwind Instrument</option>
                        <option value="Percussion">Percussion Instrument</option>
                    </select>
                </li>
            </ul>


        </div>

        <div class = "col-md-10" style="margin-left:3.8%; margin-top:2%;">
            <button type="submit" class="btn btn-success" name="submit" id="submit" style="color:#000000; font-size:110%;"><b>SUBMIT</b></button>
        </div>
    </form>

    <script>
        $(document).ready(function() {

            $('#submit').click(function(){

                if($('#instrument_id').val() == "" || $('#category').val() == "", $('#instrument_name').val() == "" )
                {
                    alert("Error: Required fields are empty!");

                }
                else
                {
                    $.ajax({
                        url : 'http://localhost:8000/storeInstrument',
                        data : {

                            instrument_id : $('#instrument_id').val().toString(),
                            instrument_name : $('#instrument_name').val().toString(),
                            category : $('#category').val().toString()

                        },

                        type : 'post',
                        success : function(){
                            alert("Success: Successfully added the instrument");
                        },
                        error : function(error){
                            alert(error.statusText);
                        }

                    })


                }

            });
        });

    </script>

@stop

