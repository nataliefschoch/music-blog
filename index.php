
<!DOCTYPE html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" TYPE="text/css">
  <link rel="icon" type="image/png" href="images/favicon.ico"/>
  <title>I Need Space</title>
  <meta name="keywords" content="natalie, schoch, designer, graphic, illustration, infographics">
  <meta name="description" content="Natalie Schoch - Portfolio">
  <meta name="author" content="Natalie Schoch">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
	<header>
	<div class='container'>
		<div class='nav row'>
			<div class='col-md-4'>
				<h1 class='caps'>
					<a href='#'>I need space</a>
				</h1>
			</div>
			<div class='col-md-2 text-right'>
				<button class='btn btn-secondary' type="button">
					bookmark
				</button>
			</div>
			<div class='col-md-5'>
				<div class="input-group">
		      <input type="text" class="form-control" placeholder="Enter your email...">
		      <span class="input-group-btn">
		        <button class="btn btn-primary" type="button">subscribe</button>
		      </span>
		    </div>
			</div>
		</div>
	</div>
	</header>
	<section class='content text-center'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-4'>
					<a href='#'>
						<div class='album-wrapper'>
							<div class='album'><img src='images/album-cover-soft-tender@2x.jpg' width='325px'></div>
							<div class='album-shadow'></div>
						</div>
					</a>
					<a href='#'>
						<div class='album-wrapper'>
							<div class='album'></div>
							<div class='album-shadow'></div>
						</div>
					</a>
				</div>
				<div class='col-md-4'>
					<a href='#'>
						<div class='album-wrapper'>
							<div class='album'></div>
							<div class='album-shadow'></div>
						</div>
					</a>
					<a href='#'>
						<div class='album-wrapper'>
							<div class='album'></div>
							<div class='album-shadow'></div>
						</div>
					</a>
				</div>
				<div class='col-md-4'>
					<a href='#'>
						<div class='album-wrapper'>
							<div class='album'></div>
							<div class='album-shadow'></div>
						</div>
					</a>
					<a href='#'>
						<div class='album-wrapper'>
							<div class='album'></div>
							<div class='album-shadow'></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class='container'>
			<div class='row'>
				<div class='col-md-4'>
					<p>
						I need space is a curated list of chill songs for chill people.
						Curated by Natalie
					</p>
				</div>
				<div class='col-md-8'>
					<div class='social-links'>
						<div class='social'>
							<a href='#'>Spotify</a>
						</div>
					</div>
					<div class='social-links'>
						<div class='social'>
							<a href='#'>Email</a>
						</div>
					</div>
					<div class='social-links'>
						<div class='social'>
							<a href='#'>Insta</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

<script>
	$(".album").hover(
	  function() {
	    $('.album-shadow').css("transform","translate(25px,25px)").addClass('box-shadow');
	  }, function() {
	    $('.album-shadow').css("transform","translate(20px, 20px)").removeClass('box-shadow');
	  }
	);
</script>