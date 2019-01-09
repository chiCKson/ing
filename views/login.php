<?php
require_once('template/header.php');
?>
  <link rel="stylesheet" href="assets/styles/signin.css">
    <title>Login</title>
</head>
<body>

<body class="text-center">
      <div class="container">
          
     
            <form class="form-signin" action="" method="POST">
                   
                   
              <img  src="assets/images/logo.png" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">iNGage</h1>
            
            <!--  <div class="alert alert-danger">
                <strong>Warning!&nbsp;</strong>{{ msg }}
              </div> -->
           
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" reqtemplatered>
              
              
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
              <button class="btn btn-lg btn-secondary btn-block" type="button" onclick="signUp()">Sign Up</button>
            
              <br>
                <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" value="remember-me"> Remember me
                        </label> &nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="">Forgot Password?</a>
                    </div>
         
            </form>
          </div>

<?php
include('template/footer.php');
?>
<script>
    function signUp(){
        location.href = "/signup.php";
    }
</script>

</body>
</html>