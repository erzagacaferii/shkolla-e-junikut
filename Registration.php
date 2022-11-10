<?php
include ("server.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="registration.css">
  <title></title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title>Welcome Back</title>
</head>
<body>
    <div class="blockSign">
        <div id="formContent">
            <ul class="tab-group">
                <li class="tab active"><a href="#signin">Sign In</a></li>
                <li class="tab"><a href="#signup">Sign Up</a></li>
            </ul>
            <div class="tab-content">
                <div id="signin">
                    <h1>Welcome </h1>
                    <form method="post" action="Login(Registration).php">
                        <input type="email" required autocomplete="off" placeholder="Email Adress" id="signin"
                            class="fadeIn " name="email">
                        <input type="password" required autocomplete="off" placeholder="Password" id="password"
                            class="fadeIn " name="password">
                        <input type="submit" value="Sign In" name="login"></input>
                        
                    </form>
                </div>
                <div id="signup">
                        <h1>Sign up Now </h1>
                    <form method="POST" action="Registration.php">
                     <?php include('errors.php'); ?>
                        <input type="text" required autocomplete="off" placeholder="Emri" name="emri">
                        <input type="text" required autocomplete="off" placeholder="Mbiemri" name="mbiemri" >
                        <input type="text" required autocomplete="off" placeholder="Mosha" name="mosha" >
                        <input type="email" required autocomplete="off" placeholder="Email " name="email" >
                        <input type="password" required autocomplete="off" placeholder="Password" name="password">
                        <input type="password" required autocomplete="off" placeholder=" Confirm Password" name="confirmpassword">
                        <input type="text" required autocomplete="off" placeholder="Numri i telefonit" name="nrtelefonit" >
                        <input type="submit" value="Sign Up" name="login"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script type="text/javascript">$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  });</script>
  
</body>
</html>

