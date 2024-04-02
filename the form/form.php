<html>
<head>
    <title>Zamalek SC</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="form.css">
        <link rel="stylesheet" href="bootstrap.css" >
        <link rel="stylesheet" href="animate.css">
    </head>
    <body>
        
        
        
        
        <?php
      include "myconnection.php";
		   
      if (isset($_POST["insert"])){
        $name=$_POST["name"];
		  $email=$_POST["email"];
		  $pass =$_POST["password"];
		 
        $sql="INSERT INTO login (username,email,phone) VALUES('$name','$email','$pass')";
      if ($conn->query($sql) === true)
        {
           header('location:http://localhost/tasks/the%20project/project.php');
        }
        else
        {
          echo 'error';
        }
      }
      ?>
        
        
       
        
        
        
        
        <div class="the-form">
            
       
            
        
        <div class="form1 wow zoomInUp" data-wow-duration="1s" data-wow-delay=".4s">
            
            <form method="post" action="<?php echo($_SERVER['PHP_SELF'])?>">
                <div class="header">
                <img src="65e5a716771359.562b1028e4991.png" class="a">
                   <div class="div1">
                    <b class="b">Zamalek <span class="sc">SC</span></b>
                   </div>
                    
                </div>
                
                
                <div class="div2">
                <div class="form-group1">
    <label for="exampleInputUsername1" class="wow heartBeat" data-wow-duration="2s" data-wow-delay=".5s"><b>User name</b></label>
    <input type="text" class="form-control wow rubberBand" data-wow-duration="2s" data-wow-delay=".5s" id="exampleInputName1" aria-describedby="emailHelp" placeholder="User_name" name="name" >
  </div>
                
  <div class="form-group2">
    <label for="exampleInputEmail1" class="wow heartBeat" data-wow-duration="3s" data-wow-delay=".5s"><b>Email address</b></label>
    <input type="email" class="form-control wow rubberBand" data-wow-duration="3s" data-wow-delay=".5s" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email" >
  </div>
  <div class="form-group3">
    <label for="exampleInputPassword1" class="wow heartBeat" data-wow-duration="4s" data-wow-delay=".5s"><b>Password</b></label>
    <input type="password" class="form-control wow rubberBand" data-wow-duration="4s" data-wow-delay=".5s" id="exampleInputPassword1" placeholder="Password" name="password" >
  </div>
 
 <a href="file:///D:/the%20web/tasks/the%20project/project.html"><button type="submit" class="btn btn-outline-secondary" name="insert">Confirm</button> </a>  
            
        </div>    
            
            </form>
    
        </div>
        
<!--
         <div class="footer">
       <div class="links">
          <a href="#" class="k">Copy Rights</a><br>
          <a href="#" class="k">Contact Us</a><br>
          <a href="#" class="k">Privacy</a><br>
          <a href="#" class="k">Military Forces</a>
       </div>
        
        <div class="mid-footer">
            <img src="zam.png" class="img6">
            <b class="z">Zamalek <span class="sc">SC</span></b>
        
        
        </div>
        
        <div class="images">
            <a href="https://www.facebook.com/ZSCOfficial/?__xts__%5B0%5D=68.ARAPJZXyvnh1GSR25IbNm3ORHH9brCkHNVNXazk25-P5di1zJIBmN6ARv-VEoNULLSCvWOBnGq0I7PSPZZNqtAS_UoVufDShu8eWGPhWogWOHYDcSgZwCWbufLR0t2giAJ0Q8A9T-Tv-v5YeT0vd5BXPxgtnTk6L4Oox9dlpSHdvA8YlcRil84EZQJ_deJo17awiIcWW_gYKZ6jFVF9wjDx0jVyEuiumbHsEuS1d9O86XwAz8YQQNF2wTQvh7yPmLcwp_T08F4b5xjRcQitP_VyZ7cjPD7mkl7M6KnRRFHJf_rzR8_9s1THl75guHy4ZZZeY" target="_blank"> <img src="IMG-20190826-WA0011.png" class="face"> </a>
             
            <a href="https://twitter.com/ZSCOfficial" target="_blank"> <img src="IMG-20190826-WA0018.png" class="twi">  </a>
            <a href="https://www.instagram.com/zscofficial/" target="_blank"> <img src="IMG-20190826-WA0012.png" class="insta"> </a>
            <a href="#"> <img src="Flurry_Google_Gmail_Alt.png" class="gmail"> </a>
        
        </div>
             
        </div>
-->
    
    </div>
    
    
        <script src="jquery-3.4.1.min.js"></script>
        <script src="form.js"></script>
        <script src="wow.min.js"></script>
        <script>new WOW().init();</script>
        <script src="bootstrap.js"></script>
    </body>

</html>