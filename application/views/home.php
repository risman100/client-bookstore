<!DOCTYPE html>
<html>
<head>
	<title>Toko Buku</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<nav class="container">
			<a class="navbar-brand" href="<?php echo site_url('Welcome/'); ?>">Buku.com</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo site_url('Welcome/'); ?>">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('Welcome/about'); ?>">Tentang <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>

		    <form class="form-inline my-2 my-lg-0">
		    	<ul class="navbar-nav mr-auto">
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/login'); ?>">Masuk <span class="sr-only">(current)</span></a>
		    		</li>
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/regist'); ?>">Daftar <span class="sr-only">(current)</span></a>
		    		</li>
		    	</ul>
		    </form>
		  </div>
		</nav>
	</nav>

	<nav class="container">	
		<nav class="jumbotron">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<form method="" action="<?php echo site_url('Welcome/Search'); ?>">
						 <div class="form-group">
					      <select class="form-control" id="exampleSelect1">
					        <option>Publisher</option>
					        <option>Author</option>
					        <option>Book</option>
					      </select>
					    </div>
				</div>
				<div class="col-md-6">
					<center>
						<fieldset>
							<div class="form-group">
						      <input type="text" class="form-control" placeholder="Cari">
						    </div>
						</fieldset>	
					</center>
				</div>
				<div class="col-md-2">
							<button type="submit" class="btn btn-primary">Cari</button>
						</form>
				</div>
				<div class="col-md-1"></div>
			</div>
			<hr class="my-12">
			<div class="row">
				<?php 
				if($book != null){				
					foreach($book as $data){ ?>
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="<?php echo 'http://68140596.ngrok.io/1/asset/images/'. $data->Picture; ?>" alt="Card image"><br>
					    <center>
						    <h6 class="card-text" style="color:white;"><?php echo $data->Title ?></h6>
						    <hr class="my-4">
					    </center>
						<p class="card-text text-right"><b>Rp<?php echo $data->Price ?></b></p>
						<?php $id = $data->Id_Book; ?>
					    <a class="btn btn-info" href="<?php echo site_url('Welcome/Detail/'. $id); ?>" style="color: white; width: 100%;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div> <?php } }?>
			</div>
		</nav>
	</nav>

	<nav class="container">
		<footer>
		  <p>Contact information: <a href="mailto:C16@gmail.com">
		  C16@gmail.com</a>.</p>
		</footer>
		
	</nav>
</body>
</html>