
		
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Portal 2</title>
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
   <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/custom.css">



</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span>&nbsp&nbspAriyadasa Co.</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					<li class="dropdown" style="display:none">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Engage</a></li>
							<li><a href="#">Pontificate</a></li>
							<li><a href="#">Synergize</a></li>
						</ul>
					</li>    
                </ul>

				<!-- Search -->
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control">
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
				</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="jumbotron feature" style="display:none">
		<div class="container">
		
			<div id="feature-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#feature-carousel" data-slide-to="1"></li>
					<li data-target="#feature-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#">
							<img class="img-responsive" src="img/img.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="img/img2.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="img/img.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>			  
				</div>
				<a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
	</div>

<div class="container-fluid" style="margin-top:50px">

		<!-- Left Column -->
		<div class="col-sm-4"></div>
		
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						Edit your details here
					</h3>
				</div>
				<div class="panel-body" id="change-form">
				
					<form action="<?php echo base_url()?>index.php/notification_controller/submitedit" method="POST">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input name="first-name" type="text" id="first-name" value="<?php echo $first_name?>"></td>
                </tr>
                <tr>
                    <td>Second Name:</td>
                    <td><input name="second-name" type="text" id="second-name" value="<?php echo $second_name?>"></td>
                </tr>
                <tr>
                    <td>Current Address:</td>
                    <td><input name="address" type="text" id="address" value="<?php echo $address?>"></td>
                </tr>
                <tr>
                    <td>Mobile:</td>
                    <td><input name="mobile" type="text" id="mobile"  value="<?php echo $mobile?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input name="email" type="text" id="email"  value="<?php echo $email?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input name="password" type="password" id="password" ></td>
                </tr>
                <tr>
                    <td>Retype-Password:</td>
                    <td><input name="re-password" type="password" id="re-password"></td>
                </tr>
                <tr><td>Experience/skills:</td>
                    <td><select title="Skills" name="skill" >
                            <option value="ph">Photography</option>
                            <option value="mn">Management</option>
                            <option value="ma">Marketing</option>
                            <option value="ac">Accounting</option>
                            <option value="co">Communication</option>
                        </select></td>
                <tr>
                    <td colspan="2" style="text-align: center"><input class="btn btn-default" name="submit" type="submit" id="submit" value="Change"></td>
                </tr>
            </table>
        </form>
				</div>
			</div>
		
		</div>
	
		<div class="col-sm-4"></div>
	
	</body>
</html>