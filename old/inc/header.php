<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="css/owl.theme.default.css" type="text/css">
		<link rel="stylesheet" href="css/slimNav_sk78.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
	</head>
	<body>
		<header>
			<div class="modal fade search-hold" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-body">
							<form action="">
								<input type="text" name="" placeholder="Search...">
							</form>
						</div>
					</div>
					
				</div>
			</div>
			<div class="header_mid">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 logo_con">
							<a href="index.php"><img src="images/logo.png" alt=""></a>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="menu-part">
								<div id="navigation">
									<nav>
										<ul>
											<li class="current-menu-item"><a href="index.php">Home </a></li>
											<li><a href="product.php">Products</a>
												<!-- <ul class="sub-menu">
													<li><a href="#">Birthday Party</a></li>
													<li><a href="#">Wedding Ceremony</a></li>
												</ul> -->
											</li>
											<li><a href="categories.php">Categories</a>
											</li>
											<li><a href="contact.php">Contact</a></li>

										</ul>
									</nav>
								</div>
							</div>
							<div class="header_rihgt">
								<ul>
									<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a></li>
									<li><a href="#"><i class="fa fa-shopping-cart"></i><span>0</span></a></li>
									<li>
										<a class="join" href="join.php">Join Us</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		 
		  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
              <div class="col-lg-6 p-0">
                  <img src="images/cust-img.jpg" alt="">
              </div>
              <div class="col-lg-6">
                  <h3>Create Your Custom Print, Today !!</h3>
                  <form action="">
                      <input type="text" placeholder="Name">
                      <input type="text" placeholder="Address">
                      <input type="text" placeholder="Email ">
                      <input type="text" placeholder="Phone (Optional)">
                      <input type="text" placeholder="Link to image (Optional)">
                      <input type="text" placeholder="Link to site to be placed on QR code">
                      <div class="field" align="left">
                        <img src="images/file-icon.svg">
                          <h4>Choose a file or drag it here</h4>
                          <input type="file" id="files" name="files[]" multiple />
                        </div>
                      <textarea name="" id="" placeholder="Comments"></textarea>
                      <input type="submit" value="Create">
                  </form>
              </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
