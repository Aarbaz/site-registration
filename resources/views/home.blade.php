@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Site Registration</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
      </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src="jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>



    <title>Site Registration</title>
</head>
<body><form onsubmit="return confirm('Do you really want to submit the form?');" method="post" action="home" enctype="multipart/form-data">
    @csrf
                <div class="container">
                    <br>
                    @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-danger col-sm-6 offset-sm-3" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <br>
        <div class="row">
                <div class="input-group input-group col-sm-6">
                    <span class="input-group-text">Site (Clinic / Hospital) Name</span>
                    <input type="text" name="site_name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('site_name')}}">
                </div>

                <div class="input-group input-group col-sm-6">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Street Address</span>
                    <input type="text" name="street_add" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('street_add')}}">
                </div>
        </div><br>
        


        <div class="row">
                <div class="input-group input-group col-sm-6">
                    <span class="input-group-text">Telephone</span>
                    <input type="tel" name="telephone" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('telephone')}}" >
                </div>

                <div class="input-group input-group col-sm-6">
                    <span class="input-group-text" id="inputGroup-sizing-sm">City</span>
            
                <input type="text" name="city" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('city')}}">
                </div>
        </div>
          <br>

        <div class="row">
                <div class="input-group input-group col-sm-6">
                    <span class="input-group-text">Office Email Address</span>
            
            <input type="email" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"></div> 
            <div class="input-group input-group col-sm-6" value="{{old('email')}}">
            
            <span class="input-group-text">State</span>
            <input type="text" name="state"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('state')}}"></div>   
        </div><br>


        <div class="row">
                <div class="input-group input-group col-sm-6">
                 <span class="input-group-text">Web Site</span>
            
                <input type="text" name="website" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('website')}}"></div>

                <div class="input-group input-group col-sm-6">
                <span class="input-group-text">Pin Code</span>
            
            <input type="zip" name="pin" id="pin" pattern="[0-9]+" maxlength="6" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeypress="return blockSpecialChar(event)" value="{{old('pin')}}"></div>

        </div><br>
            

            <div class="row">
                <div class="input-group input-group col-sm-6">
            
            <span class="input-group-text">Ethics Committee Available?</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="form-control" name="yesno" id="yesno">
                <option value="">Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
                </div>

            </div><br>
        
    </div>
   <hr>
<!----------- Ethics Commettee Information------->
 <div class="card-body" id="ghfdss">
    <span><b>Ethics Committee Information:</b></span>
    <div class="container"><br>
    <div class="row">
            <div class="input-group input-group col-sm-6">
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" name="name"aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('name')}}"></div>

        <div class="input-group input-group col-sm-6">
            <span class="input-group-text" id="">Street Address</span>
            <input type="text" class="form-control" name="s_add" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
        </div>
    </div>    <br>

        <div class="row">
            <div class="input-group input-group col-sm-6">
             <span class="input-group-text">Telephone</span>
            <input type="tel" name="tel" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('tel')}}"></div>

            <div class="input-group input-group col-sm-6">
            <span class="input-group-text" id="">City</span>
            <input type="text" class="form-control" name="e_city" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('e_city')}}">
                </div>

        </div>
        <br>


        <div class="row">
                <div class="input-group input-group col-sm-6">
            
            <span class="input-group-text">Email Address</span>
            
            <input type="email" name="o_email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('o_email')}}">
               </div> 

                <div class="input-group input-group col-sm-6">
            
            <span class="input-group-text">State</span>
            
            <input type="text" class="form-control" name="e_state" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('e_state')}}">
                </div>   
        </div><br>


        <div class="row">
                    <div class="input-group input-group col-sm-6">
                         <span class="input-group-text">Web Site</span>
            
                        <input type="text" name="e_website" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('e_website')}}"></div>

                    <div class="input-group input-group col-sm-6">
                        <span class="input-group-text">Pin Code</span>
                    <input type="zip" name="e_pin" id="zip" pattern="[0-9]+" maxlength="6" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  onkeypress="return blockSpecialChar(event)" value="{{old('e_pin')}}"></div>

        </div><br>

        <div class="row">
                <div class="input-group input-group col-sm-6">
            
                    <span class="">Ethics Committee registered with
                            CDSCO?</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="qstn" id="" value="">
                            Yes
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="qstn" id="" value="">
                No
                </label>
    </div>

                

        

            

            <div class="input-group input-group col-sm-6">
            
                <span class="input-group-text">If Yes, EC registration no:</span>
            
                <input type="text" name="reg_no" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('reg_no')}}"></div>
                
            </div>
            <br>

    <div class="row">
        <div class="input-group input-group col-sm-10" >
                <span>Upload the registration certification. (PDF document only)</span>
                <input type="file" name="upload_file" accept="application/pdf" /></div>
                
    </div>

            
        </div>
    
        
<hr>
</div>

        <div class="row">
            <div class="col-sm-12">
            <div class="form-check">
                <label class="form-check-label">
            <input type="checkbox" class="form-check-input" required='required'>
            Declaration: I hereby declare that all above-mentioned information is in accordance with fact or truth
            up to my knowledge and I bear the responsibilities for the correctness of the above-mentioned particulars.
                    </label>
            </div>
            </div>
        </div><br>

 
        <div class="row">
                <div class="col-sm-5 offset-sm-1">
            
                <label>Name</label>
                <input type="text" name="nop" class="form-control" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required="required">
                <small class="form-text text-muted">Name of the Person Submitting this Form (print)</small>
  
               </div> 

                <div class="col-sm-5">
        <label>Designation</label>
                <input type="text" name="desig" class="form-control" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required="required">
    
        </div>   
        </div>           
<br>

        
<center><button type="submit" class="btn btn-success btn-lg">submit</button></center>






    
</form>
</body>

</html>
 <script type="text/javascript">
     $(document).ready(function() {
        $('#ghfdss').hide();
     
     $('#yesno').on('change',function(){
        var values = $('#yesno').val();
       
        if(values == "yes"){
         $('#ghfdss').show();   
        }else if(values == "no"){
          $('#ghfdss').hide();
        }else{
           $('#ghfdss').hide();
        }
     });
    }); 
 </script>  
             

 <script type="text/javascript">
    $(function() {
    $("#pin").on('keypress', function(e) {
        if (e.which == 32 )
            return false;
    });
});


    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }

       
    </script>

    <script type="text/javascript">
    $(function() {
    $("#zip").on('keypress', function(e) {
        if (e.which == 32 )
            return false;
    });
});


    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }

       
    </script>
@endsection


