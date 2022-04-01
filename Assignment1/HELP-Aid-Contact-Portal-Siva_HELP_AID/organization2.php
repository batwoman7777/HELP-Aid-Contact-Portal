<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "helpaid";
  $con = new mysqli($servername, $username, $password, $dbname);
  
$sql = "SELECT * FROM organization2";
$result = mysqli_query($con, $sql);
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>HELP AID ADMIN</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  
  <!-- Custom styles for this template -->
        <link href="css/agency.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
    </head>
   
    <nav class="navbar new navbar-expand-lg navbar-dark fixed-top p-0 m-0" id="mainNav">
            <div class="container h-100 p-0 px-1">
                <a class="navbar-brand js-scroll-trigger h-100 m-0" href="#"><img src="img/helpaid_logo.jpg" alt="logo" width="110" height="65"></a>
                <button class="navbar-toggler navbar-toggler-right h-100 m-0" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="manage.html"><b>BACK</b></a>
						<li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="./../index.html"><b>LOG OUT</b></a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	  
	   <div class = "container p-5">
	 
		<section class="bg-light mt-3" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><br>
                        <h2 class="section-heading text-uppercase">LIST of ORGANIZATION representatives</h2><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <table id="tdatable" class="display" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>REPRESENTATIVE NAME</th>
                                    <th>ORGANIZATION NAME</th>
									<th>JOB TITLE</th>
                            <tbody >
							
							<?php
							$i=0;
							while($row = mysqli_fetch_array($result)) {
							if($i%2==0)
							$classname="even";
							else
							$classname="odd";
							?>
							<tr class="<?php if(isset($classname)) echo $classname;?>">
							<td><?php echo $row["usr"]; ?></td>
							<td><?php echo $row["OrganizationName"]; ?></td>
							<td><?php echo $row["JobTitle"]; ?></td>
							</tr>
							<?php
							$i++;
							}
							?> 
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
	   </div>
	   
     <footer>
       <hr>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; HELP AID 2022</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer> 
      
  </body>
</html>
