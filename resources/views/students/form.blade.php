



<!DOCTYPE html>
<html lang="en">

<head
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="/css/style.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE= edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{asset('asset/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
             

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  


                    </div>
                                    
                <div class="container">
		<div class="title">REGISTRATION</div>
		
			<form action="{{url('/form_action')}}" method="post">
			@csrf
					<div class="user-details">
							<div class="input-box" > 
								<span class="user-details">Full_Name</span>
								<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
								<input type="text" name="Full_Name" placeholder="Enter Name" required>		
							</div><br>
					<div class="input-box">
							<span class="user-details">User_Name</span>
							<input type="text" name="User_Name" placeholder="UserName" required>
				   </div><br>


				   <div class="input-box">
		                        <span class="user-details">Age</span>
		                        <input type="text" name="Age"  placeholder="Enter your Age" required>
	               </div><br>
                            
							<div class="input-box">
		                        <span class="user-details">Email</span>
		                        <input type="Email" name="Email" placeholder="Enter your Email" required>
	               </div><br>
	                        <div class="input-box">
		                        <span class="user-details">Phone_number</span>
		                        <input type="text" name="Phone_number"  placeholder="Enter your Email" required>
	               </div><br>
                            <div class="input-box">
	                             <span class="user-details">Address</span>
                                 <input type="text" name="Address" placeholder="Enter your Address" required>
                   </div><br>
		   <div class="input-box">
	                             <span class="user-details">Password</span>
                                 <input type="Password" name="Password" placeholder="Enter your Password" required>
                   </div><br>
                           <div class="input-box">
	                             <span class="user-details">Confirm_Password</span>
                                 <input type="Password" name="Confirm_Password" placeholder="Enter your Password" required>
                   </div><br>
        
                          <div class="button">
	                             <input type="submit" name="submit" value="Register">
	                             </div>
								
            </form>
        </div>
                </div><br><br>
                <!-- /.container-fluid -->    <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright @ Clever, 2023</span>
                    </div>
                </div>
            </footer>

            </div>
            <!-- End of Main Content -->

        
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

</body>

</html>