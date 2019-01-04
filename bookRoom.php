<head>
<title>Rooms</title>
<?php
//echo $uniqueNumber = strftime("%Y%m%d%H%M%S");

?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/styles/rooms.css">
<link rel="stylesheet" type="text/css" href="assets/styles/rooms_responsive.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php include('dbconnection.php');?>
<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">SS Restaurant</div>
						<div class="section_title"><h3>Book Your Room</h3></div>
					</div>
				</div>
			</div>
			<div class="row room_row">

                            <?php
                            $sql = "SELECT * from rooms";
                            $result = mysqli_query($conn, $sql);
                           while($row = mysqli_fetch_array($result)){ ?>
                             <div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_1.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From 90 Rs / <span>Night</span></div>
							<div class="room_type"><?= $row['sharing'].' Sharing'; ?></div>
							<div class="room_title"><a href="#"><?= $row['rtype']; ?></a></div>
							<div class="room_text">
								<p><?= $row['rdetails']; ?></p>
							</div>
							<a href="#" data-toggle="modal" data-target="#bookRoomDiv"  class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
                           <?php }
                            ?>
				<!-- Room_Temp-->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_1.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From 90 Rs / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="rooms.html">AC Room</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_2.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From 90 Rs / <span>Night</span></div>
							<div class="room_type">single</div>
							<div class="room_title"><a href="rooms.html">AC Room</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_3.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From 90 Rs / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="rooms.html">Non AC</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_4.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From 90 Rs / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="rooms.html">Non AC</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_5.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">single</div>
							<div class="room_title"><a href="rooms.html">Luxury Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_6.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="rooms.html">Deluxe Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_7.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="rooms.html">Deluxe Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_8.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">single</div>
							<div class="room_title"><a href="rooms.html">Luxury Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img src="images/room_9.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="rooms.html">Deluxe Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<!--Book_Room_DIv :: START-->
<div class="container" >
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="bookRoomDiv" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
        </div>
        <div class="modal-body">
         <form action="saveBooking.php" method="POST">
          <div class="form-group">
            <label for="first-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" id="first-name" name="first-name">
          </div>
          <div class="form-group">
            <label for="last-name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" id="last-name" name="last-name">
          </div>
          <div class="form-group">
            <label for="mob-no" class="col-form-label">Mob No:</label>
            <input type="text" class="form-control" id="mob-no" name="mob-no">
          </div>
             <hr>
          <div class="form-group">
              <label for="room" class="col-form-label">Room:</label>
              <select class="browser-default custom-select" name="room">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div> 
            <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message"></textarea>
          </div>
              <button type="submit" value="Submit" class="form-control-lg">Submit</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!--Book_Room_DIv :: END-->