<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PolePlay</title>

	<style type="text/css">

	body {
		background-color: #000;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #ffffff;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	
	h2 {
		padding-left: 15px;
	}

	a {
		font-size: 1.25em;
		color: #ff00cc;
		text-decoration: none;
	}

	th {
		font-size: 1.75em;
		color: #ff00cc;
		text-decoration: underline;
		padding-bottom: 20px;
	}

	.favorites {
		font-size: 1.5em;
		color: #ffffff;
		padding-left: 15px;
	}

	.register {
		padding-left: 85px;
	}

	#container {
		margin: 0 auto;
		width: 864px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	#search {
		text-align: right;
		float: right;
		width: 50%;
	}

	#clear {
		clear: both;
	}

	#logo {
		width: 50%;
		float: left;
	}

	#search_results tr td {
		text-align: center;
	}

	#search_results tr td img {
		margin: 0 auto;
	}

	</style>

	
</head>
<body>
	<div id="logo">
		<img src='<?php echo base_url('images/logo.jpg'); ?>' alt='logo' />
	</div>

	<div id="search">
		<form method="POST" action="<?php echo base_url('index.php/tricks/search'); ?>">
            <input type="text" name="keyword" value="<?php echo $this->input->post('keyword');?>" placeholder="Search here" required>
            <input type="hidden" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $this->uri->segment(3));?>">
            <input type="image" name="submit3" src="<?php echo base_url('images/searchbutton.jpg'); ?>" alt="search" />
        </form>
	</div>

	<div id="clear">
	</div>

<div id="container">
	