<!doctype html>
<html lang="<?= lang(); ?>">
	<head>
		  <meta charset="utf-8">
 		  <meta name="viewport" content="width=device-width, initial-scale=1">
 		  <link rel="shortcut icon" type="image/png" href="<?= site_base_url(); ?>/image/logo.png"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   		 <link rel="stylesheet" type="text/css" href="<?= site_base_url(); ?>/css/style.css">
		<title>Zest Framework System information</title>
	</head>

<body>
	<div class='container-fluid'>
		
		<h2>Zest Framework System information</h1>
		<h3>General</h3>
		<table class='table table-strip'>
			<tr>
				<th>Operating System</th>
				<td><?= PHP_OS_FAMILY ?></td>
			</tr>
			<tr>
				<th>PHP Version</th>
				<td><?= PHP_VERSION ?></td>
			</tr>			
			<tr>
				<th>Server</th>
				<td><?= $_SERVER['SERVER_SOFTWARE'] ?></td>
			</tr>	
			<tr>
				<th>Error Reporting</th>
				<?php if (__config('app.show_errors')) {?>	
				<td>On</td>
				<?php } else { ?>
				<td>Off</td>
				<?php } ?>
			</tr>
			<tr>
				<th>Router Cache</th>
				<?php if (__config('app.router_cache')) {?>	
				<td>On</td>
				<?php } else { ?>
				<td>Off</td>
				<?php } ?>
			</tr>			
			<tr>
				<th>Memory limit</th>
				<td><?= ini_get('memory_limit') ?></td>
			</tr>	
			<tr>
				<th>Upload max size</th>
				<td><?= ini_get('upload_max_filesize') ?></td>
			</tr>	
			<tr>
				<th>Post max size</th>
				<td><?= ini_get('post_max_size') ?></td>
			</tr>
			<tr>
				<th>Default Charset</th>
				<td><?= ini_get('default_charset') ?></td>
			</tr>		
			<tr>
				<th>Framework Version (core)</th>
				<td><?= (new \Zest\Common\Version())::VERSION ?></td>
			</tr>										
			<tr>
				<th>Base Url</th>
				<td><?= site_base_url() ?></td>
			</tr>										
			<tr>
				<th>Time Zone</th>
				<td><?= date_default_timezone_get() ?></td>
			</tr>				
		</table>

	</div>
</body>	
</html>


