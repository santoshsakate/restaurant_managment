<head>
<title>Rooms</title>
<?php
 $uniqueNumber = strftime("%Y%m%d%H%M%S");
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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  
  <script src="assets/js/jquery.min.js"></script>
  
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <style>
      input[type=checkbox] {
    vertical-align: middle;
    position: relative;
    bottom: 1px;
}
.bg-primary a {
	color: #fff;	
}
  </style>
  
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
                            $i=1;
                           while($row = mysqli_fetch_array($result)){
                               ?>
                             <div class="col-lg-4 room_col magic_up">
					<div class="room">
						<div class="room_image"><img id="room_image_<?= $i; ?>" src="images/room_1.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
                                                    <div class="room_price" id="room_price_<?= $i; ?>">  <?= $row['charges']; ?> Rs / <span>Night</span></div>
							<div class="room_type" id="room_type_<?= $i; ?>"><?= $row['sharing'].' Sharing'; ?></div>
							<div class="room_title" id="room_title_<?= $i; ?>"><a href="#"><?= $row['rtype']; ?></a></div>
							<div class="room_text" id="room_text_<?= $i; ?>">
								<p><?= $row['rdetails']; ?></p>
							</div>
                                                        <input type="hidden" id="room_id_<?= $i; ?>" value="<?= $row['id']; ?>">
                                                        <input type="hidden" id="room_name_<?= $i; ?>" value="<?= $row['rname']; ?>">
							<a href="#" data-toggle="modal" data-target="#bookRoomDiv" onclick="getDetails('<?= $i; ?>')" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
                           <?php $i++;
                           
                           }
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
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel" style="float: center">Booking Form</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
        </div>
        <div class="modal-body">
         <form action="saveBooking.php" method="POST">
            <div style="width: 30%; float:left">
             <div class="form-group">
                 <div class="room">
                     <div class="room_image" ><img src="images/room_1.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
                     <div class="room_content text-center">
                         <div class="room_price" id="modal_room_price"></div>
                         <div class="room_type" id="modal_room_type"></div>
                         <div class="room_title" id="modal_room_title"></div>
                         <div class="room_text" >
                             <p id="modal_room_text"> </p>
                         </div>
                     </div>
                 </div>
             </div>
             <div >
                 <input id="checkbox" name="packages" class="checkbox" type="checkbox" value="2000"  /><label> Boating</label>
                <input id="checkbox"  name="packages" class="checkbox" type="checkbox" value="3000" />  <label>Jungle Safari</label>
                 <input id="checkbox"  name="packages"  class="checkbox" type="checkbox" value="3000" /> <label>Trekking</label>
             </div>
          </div> 
            <div style="width: 60%; float:right">
 
             <div class="form-group col-sm-6">
                 <div class=" input-group date"><label>Start Date</label>
                <input type="date" class="form-control" id="start_date" value="<?php echo date('Y-m-d'); ?>" onchange="calDays()"/>
            </div>
          </div>
             <div class="form-group col-sm-6">
                 <div class="input-group date"><label>End Date</label>
                    <input type="date" id="end_date" class="form-control" value="<?php echo date('Y-m-d'); ?>" onchange="calDays()" />
            </div>
          </div>
		   <div class="form-group">
            <label for="no_of_days" class="col-form-label">No Of Days:</label>
            <input type="text" id="no_of_days" name="no_of_days" value="1" readonly style="color:blue"/>
          </div>
          <div class="form-group">
            <label for="first-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" id="first-name" name="first-name" required>
          </div>
          
          <div class="form-group">
            <label for="last-name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" id="last-name" name="last-name" required>
          </div>
          <div class="form-group">
            <label for="mob-no" class="col-form-label">Mob No:</label>
            <input type="text" class="form-control" id="mob-no" name="mob-no" required>
          </div>
             <hr>
