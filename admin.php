<html>
	<head>
		<title>Login</title>
		
        <link rel="stylesheet" href="style.css" media="all">
        <style type="text/css">html, body {
  text-align: center;
  padding-top: 40px;
  
  -webkit-perspective: 700px;
     -moz-perspective: 700px;
      -ms-perspective: 700px;
          perspective: 700px;
}

/* Reset */
button {
  background: transparent;
  border: 0;
  padding: 0;
  cursor: pointer;
  outline: 0;
  -webkit-appearance: none;
}

/* Custom */
button {
  display: inline-block;
  position: relative;
  padding: 20px 38px;
  top: 0;
  font-size: 30px;
  font-family: "Open Sans", Helvetica;
  border-radius: 4px;
  border-bottom: 1px solid rgba( 28, 227, 125, 0.5 );
  background: rgba( 22, 230, 137, 1 );
  color: #fff;
  box-shadow: 0px 0px 0px rgba( 15, 165, 60, 0.1 );
  
  -webkit-transform: translateZ(0);
     -moz-transform: translateZ(0);
      -ms-transform: translateZ(0);
          transform: translateZ(0);
  
  -webkit-transition: all 0.2s ease;
     -moz-transition: all 0.2s ease;
      -ms-transition: all 0.2s ease;
          transition: all 0.2s ease;
}

button:hover {
  top: -10px;
  box-shadow: 0px 10px 10px rgba( 15, 165, 60, 0.2 );
  
  -webkit-transform: rotateX(20deg);
     -moz-transform: rotateX(20deg);
      -ms-transform: rotateX(20deg);
          transform: rotateX(20deg);
}

button:active {
  top: 0px;
  box-shadow: 0px 0px 0px rgba( 15, 165, 60, 0.0 );
  background: rgba( 20, 224, 133, 1 );
}
</style>
	</head>

    <body>
        <h1>Welcome!</h1>
        <button class="button"><a href="index.php" class="a">Go back to the website</a></button>
        <button class="button"><a href="viewFile(Update&Delete).php" class="a">View students list</a></button>
        <button class="button"><a href="viewFile(Update&Delete)1.php" class="a">View teachers list</a></button>
    </body>
</html>