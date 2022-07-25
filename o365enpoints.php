<?php
header('Content-type: text/plain');

$guid = ''; # Please generate your own GUID
$area = htmlspecialchars($_GET["area"]);
$URL = "https://endpoints.office.com/endpoints/worldwide?clientrequestid={$guid}&format=csv&noipv6=true&serviceareas={$area}";

$curl_session = curl_init();

curl_setopt($curl_session ,CURLOPT_URL,$URL);
curl_setopt($curl_session ,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($curl_session);
curl_close($curl_session);

$regex = "#[[:digit:]]{1,3}(\.[[:digit:]]{1,3}){3}\/[[:digit:]]{1,2}#";
preg_match_all($regex, $result, $ips);

echo implode("\n",$ips[0]);

?>