<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Walkby.it | URL Shortener</title>
<meta name="description" content="">
<meta name="author" content="Prime Studios">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
<meta name="google-site-verification" content="wpu4XQ5LLwlXxWQyfm34GCLWC3m9PKSRKTomrnXGvcw" />
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="stylesheet" href="/css/style-mobile.css">
</head>
<body>
	<div id="container">
	
	<div id="header">
		<a href="/" id="logo">Walkby.it</a>
		<a href="/docs" id="about">docs</a>
	</div>
	
	<div id="main">
	  <?php
  	  if(!empty($notification)) {
  	    echo '<div class="'.$notification['type'].'">'.$notification['message'].'</div>';
  	  }
  	?>
	  
		<?= form_open('/',array('id'=>'create')) ?>
		  <h2 style="margin-bottom:10px;font-size:14px;">Point your labels.</h2>
			<div class="input-wrap">
				<input type="text" name="extension" id="extension" autocomplete="off" placeholder="extension" class="no-input" />
			</div>

			<div class="input-wrap">
        <input type="text" name="pin" id="pin" autocomplete="off" placeholder="pin" class="no-input" />
			</div>
			
			<div class="input-wrap">
        <input type="text" name="destination" id="destination" autocomplete="off" placeholder="destination" class="no-input" />
			</div>
			<table cellspacing="0">
				<tr>
					<td align=center valign=top>
						<button type="submit" id=""><span>Submit</span></button>
					</td>
				</tr>
			</table>
		<?= form_close() ?>
	</div>
	
	<div id="footer">
		<p>&copy; 2011</p>
		<a href="http://builtbyprime.com/" id="prime">built by prime</a>
	</div>
	
</div>

<!--<script src="js/jquery-1.4.2.min.js?v=1"></script>-->
<!--<script src="js/action.min.js?view=index&v=4"></script>-->

</body>
</html>