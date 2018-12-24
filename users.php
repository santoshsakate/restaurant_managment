<?php 
include("sidebar.php");
?>
<br /><br />
<div class="row">   			
	<div class="col-md-12">
		<div class="card card-plain">
				<div class="card-header card-header-primary">
					<h4 class="card-title mt-0">Users 
					<a href="createUser.php" class="btn btn-sm btn-primary pull-right" style="background-color:white; color:#b01dab;"> Create User</a>
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
											<th>No.</th>
											<th>Action</th>
                                            <th>Name </th>
											<th>City</th>
											<th>Country</th>
											<th>Sallary</th>
										</tr>
												 <tbody>
												 <td>1</td>
                                                 <td></td>
												 <td> chandu</td>
												 <td>kop</td>
												 <td>IND</td>
												 <td>1000</td>
												 
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