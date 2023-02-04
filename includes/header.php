
<!DOCTYPE html>
<html>
<head>
<!-- META: -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!-- STYLE: -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="modal.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- FAVICON: -->
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
<!-- TITLE: -->
<title><?php echo $page_title; ?></title>
</head>

<style>

	.active{
		background: #003399;
		border-radius: 5px;
	}
	
</style>

<body>
	<div id="header">
		<div class="wrapper">
			<div id="logo">
				<a href="home">CARS</a>
			</div>
			<div id="nav">
				<ul>
					<li class="<?php if($page == 'home.php'){echo 'active';} ?>"><a href="home">Home</a></li>
					<li class="<?php if($page == 'galery.php'){echo 'active';} ?>"><a href="galery">Galery</a></li>
					<li class="<?php if($page == 'about-us.php'){echo 'active';} ?>"><a href="about-us">About us</a></li>
				</ul>
			</div> <!-- end nav -->

			<div id="dm">
        		<a href="https://www.facebook.com/" target="_blank" class="dmFb">Facebook page</a>
        		<a href="https://twitter.com/" target="_blank" class="dmTw">Twitter page</a>
        	 </div><!-- end #dm -->

		</div>
	</div><!-- end #header -->
	
	<div class="wrapper">
		
		<div id="main">
		
		