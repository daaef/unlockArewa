<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GovCloud</title>
	<link rel="stylesheet" href="/css/stylel.css">
    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/dash/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
	

      <div class="login_wrapper">
        <div class="animate form login_form">
		
					
					
          <section class="login_content">
		  
		  
		 			 @if(Session::has('msg'))

					<div class="row">
						<div class="col-md-12"> <small> <h2>{{ Session::get('msg') }} </h2> </small> </div>
					</div>

					@endif
					
            <form action="/user_signin" method="post" enctype="multipart/form-data">
              <h1>Login</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
			  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <button class="btn btn-default submit" type="submit" >Log in</button>
                <a class="reset_pass" href="/forgot/password">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New here?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>
				
				<div class="logmod__alter">
          <div class="logmod__alter-container">
           <a href="login/sa" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
              
            
          </div>
        </div>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="/user_signup" method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
              </div>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Email" required="required" />
              </div>
			   <div>
                <input type="text" name="phonenumber" class="form-control" placeholder="Phonumber" required="required" />
              </div>
              <div>
                <input type="text" name="address" class="form-control" placeholder="Address" required="required" />
              </div>
			   <div>
                <input type="password" name="password" class="form-control" placeholder="Atleast six characters password" required="required" />
              </div>
              <div>
                <input type="password" name="cpassword" class="form-control" placeholder="Repeat password" required="required" />
              </div>
			 
              <div>
			   <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <button class="btn btn-default submit" type="submit" >Submit</button>
              </div>
			  
			  

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>
					
					
					<div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="/login/sagiryu" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
            
          </div>
        </div>
			  
			  
                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
