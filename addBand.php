<?php include('connect.php'); ?>
	<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$band = [];
		foreach($bands as $b){
			if($b[0] == $id){
				$band = $b;
			}
		}
	}
?>
		<!DOCTYPE html>
		<html lang="en">

		<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>Bandstart</title>

			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom CSS -->
			<link href="css/grayscale.css" rel="stylesheet">

			<!-- Custom Fonts -->
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
			<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
		</head>

		<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

			<!-- Navigation -->
			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand page-scroll" href="#page-top">
							<i class="fa fa-play-circle"></i> <span class="light">Bandstart</span>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
						<ul class="nav navbar-nav">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<a class="page-scroll" href="#bands">Bands</a>
							</li>
							<li>
								<a class="page-scroll" href="#download">Kopje</a>
							</li>
							<li>
								<a class="page-scroll" href="#contact">Contact</a>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>

			<!-- Intro Header -->
			<header class="intro">
				<div class="intro-body">
					<div class="container">
						<div id="row">
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title">Add Song</h3>
									</div>
									<div class="panel-body">
										<form action="addBandScript.php" method="post">
											<div class="form-group">
												<label for="exampleInputEmail1">Band Name</label>
												<input type="text" class="form-control" name="bandName" placeholder="Band Name">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Song Title</label>
												<input type="text" class="form-control" name="songTitle" placeholder="Song Title">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Song URL</label>
												<input type="text" class="form-control" name="songUrl" placeholder="Song URL">
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="ytThumb" onclick="toggleImage()"> Thumbnail from Youtube
												</label>
											</div>
											<div class="form-group" id="ImagePath">
												<label for="exampleInputFile">Thumbnail</label>
												<input type="file" name="thumb">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Band Bio</label>
												<textarea class="form-control" rows="5" name="bandBio" style="resize: none;"></textarea>
											</div>
											<button type="submit" class="btn btn-default">Submit</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title">Edit Song</h3>
									</div>
									<div class="panel-body">
										<form action="updateBandScript.php" method="post">
											<div class="form-group">
												<label for="exampleSelect1">Example select</label>
												<select onchange="loadSong()" name="songs" class="form-control" id="exampleSelect1">

													<option disabled selected value> -- select a song -- </option>
													<?php
														foreach($bands as $ba){
															echo "<option value='" . $ba[0] . "'>" . $ba[1] . " - " . $ba[3] . "</option>";
														}
													?>
												</select>
											</div>
<?php if(isset($_GET['id'])) echo "<input type='hidden' name='id' value='" . $band[0] . "'>" ?>
											<div class="form-group">
												<label for="exampleInputEmail1">Band Name</label>
												<input <?php if(!isset($_GET[ 'id'])) echo "disabled='true'"; else echo "value='$band[1]'" ?> type="text" class="form-control" name="bandName" placeholder="Band Name">
												<input <?php if(!isset($_GET[ 'id'])) echo "disabled='true'"; else echo "value='$band[1]'" ?> type="hidden" class="form-control" name="bandNameOld" placeholder="Band Name">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Song Title</label>
												<input <?php if(!isset($_GET[ 'id'])) echo "disabled='true'"; else echo "value='$band[3]'" ?> type="text" class="form-control" name="songTitle" placeholder="Song Title">
											</div>
																							<input <?php if(!isset($_GET[ 'id'])) echo "disabled='true'"; else echo "value='$band[3]'" ?> type="hidden" class="form-control" name="songTitleOld" placeholder="Band Name">

											<div class="form-group">
												<label for="exampleInputPassword1">Song URL</label>
												<input <?php if(!isset($_GET[ 'id'])) echo "disabled='true'"; else echo "value='$band[2]'" ?> type="text" class="form-control" name="songUrl" placeholder="Song URL">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Band Bio</label>
												<textarea <?php if(!isset($_GET[ 'id'])) echo "disabled='true'" ?> class="form-control" rows="5" name="bandBio" style="resize: none;"><?php if(isset($_GET['id'])) echo "$band[4]" ?></textarea>
											</div>
											<button <?php if(!isset($_GET[ 'id'])) echo "disabled='true'" ?> type="submit" class="btn btn-default">Submit</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title">Remove Song</h3>
									</div>
									<div class="panel-body">
										<form onsubmit="return removeSong()" action="removeBandScript.php" method="post">
											<div class="form-group">
												<label for="exampleSelect1">Example select</label>
												<select id="songsRm" name="songsRm" class="form-control" id="exampleSelect1" onchange="document.getElementById('rmSubmit').disabled = false;">

													<option disabled selected value> -- select a song -- </option>
													<?php
														foreach($bands as $ba){
															echo "<option value='" . $ba[0] . "'>" . $ba[1] . " - " . $ba[3] . "</option>";
														}
													?>
												</select>
											</div>
											<button disabled="true" id="rmSubmit" type="submit" class="btn btn-default">Submit</button>
										</form>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</header>


			<!-- jQuery -->
			<script src="js/jquery.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>

			<!-- Plugin JavaScript -->
			<script src="js/jquery.easing.min.js"></script>

			<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

			<!-- Custom Theme JavaScript -->
			<script src="js/grayscale.js"></script>

			<script>
				function toggleImage() {
					$('#ImagePath').toggle();
				}

				function loadSong() {
					var id = $('select[name=songs]').val()
					window.location.replace("?id=" + id);
				}
				
				function removeSong() {
					var id = $('select[name=songsRm]').val();
					var song = $('select[name=songsRm] option[value="'+id+'"]').text();
					return confirm("Are you sure you want to remove the song " + song + "?");
				}
			</script>


		</body>

		</html>