

<html>

<head>
    <title>Company Webpage</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
   		footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    	div button{
    		display:inline-block;
    	}
        .navbar-brand {
        	
    	}
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <!-- Navbar links -->
    <div class="container">
      <a class="navbar-brand" style="font-size:20px" href="home.php">The Company</a>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="list.php">Employee List </a>
              </li>

            <li class="nav-item">
                  <a class="nav-link" href="searchproject.php">Project List</a>
              </li>
            <li class="nav-item">
                  <a class="nav-link" href="search1.php">Works On List</a>
              </li>
            <li class="nav-item">
                  <a class="nav-link" href="departmentlist.php">Department List</a>
              </li>
            <li class="nav-item">
                  <a class="nav-link" href="dependents.php">Dependent List</a>
              </li>
         
          </ul>
        	      
      </div>
    </div>
</nav>
    
  <br>				<div class="container">
						<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Employee List</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="list.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Project List</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="searchproject.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Works On List</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="search1.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Department List</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="departmentlist.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
  							<div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Dependent List</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dependents.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
  </div>

        <!-- <input type="button" onClick="location.href='./list.php'" value='Employee List' style="display: block; margin: 0 auto;font-size:20px">
        <input type="button" onClick="location.href='./searchproject.php'" value='Project List' style="display: block; margin: 0 auto;font-size:20px">
        <input type="button" onClick="location.href='./search1.php'" value='Works On List' style="display: block; margin: 0 auto;font-size:20px">
        <input type="button" onClick="location.href='./departmentlist.php'" value='Department List' style="display: block; margin: 0 auto;font-size:20px">
         <input type="button" onClick="location.href='./dependentlist.php'" value='Dependent List' style="display: block; margin: 0 auto;font-size:20px">
		-->
    

  </body>
  <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">This project has been developed by Kevin Huang and Vivian Vo <br> Copyright &copy; COMP-4150 FALL 2021 </p></div>
  </footer>
</html>