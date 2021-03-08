<html>
	<head>
		<title>Program Simulasi Monte Carlo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main.css">
	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="img/favicon.ico">
	  	<script src="js/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	</head>
	<body>


	<!-- Container -->
	<h1><b><center>
		Pemrograman Simulasi - Monte Carlo
	</center><b></h1>
	<p><center>
		Abdurahman Jundi Rabbani (15-2017-054)
	</center></p>
	
	<div class="container">
		
		<div class="panel panel-primary">
					<div class="panel-heading">Input Data Permintaan</div>
						<div class="panel-body ">
							<?php if(empty($_POST)): ?>
							<div class="input-group justify-content-center"><center>
								<form action="prediksi_permintaan.php" method="post">
									<table class="custom-padding-table">
										<tr>
											<td>Masukan jumlah data</td>
											<td>:</td>
											<td><input type="number" min="0" name="jumlah" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
											<div class="input-group-btn">
											<td><input type="submit" value="Ok" class="btn btn-success"></td>
      										</div>
									</table>
								</form>
							</center>
							</div>
							<?php else: ?>
								<?php $banyak = $_POST['jumlah'];?>
									<?php if(!empty($banyak)): ?>
									<div class="input-group">
									<h1><center>Tahap Pertama </center></h1>
									<h2>Silahkan masukan data permintaan</h2>
									  <form action="proses_prediksi_permintaan.php" method="post">
									  	<div class="table table-responsive">
										  <table class="table table-hover custom-table-header">
												  <tr>
													<th>Permintaan</th>
													<th>Frekuensi</th>
												  <tr>
											<?php for($i=0; $i<$banyak; $i++): ?>
												  <tr>
													  <td><input type=number min=0 name=demand[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
													  <td><input type=number min=1 name=freq[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
												  </tr>
											<?php endfor; ?>
										  </table>
										  <table class="table table-hover custom-table-header">
												  <tr>
													<th>Biaya Produksi / Unit</th>
													<th>Harga Penjualan / Unit</th>
												  <tr>
												  <tr>
													  <td><input type=number min=1 name="biaya" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
													  <td><input type=number min=1 name="penjualan" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
												  </tr>
										  </table>
										  <div class="input-group-btn">
											<input type="hidden" name="jumlah" value="<?php echo $banyak; ?>">
											<center><input type="submit" value="Hitung" name="submit" class="btn btn-success" style="padding-left: 30px; padding-right: 30px;"></center>
										  </div>
										</div>
									  </form>
									</div>
									<?php endif; ?>
							<?php endif; ?>
									</div>
						</div>
					</div>

	</div>
	</body>

</html>
