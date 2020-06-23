<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Aggregator - Sign up</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link type='text/css' href="css/jquery-ui.min.css" rel="stylesheet">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link href="style.css" rel="stylesheet" />
        <style>
          #frmCheckPassword {background:#FAF8F8; padding:10px;}
          .demoInputBox{padding:7px; border-radius:4px;}
          #password-strength-status {padding: 5px 10px; background-color: #FFFFFF; font-size: 11px;}
          .medium-password{color: #cc6600;}
          .weak-password{color: #ff0000;}
          .strong-password{color: #12CC1A;}
        </style>
    </head>
    <body>
        <div id="banner">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        
                    </div>
                    <div class="col-md-4">

                      <a class="navbar-brand" style="color: #083e9e; font-size: 24px; margin: 1% 1%;" href="/"><b><i class="fa fa-database"></i> <em>A</em>ggregator</b></a>

                        <div class="card" id="signup_card" style="padding-top: 6%;">
                            <span id="display" class="text-danger text-center" style="display: none;"></span>
                            <div class="card-body">
                                <form method="POST" action="/signup" id="signupForm">
                                  {{ csrf_field() }}
                                  <div class="form-group">
                                    <input type="text" placeholder="Full Name" name="fullname" class="form-control" id="fullName">
                                  </div>
                                  <div class="form-group">
                                    <input type="email" id="email" name="email" onkeyup="showit()" placeholder="Email Address" class="form-control">
                                    <span class="text-danger" id="showit" style="font-size: 12px; display: none;">Type a valid email.</span>
                                  </div>
                                  <div class="form-group">
                                    <input type="password" id="password" name="password" onKeyUp="checkPasswordStrength();" placeholder="Choose password" class="form-control">
                                    <div id="password-strength-status"></div>
                                  </div>
                                  <div class="form-group form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox"> <span style="font-size: 12px;">By click this, I agree to the <a href="#">Terms and Conditions</a></span>
                                    </label>
                                  </div>
                                  <center>
                                    <button id="signupBtn" type="submit" class="btn btn-info" style="background: #30c57b; border-color: #30c57b; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign up</button>
                                    &nbsp;<img id="loading" src="/img/spinner.gif" class="img-fluid" style="width: 10%; margin-top: -2.5%; display: none;">
                                  </center>
                                </form>
                                <br>
                                <center><a href="/signin" class="btn btn-default text-success" style="color: #30c57b; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign in</a></center>
                            </div>
                            <div class="card-footer">
                                <p class="text-dark text-center" style="font-size: 12px;">or sign up with</p>
                                <center>
                                    <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-twitter"></i> Twitter</button>&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-outline-secondary btn-sm"><i class="fa fa-google"></i> Google</button>&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-facebook"></i> Facebook</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    let signupForm = $('#signupForm');

    signupForm.submit(function(e){
      e.preventDefault();

      let fullName = $('#fullName');
      let email = $('#email');
      let password = $('#password');

      if(fullName.val() == "" || email.val() == "" || password.val() == ""){
        $("#display").html("All fields required").show("slide");
        signupForm.effect("shake", "slow");
      }else{
        $("#display").hide();
        $("#loading").show().delay("1000");

        $.ajax({
            type: "POST",
            url: "/signup",
            data: signupForm.serialize(),
            async: true,
            dataType: 'json',
            success: function(response){
                $("#loading").hide();
                if(response.status == "success"){
                    $("#display").attr("class", "text-success text-center")
                    $("#display").html(response.message).show();

                    $.ajax({
                      type: "POST",
                      url: "/signin",
                      data: signupForm.serialize(),
                      async: true,
                      dataType: 'json',
                      success: function(response){
                          $("#loading").hide();
                          if(response.status == "success"){
                              window.location.assign('/dashboard');
                          } else if(response.status == "error"){
                              $("#display").html(response.message).show();
                          }else{
                              $('#display').html(response.errors[0]).show();
                          }
                      }
                  });

                } else if(response.status == "error"){
                    $("#display").attr("class", "text-danger text-center")
                    $("#display").html(response.message).show();
                }else{
                  $("#display").attr("class", "text-danger text-center")
                    $('#display').html(response.errors[0]).show();
                }
            }
        });
      }
    });
  });

  function showit(){
    let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    let email = $("#email").val();
    let password = $("#password").val();

    if(!emailReg.test(email)){
      $("#loudit").hide(); $("#showit").show("slideUp");
    }else{
      $("#loudit").hide(); $("#showit").hide();
    }
  }

  function checkPasswordStrength() {
    let number = /([0-9])/;
    let alphabets = /([a-zA-Z])/;
    let special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
	
    if($('#password').val().length<6) {
      $('#password-strength-status').removeClass();
      $('#password-strength-status').addClass('weak-password');
      $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
    } else {  	
        if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {            
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('strong-password');
            $('#password-strength-status').html("Strong");
              } else {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('medium-password');
            $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
        } 
    }
  }

  $("#signupBtn").prop("disabled", true);
  $('input:checkbox').click(function() {
    if ($(this).is(':checked')) {
      $('#signupBtn').prop("disabled", false);
    } else {
      if ($('.checks').filter(':checked').length < 1){
        $('#signupBtn').attr('disabled',true);}
      }
  });
</script>