<?php include("sidebar.php");

if(isset($_REQUEST['id']))
	{
		$sql = "DELETE FROM rooms WHERE id = " . $_REQUEST['id'];
		mysqli_query($conn, $sql);
		
       // header("Location:adminGeneratedLinkList.php");
       echo '<script type="text/javascript">window.location=\'rooms.php\';</script>';
        
	}

?>

<br /><br />
<div class="row">   			
	<div class="col-md-12">
		<div class="card card-plain">
				<div class="card-header card-header-primary">
					<h4 class="card-title mt-0">Rooms 
					<a href="addRoom.php" class="btn btn-sm btn-primary pull-right" style="background-color:white; color:#b01dab;"> Add Room</a>
					</h4>
				</div>
				
			<div class="card-body">
			<br>
				<div class="row"> 
					  <div class="col-md-12">
                     			<div class="col-md-4 pull-right" style=" padding-right:40px;">
									<form class="navbar-form">
										<div class="input-group no-border">
											<input type="text" value="" id="search" name="search" onkeyup="mySearch()" class="form-control"  placeholder="Search..." autocomplete="off">
											<button type="submit" class="btn btn-white btn-round btn-just-icon">
												<i class="material-icons">search</i>
												<div class="ripple-container"></div>
											</button>
										</div>
									</form>
								</div>
								
                               <div class="card">
								<div class="table-responsive" style="max-height:500px; overflow:scroll;">
									<table class="table table-hover" id="myTable" >
										<tr>
											<th>Action</th>
											<th>No.</th>
                                            <th>Room Name </th>
											<th>Type</th>
											<th>Details</th>
											<th>Charges</th>
											<th>Sharing</th>
											<th>Photo</th>
										</tr>
											<tbody>
											<?php 
											
											$sql = "SELECT * FROM rooms ORDER BY id";
											$result = mysqli_query($conn,$sql);
											$count=1;
										while($row = mysqli_fetch_array($result))
                                        { 
                                            echo "<tr class='odd gradeX'>";                                            
											echo "<td>";
											echo "<a href='addRoom.php?id=" . $row['id'] . "' class='btn btn-primary btn-link btn-sm'><i class='material-icons'  data-toggle='tooltip' data-placement='top' data-original-title='click to edit'>edit</i></a>";
											echo "<a href='rooms.php?id=" . $row['id'] . "' class='btn btn-danger btn-link btn-sm'><i class='material-icons' onclick='return confirmDelete();' class='btn btn-danger btn-xs delete fa fa-trash-o tooltip-danger' data-toggle='tooltip' data-placement='top' data-original-title='click to delete'>close</i></a>";
											echo "</td>";
                                            echo "<td>" . $count . "</td>";
											echo "<td>" . $row['rname'] . "</td>";
											echo "<td>" . $row['rtype'] . "</td>";
											echo "<td>" . $row['rdetails'] . "</td>";
											echo "<td>" . $row['charges'] . "</td>";
                                            echo "<td>" . $row['sharing'] . "</td>";
											echo "<td>" . "" . "</td>";
                                            echo "</tr>";
                                            $count++;
                                        }
											
											
											
											?>
											</tbody>
									</table>
								 </div>
								 </div>
					  </div>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php
include("footer.php");
?>



<script>
function confirmDelete() {
        return (confirm("Are you sure to delete?"));
	}
	
	function mySearch() {
		var input, filter, table, tr, td, i;
		input = document.getElementById("search");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 1; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td");
			var show = false;
			for (j = 0; j < td.length; j++) {    
				if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
					show = true;
					break;
				}
			}
			if(show)
				tr[i].style.display = "";
			else
				tr[i].style.display = "none";
		}
    }
    
</script>



<?php include("footer.php");?>