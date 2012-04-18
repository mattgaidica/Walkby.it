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
		<div id="details">
		  
		  <?php
		    if(!empty($message)) {
		      echo '<div class="info">'.$message.'</div>';
		    }
		  ?>
		  
		  <p class="label">custom link</p>
			<p id="link" style="text-align:center;"><a target="_blank" href="<?= $shorty['link'] ?>" class="copy"><?= str_replace('http://','',$shorty['link']) ?></a></p>
			<br/>
			<br/>
			<table cellspacing="0" width="100%">
			  <tr>
					<td align=center valign=top>
			      <img src="<?= $shorty['qr_link'] ?>" />
			    </td>
				</tr>
			</table>
			<br/>
			<br/>
			<br/>
			
			<p class='label'>location</p><p id='username' class='copy'><?= str_replace('http://','',$shorty['location']) ?></p>
			<p class='label'>visits</p><p id='username' class='copy'><?= $shorty['visits'] ?></p>
			<p class='label'>created</p><p id='username' class='copy'><?= date('M j, Y',$shorty['created']) ?></p>
			
			</div>
	
			<?= form_open('',array('id'=>'create')) ?>
			<div class="input-wrap">
			  <input type="text" name="pin" id="pin" autocomplete="off" placeholder="pin" class="no-input" />
			</div>
			<div class="input-wrap">
			  <input type="text" name="location" id="location" autocomplete="off" placeholder="location" class="no-input" />
			  </div>
			  <div style="padding:15px;">
  			  <input type="checkbox" name="reset" id="reset" autocomplete="off" class="no-input" /> <span style="font-size:15px;">Reset Analytics</span>
  			</div>
				<table cellspacing="0">
  				<tr>
  					<td align=center valign=top>
  						<button type="submit" id=""><span>Change Location</span></button>
  					</td>
  				</tr>
  			</table>
			<?= form_close() ?>
               
		
	</div>
	
	<div id="footer">
		<p>&copy; 2011</p>
		<a href="http://www.primestudiosllc.com/" id="prime">built by prime</a>
	</div>
	
</div>

<!--<script src="js/jquery-1.4.2.min.js?v=1"></script>-->
<!--<script src="js/action.min.js?view=index&v=4"></script>-->

</body>
</html>