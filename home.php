
<!DOCTYPE html>

<html lang="en">
    
  <head>
      
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge"> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <style>
      
          .jumbotron {
              
              background-image: url(https://images.unsplash.com/photo-1485627941502-d2e6429a8af0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);
              text-align: center;
              margin-top: 50px;
          }
          
          #email {
              
              width: 300px;
              
          }
          
          #appSummary {
              
              text-align: center;
              margin-top:50px;
              margin-bottom: 50px;
              
          }
          
          .card-img-top {
              
              width: 100%;
              
          }
		   #appStoreIcon {
              
              width: 200px;
              
          }
          
             
          
          #footer {
              
              background-color: aqua;
              padding-top: 70px;
              margin-top: 40px;
              padding-bottom: 90px;
			   margin-bottom: 40px;
			
			  
          }
          
          body {
              
              position: relative;
			  font-family:sans-serif;
              

			  }
		#left,#right{
			font-weight:bold;
			font-size:30px;
		}
		.pp{
			float:left;
			margin-left:100px;
	}
	.ss
	{
	margin-top:15px;
	margin-left:20px;
	}
	.dd{
	margin-top:25px;
	margin-left:20px;
	margin-bottom:5px;
	font-weight:;
	font-size:27px;
	}
	.lead{
	font-size:30px;
   font-family: 'Mina', sans-serif;
   font-family: 'Indie Flower', cursive;

	}

	      </style>
      
  </head>
    
  <body data-spy="scroll" data-target="#navbar" data-offset="150">
      
        <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">
          <a class="navbar-brand" href="#">HOSTEL</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact Us</a>
            </li>
          </ul>
        <!-- <form class="form-inline pull-xs-right">
            <input class="form-control" type="email" placeholder="Email">
              <input class="form-control" type="password" placeholder="Password">
            <button class="btn btn-success" type="submit">Login</button>
          </form> -->
        </nav>

        <div class="jumbotron" id="jumbotron">
          <h1 class="display-3">JAMIA MILLIA ISLAMIA</h1>
          <div class="lead">Hostel Management System</div>
          <hr class="m-y-2">
          <p>Want to know more? Join our mailing list!</p>

        <form class="form-inline">
          <div class="form-group">
            <label class="sr-only" for="email">Email address</label>
            <div class="input-group">
          
            </div>
          </div>
		  <a href="a_login/login.php" class="btn btn-info active" role="button" target="_blank">Admin</a>
		    <a href="s_login/login.php" class="btn btn-info active" role="button" target="_blank">Student Login</a>
        </form>
        </div>
      
      <div class="container">
      
        <div class="row" id="appSummary">
         <div class="col-sm-6"
             id="left">CAMPUS - A</div>
			<div  class="col-sm-6" id="right">CAMPUS - B</div>
       
          </div>
          
      </div>
      
      <div class="container" id="about">
      <div class="card-deck-wrapper">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="https://images.unsplash.com/photo-1527853787696-f7be74f2e39a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
        <div class="card-text">
                <div class="dd">Dr. Zakir Husain Hall</div>
				<div class="ss"><a href="allama.php">Allama Iqbal Hostel </a></div>
				<div class="ss"><a href="kellat.php">E.J. Kellat Hostel </a></div>
				<div class="ss"><a href="srk.php">Shafiqur Rahman Kidwai</a></div>
				<div class="ss"><a href="ubaidullah.php">Ubaidullah Sindhi Hostel</a></div>
				</div>
        
    </div>
    <div class="card">
      <img class="card-img-top" src="https://images.unsplash.com/photo-1488805990569-3c9e1d76d51c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
        <div class="card-text">
                <div class="dd">MMA Jauhar Hall</div>
				<div class="ss"><a href="frk.php">Fazalur Rahman Khan Hostel </a></div>
				<div class="ss"><a href="bra.php">Dr. B.R. Ambedkar Hostel  </a></div>
				<div class="ss"><a href="amk.php">Sir A.M. Khwaja Hostel </a></div>
      </div>
    </div>
          </div>
      
      <div id="footer">
      <div class="container">
        <div class="row">
          
         	<div class="col-xs-12 col-sm-6 col-md-3"><a href="aboutus.php">About us</a></div>
                <div class="col-xs-12 col-sm-6 col-md-3"><a href="rules.php">Rules & Regulations</a></div>
				<div class="col-xs-12 col-sm-6 col-md-3"><a href="https://fs30.formsite.com/mansaf/form10/index.html">Apply Online</a></div>
				<div class="col-xs-12 col-sm-6 col-md-3"><a href="http://jmi.ac.in/upload/hostel/hbr_guidelines_2017.pdf">Archive</a></div>
				<div class="col-xs-12 col-sm-6 col-md-3"><a href="refund.php">Cancellation Refund Policy</a></div>
				<div class="col-xs-12 col-sm-6 col-md-3"><a href="disclaimer.php">Disclaimer Policy</a></div>
          
          </div>
		  </div>
      
      </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>
    
</html>