<?php include("sidebar.php");

	$id = 0;
	$room_name = "";
	$room_type = "";
	$details = "";
	$sharing = "";
	$charges = "";
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "SELECT * FROM rooms WHERE id = " . $id;
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		
		$room_name = $row['rname'];
		$room_type = $row['rtype'];
		$details = $row['rdetails'];
		$sharing = $row['sharing'];
		$charges = $row['charges'];
			
		
	}

?>

<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Rooms</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>	
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
			   
                <div class="card-header card-header-primary">
				
                  <h4 class="card-title">Room Master</h4>
				  
                </div>
                <div class="card-body">
                    <form id="regForm" method="post" action="saveRoom.php">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Room Name</label>
                          <input type="text" class="form-control" name="room_name" value="<?php echo $room_name; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                          <select id="room_type" name="room_type" class="form-control bmd-label-floating"  required>
                              <option value="" >Select Type</option>
                              <option value="AC" <?php echo  ($room_type == "AC") ? "selected=true" : ""  ?>>AC</option>
                              <option value="Non-AC" <?php echo  ($room_type == "Non-AC") ? "selected=true" : ""  ?>>Non-AC</option>
                              <option value="Luxury"<?php echo  ($room_type == "Luxury") ? "selected=true" : ""  ?>>Luxury</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Details</label>
                          <input type="text" class="form-control" name="details" value="<?php echo $details; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sharing</label>
                          <input type="text" class="form-control" name="sharing" value="<?php echo $sharing; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                          <label class="bmd-label-floating">Charges</label>
                          <input type="text" class="form-control" name="charges" value="<?php echo $charges; ?>" required>
                        </div>
                      </div>
                    </div>
                        <div class="row">
                      
                      <div class="col-md-6">
                         <label class="">Room Image</label>
                          <input type="file" class="form-control" name="upload" >
                        
                      </div>
                            
                    </div>
                   
                        
                    <button type="submit" class="btn btn-primary pull-left">SAVE</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include("footer.php"); ?>