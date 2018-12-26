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
</head>
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
                            ?>
				<!-- Room -->
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