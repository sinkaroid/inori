<?php
if(isset($_GET['nekopoi'])){
	echo'
<div class="koceng">
<font face=consolas color=gray size="4">
<pre>
--Usage:
> paste url ex. http://linkpoi.in/9eV33
</pre>
</font>
</div>
<br>
<form action="str.php" method="get">
<input type="hidden" name="nekopoi" value="c0"/>
<input type="text" style="width:15%;" placeholder="http://linkpoi.in/9eV33" name="url"><br>
<input type="submit" name="nekop0" value=">">
</form>
</font>
<br>';
}		

if(isset($_GET['nekop0'])){
	
	preg_match_all('|externalId":"(.*?)",|');
	
}


function curlGet($link){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

function realUrl($link){
	$get = curlGet($link); // get html site
	
}
	



	@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$url = $_GET['url'];
echo'<a href="';
echo realUrl($url);
echo'" rel="nofollow" target="_blank"><font face=consolas color=royalblue>'.realUrl($url).'</font>';



?>