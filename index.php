<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- <script src="js/script.js"></script> -->


	<title> Arkademy </title>
</head>
<body>

<!-- PHP Include Koneksi -->
	<?php
		// include("config/koneksi.php");


		// $sql = "SELECT name from product";
		// // $sql = "SELECT c.name cashier,p.name,k.name category,p.price
		// // 		FROM product p
		// // 		LEFT JOIN category k USING (id_category)
		// // 		LEFT JOIN cashier c USING (id_cashier);
		// // 		";
		// $hasil = mysqli_query($config, $sql) or exit("Error query: <b>".$sql."</b>.");
		// 	while($data = mysqli_fetch_assoc($hasil)){
	?>

<!-- Header -->

	<div class="top-container container-fluid">
		<img class="img-top" src="https://s3-alpha-sig.figma.com/img/c575/73ce/d686cee9b4fecf36a1e813792073bdb0?Expires=1573430400&Signature=WDbTs~ba9g4W5GtzUlw3ucdu536JoSkAK4fUUPLz3Qdv7-9Y0Q3yswFAaneRZHVHpmMbM7-UfneVwmC00RhPHNhVVe9B7cUmELrSxOUL2SRp4Y2XGAfwQGd01W1rXuXnJubZJ2H1RO9jKdTLV0qBfpNmDtUcf2vbA-yAfaH6jvJDmMxg4-RmZ91qDWmUwMm4fZJOprj9eSePUJO7OHqN33-t8UleoD0C6F8g~XMaR2Y0zp9j3uQNrzNiDndYtKi8~7iUhED9vX888HDmjsuTFqXASju8yljPL9vA5xDhfwnAhrQOt2odg0YcedLaXZ8HChU6kKZW0qrjOL9EHojlsQ__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">

		<p class="header-top d-inline"> <span style="color:#FF8FB2">ARKADEMY</span> COFFEE SHOP </p>

		<!-- <button type="button" class="btn btn-primary ml-6" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"> ADD </button>			 -->

		<a class="btn" style="color: white;" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"> ADD </a>

	<!-- Modal View -->


		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" >
						<span class="modal-title" style="font-family: 'Airbnb'; font-weight: bold;" id="exampleModalLabel"> ADD </span>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" style="font-family: 'Airbnb'; color: red; text-transform: capitalize;"> X <!--  &times; --> </span>
							</button>
					</div>
				<div class="modal-body" style="font-family: 'Airbnb';">
					
					<form>						
						<div class="form-group">
						<label>Cashier</label>
							<input type="text" class="form-control" placeholder="Input Nama Cashier">
						</div>
						  
						<div class="form-group">
							<label>Product</label>
							<select class="form-control">
								<option selected>-- Pilih Product --</option>
							  	<option>Latte</option>
							  	<option>Cake</option>
							  	<option>Fried Rice</option>
							  	<option>Gudeg</option>
							  	<option>Ice Tea</option>
							</select>
						</div>
						<div class="form-group">
							<label>Category</label>
							<select class="form-control">
								<option selected>-- Pilih Category --</option>
							  	<option>Drink</option>
							  	<option>Food</option>
							</select>
						</div>
						

						<div class="form-group">
						<label>Price</label>
							<input class="form-control" type="text" placeholder="Rp."> 
						</div>
					</form>

				</div>
		
				<div class="modal-footer">
					<button type="button" class="btn mr-3"> ADD </button>
				</div>
			</div>
		
			</div>
		</div>

	</div>

<!-- Table COntainer  -->
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell"> No </div>
							<div class="cell"> Cashier </div>
							<div class="cell"> Product </div>
							<div class="cell"> Category </div>
							<div class="cell"> Price </div>
							<div class="cell"> Action </div>
						</div>

						<div class="row">
							<div class="cell" data-title="No"> 1 </div>
							<div class="cell" data-title="Cashier"> Cashier  </div>
							<div class="cell" data-title="Product"> Product </div>
							<div class="cell" data-title="Category"> Category </div>
							<div class="cell" data-title="Price"> Rp Price </div>
							<div class="cell" data-title="Action">
				 				<a class="mr-1" href=""> Edit </a> <span> | </span>
				 				<a class="ml-1" href=""> Delete </a>  
							</div>
						</div>
			</div>

	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>