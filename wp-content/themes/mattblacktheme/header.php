<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php wp_title(); ?> </title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="page">
	<div id="header"><h1><?php bloginfo('name'); ?></h1></div>
    <div id="nav">
  		<!-- <a href="#">About</a>
  		<a href="#">News</a>
  		<a href="#">Links</a>
  		<a href="#">Contact</a> -->
		<?php wp_list_pages(array('title_a' => '')); ?>
    </div>
    