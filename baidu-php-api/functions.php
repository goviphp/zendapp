<?php
function httpGetWithErros($url)
{
$proxy = "proxy.cognizant.com:6050";
$proxy = explode(':', $proxy);
$loginpassw = '408381:alliswell@220587';

    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_PROXY, $proxy[0]);
	curl_setopt($ch, CURLOPT_PROXYPORT, $proxy[1]);
	curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
 
    $output=curl_exec($ch);
 
    if($output === false)
    {
        echo "Error Number:".curl_errno($ch)."<br>";
        echo "Error String:".curl_error($ch);
    }
    curl_close($ch);
    return $output;
}
 
?>