<!--             <div class="form-group">
            <label for="start_date" class="col-form-label">Start Date:</label>
            <input type="date" name="start_date" >
          </div>-->
          <div class="form-group">
              <label for="room" class="col-form-label">Room:</label>
               <input type="hidden" class="form-control" id="modal_room_id" name="room_id" readonly>
               <input type="text" class="form-control" id="modal_room_name" name="room_name" readonly>
          </div> 
            <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price" readonly>
            <input type="hidden" class="form-control" id="packagesNames" name="packagesNames" value="">
            <input type="hidden" class="form-control" id="packagesPrices" name="packagesPrices" value="">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message" required></textarea>
          </div>
          <div class="form-group">
            <label for="final_amount" class="col-form-label">Final Amount</label>
            <input type="text" class="form-control" id="final_amount" name="final_amount" value="" readonly style="color:#ff0023">
          </div>
         <button type="submit" value="Submit" class="form-control-lg btn btn-success btn-lg col-4">Submit</button></div> 
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
<script>
  
    function getDetails(modalId){
    $("#packages").val("");
    $("#packagesPrices").val("");
    //deselect checkboxes
    deselectall();
    var room_price = $("#room_price_"+modalId).text();
    var room_price_array =room_price.split("Rs");
    var room_type = $("#room_type_"+modalId).text();
    var room_title = $("#room_title_"+modalId).text();
    var room_text = $("#room_text_"+modalId).text();
    var room_id = $("#room_id_"+modalId).val();
    var room_name = $("#room_name_"+modalId).val();
   var no_of_days = $("#no_of_days").val();
   
    
    var final_amount = parseInt(room_price_array[0])*parseInt(no_of_days);
    $("#modal_room_price").text(room_price);
    $("#modal_room_type").text(room_type);
    $("#modal_room_title").text(room_title);
    $("#modal_room_text").text(room_text);
    $("#modal_room_name").val(room_name);
    $("#modal_room_id").val(room_id);
    $("#price").val(room_price_array[0]);
    $("#final_amount").val(final_amount);
  
    }
    
    $(document).ready(function () {
        
         
        
    var ckbox = $('#checkbox');
    
    $('input').on('click',function () {
    packageArrNames =[];
    packageArrPrices = [];
     var Final_amount = 0
     var room_price = $("#price").val();

     //var amount = $("#final_amount").val();
 var no_of_days = $("#no_of_days").val();
     var amount = parseInt(room_price)*parseInt(no_of_days);
   
     $('input:checkbox[name=packages]').each(function() 
     {    
        if($(this).is(':checked')) {
              //alert($(this).val());
              Final_amount = parseInt(Final_amount)+parseInt($(this).val())
              //alert($(this).next('label').text());
              packageArrNames.push($(this).next('label').text());
              packageArrPrices.push($(this).val());
          }else{
             $("#final_amount").val(Final_amount);  
          }
           
        }); 
		 	
   Final_amount = parseInt(Final_amount)+parseInt(amount);
   
    $("#final_amount").val(Final_amount);
    $("#packagesNames").val(packageArrNames);
    $("#packagesPrices").val(packageArrPrices);
    });
    
    
});

   
        
function deselectall() {
   $('.checkbox').each(function () { //loop through each checkbox
                $(this).prop('checked', false); //check 
            });
    }
</script>
<script>
function calDays() { 
  var start = $('#start_date').val();
  var end = $('#end_date').val();

   var startDay = new Date(start);
     var endDay = new Date(end);
     var millisecondsPerDay = 1000 * 60 * 60 * 24;

     var millisBetween = endDay.getTime() - startDay.getTime();
     var days = millisBetween / millisecondsPerDay;
     var noofdays = Math.floor(days)+1;
      // Round down.
       //alert( Math.floor(days)+1);
	   $('#no_of_days').val(noofdays);
	   Final_amount = $("#final_amount").val(); 
     var Final_amount = parseInt(Final_amount)*parseInt(noofdays);
 $("#final_amount").val(Final_amount); 
	   }
</script>