<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name');?></title>
		<?php wp_head();?>
	</head>

<body <?php body_class();?>>
	<div class="container">
		<header>
			<div id="header">
				<div id="logo">
					<img src="http://localhost/wordpress/wp-content/uploads/2015/07/sassandgit.png" alt="logo" >
				</div>
			<nav> 
				<p href="#" >&nbsp;</p>
					<input type="checkbox" id="nav" /><label for="nav"></label>
					<?php wp_nav_menu( array( 'container' => '' ) ); ?>
			</nav> 
		</header>
		