<!doctype html>
<html>
<head>
<?php include("NHheader.php")  ?>



</head>
<body style=" background: url(background-1134468_960_720.jpg) fixed; opacity:0.9" >
<div class="preloader">
   <div class="preloder-wrap">
   <div class="preloder-inner">
	<div class="loader"></div>
    </div>
    </div>
    </div>
    <!--/.preloader-->



<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.php"><h1><img class="img-rounded img-responsive" src="Untitled-1.png" alt="logo" style="height:40px; width:150px"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll"><a href="index.php">Home</a></li> 
						 <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Popular locations
                                   <span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                          <li><a href="Bandarban.php">BANDARBAN</a></li>
                                         <li><a href="Jamuna.php">JOMUNA</a></li>
                                         <li><a href="Rangamati.php">RANGAMATI</a></li> 
                                         <li><a href="Jamuna.php">COX's BAZAR</a></li> 
                                          
                                   </ul>
                       </li>
                        
						<li class="scroll "><a href="member.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
						<li class="scroll "><a href="general_log_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
						
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 
    
    
    
    
  

    <div class="row" style="height:auto; width:100%; margin-top:6%; margin-left:0px; margin-bottom: 5%" id="me1"> 
    
        <div class="col-lg-4 col-md-4 col-sm-12" style="height: auto; color:  #0B0B2D; ">
            <div class="row"  style="height:103%; opacity:.9; border:solid 2px #04044B; background:hsla(0,5%,81%,1.00); margin-left:1%">
           <h2 style=" font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; text-align:center">Search for your desired location:</h2>
            <div class="container">
  
              <form>
                     <label for="sel1">Search for:</label>
                       <select class="form-control" id="sel1" style="width:20%">
                               <option>Hotel</option>
                               <option>Bus</option>
   
                        </select>
                     <div class="form-group">
                             <label for="usr">Destination or Place:</label>
                             <input type="text" class="form-control" id="usr" style="width:30%">
                    </div>
                   <div class="form-group">
                     <label for="pwd">Checkin Date:</label>
                     <input type="date" class="form-control" id="in2" style="width:30%">
                     <label for="pwd">Checkout Date:</label>
                     <input type="date" class="form-control" id="in3" style="width:30%">
                   </div>
              
                   
                   
                   
                    <button type="submit" class="btn btn-default">Search</button>
               </form>
</div>
            </div>
            
       
      
         <div class="row" style="height: auto; margin-left:1%">   
      <h1 style="text-align:center; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(0,11%,96%,1.00)">BUS SEAT LAYOUT:</h1>
            
         <img class="img-responsive" src="seating-plan.png">   

            
 </div>
 
 <div class="row" style="margin-top:3%; margin-left:1%">

       
            
            
            
 </div>  
 
 
 
   
            
 </div>


    
      <div class="col-lg-8 col-md-8 col-sm-12 kio" style="height:auto; margin-top:0%; background:hsla(0,10%,79%,1.00)" id="kof">
  
  
  
   <form action="booking_bus.php" method="post">
    
    
    
    <h2 style=" font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">Select starting point:</h2>
    
     <div class="form-group">
     
      <select class="form-control" style="width:40%" name="a1">
        <option>Dhaka</option>
        <option>Bandarban</option>
         <option>Rangamati</option>
          <option>Jamuna</option>
          <option>Cox'x Bazar</option>
       
      </select>
    </div>
    
        <h2 style=" font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">Select destination point:</h2>
    
     <div class="form-group">
     
      <select class="form-control" style="width:40%" name="a2">
        <option>Dhaka</option>
        <option>Bandarban</option>
         <option>Rangamati</option>
          <option>Jamuna</option>
          <option>Cox'x Bazar</option>
       
      </select>
    </div>
    <h2 style=" font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">Enter seat number:</h2>
    
    
    <div class="form-group"  style="width:40%">
      <label for="usr">Seat no:</label>
      <input type="text" class="form-control" id="usr" name="a3">
    </div>
    
      
    
     <h2 style=" font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">Select Checkin/out date</h2>
      
     <div class="form-group">
                     <label for="pwd">Checkin Date:</label>
                     <input type="date" class="form-control" id="in2" style="width:30%" name="cin">
                     <label for="pwd">Checkout Date:</label>
                     <input type="date" class="form-control" id="in3" style="width:30%" name="cout">
                   </div>
                   <h2 style=" font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">Personal Info</h2>
    <div class="form-group"  style="width:40%">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="name">
    </div>
    <div class="form-group"  style="width:40%">
  <label for="comment">Address:</label>
  <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
</div>
 <div class="form-group"  style="width:40%">
      <label for="usr">Email ID:</label>
      <input type="email" class="form-control" id="usr" name="email">
    </div>
    
    
   <div style="width:40%; padding-bottom:8.5%;">
     
      <input type="submit" class=" btn btn-success" name="submit">
    </div> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </form>
        
  
  
  
  
  
  
  
  
  
  
  
  
       
        
</div>   
    
</div> 

<div class="row mcon" style="height:auto; background: hsla(0,11%,88%,1.00); margin-top:2%; margin-left:.5%" id="contm">
 
 
		
								<div class="row">
									
										<div style="text-align:center">
											<h1 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(32,93%,50%,1.00); text-align:center">Contant with us</h1>
											<h3>If you have any question or problem let us know. You are always welcome for any kind of question </h3>
										</div>
									
								
							</div>
							
								
									
									<div class="row ">
										<div class="col-lg-4 col-sm-4 col-md-4 jumbotron" style="margin-left:2%">
											<div style="margin-left:2%">
                                            <address><p style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:24px"><span style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px; color:hsla(35,98%,49%,1.00)">MILI</span>TRAVELS</p>
                                            <strong>Let's Tavel.<br>Mirpur cantonment , Mirpur 12<br> 
                                            Dhaka-1200, Bangladesh</strong><br>
                                            <h4 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(237,84%,39%,1.00)">MILITARY INSTITUTE OF SCIENCE AND TECHNOLOGY</h4>
                                            </address>
                                            </div>
										</div>
										<div class="col-lg-7 col-sm-7 col-md-7" style="margin-left:2%"> 
										
												
												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required class="form-control" rows="8" placeholder="Message"></textarea>
														</div> 
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Send</button>
														</div>
													</form> 
												
											</div>
								
								</div> 
							<!--/#contact-->
 

 


<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>