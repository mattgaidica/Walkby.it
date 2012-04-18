
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Walkby.it Docs</title> 
 
<style type='text/css' media='all'>@import url('/css/docs_style.css');</style> 
<link rel='stylesheet' type='text/css' media='all' href='/css/docs_style.css' /> 
 
<meta http-equiv='expires' content='-1' /> 
<meta http-equiv= 'pragma' content='no-cache' /> 
<meta name='robots' content='all' /> 
 
</head> 
<body> 
 
<!-- START NAVIGATION --> 
<div id="nav"><div id="nav_inner"></div></div> 
<div id="nav2"><a name="top">&nbsp;</a></div> 
<div id="masthead"> 
<table cellpadding="0" cellspacing="0" border="0" style="width:100%"> 
<tr> 
<td><h1>Walkby.it</h1></td> 
</tr> 
</table> 
</div> 
<!-- END NAVIGATION --> 
 
 
<!-- START BREADCRUMB --> 
<table cellpadding="0" cellspacing="0" border="0" style="width:100%"> 
<tr> 
<td id="breadcrumb"> 
<a href="http://walkby.it/">Home</a> &nbsp;&#8250;&nbsp;
Docs
</td>
</tr> 
</table> 
<!-- END BREADCRUMB --> 
 
<br clear="all" /> 
 
 
<!-- START CONTENT --> 
<div id="content"> 
 
 
<h1>API Methods</h1> 
 
<p>The API allows for <strong>walkby.it</strong> links to be dynamically created, and for information and stats to be retrieved on existing links. A link is referred to as a "shorty", with the shorty <var>code</var> appearing as the first URI element in the final shorty link. All methods are accessed through the API at <strong>http://walkby.it/api</strong>.</p>
 
<p>Features:</p> 
 
<ul>
  <li>Link visit count</li>
	<li>Pre-built QR code</li> 
	<li>Ability to change redirect location the  with a pin</li>
</ul> 
 
<h2>Make</h2> 
 
<p>The make method is accessed via the API at <strong>http://walkby.it/api/make</strong>, and takes the following parameters as POST inputs:</p> 

<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"> 
<tr> 
	<th>POST Name</th> 
	<th>Required</th> 
	<th>Description</th> 
</tr> 
<tr> 
	<td class="td"><strong>location</strong></td> 
	<td class="td">Yes</td> 
	<td class="td">The final redirect location URL.</td> 
</tr>
<tr> 
	<td class="td"><strong>pin</strong></td> 
	<td class="td">No</td> 
	<td class="td">Pin number to change the redirect location.</td>
</tr>
</table>
 
<h3>Example</h3> 
 
<p>Below is an example using PHP's cURL library.</p> 
 
<code>
  $url = 'http://walkby.it/api/make';<br/>
  $post = array(<br/>
    &nbsp;'location'=>'http://builtbyprime.com'<br/>
  );<br/>
  <br/>
  $ch = curl_init();<br/>
  curl_setopt($ch,CURLOPT_URL,$url);<br/>
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);<br/>
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);<br/>
  curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);<br/>
  $shorty = curl_exec($ch);<br/>
  $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);<br/>
  curl_close($ch);<br/>
  <br/>
  $shorty = json_decode($shorty);<br/>
  <br/>
  if($http_code == 200) {<br/>
    &nbsp;//success<br/>
    &nbsp;print_r($shorty);<br/>
  } else {<br/>
    &nbsp;//failure, HTTP response = 400<br/>
    &nbsp;echo $shorty->error;<br/>
  }<br/>
  <br/>
  
</code>

<p>Optionally, a <var>pin</var> can be set in the post array. The pin number will be returned in the shorty object, and will only be visible once in the links lifetime (upon creation).</p>

<h2>Stats</h2> 
 
<p>The stats method is accessed via the API at <strong>http://walkby.it/api/stats</strong>, and takes the following parameters as POST inputs:</p> 

<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"> 
<tr> 
	<th>POST Name</th> 
	<th>Required</th> 
	<th>Description</th> 
</tr> 
<tr> 
	<td class="td"><strong>code</strong></td> 
	<td class="td">Yes</td> 
	<td class="td">The shorty link URL code- http://walkby.it/<var>code</var></td> 
</tr>
</table>
 
<h3>Example</h3> 
 
<p>Below is an example using PHP's cURL library.</p> 
 
<code>
  $url = 'http://walkby.it/api/stats';<br/>
  $post = array(<br/>
    &nbsp;'code'=>'1f'<br/>
  );<br/>
  <br/>
  $ch = curl_init();<br/>
  curl_setopt($ch,CURLOPT_URL,$url);<br/>
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);<br/>
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);<br/>
  curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);<br/>
  $shorty = curl_exec($ch);<br/>
  $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);<br/>
  curl_close($ch);<br/>
  <br/>
  $shorty = json_decode($shorty);<br/>
  <br/>
  if($http_code == 200) {<br/>
    &nbsp;//success<br/>
    &nbsp;print_r($shorty);<br/>
  } else {<br/>
    &nbsp;//failure, HTTP response = 400<br/>
    &nbsp;echo $shorty->error;<br/>
  }<br/>
  <br/>
  
</code>

<p>When retrieving stats, the <var>pin</var> code is not given, as to protect the originators intentions for the link.</p>
 
</div> 
<!-- END CONTENT --> 
 
 
<div id="footer"> 
<p>&nbsp;&middot;&nbsp; Copyright &#169; 2011 &nbsp;&middot;&nbsp; <a href="http://builtbyprime.com/">Built by Prime</a></p> 
</div> 
 
</body> 
</html>