<?php
$curl = curl_init('https://api.spotify.com/v1/search?q=incredible&type=track&limit=1');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
echo $result;
//var_dump(json_decode($result));

if($_SESSION['USER']) {
  echo $_SESSION['USER'];
} else {
  echo "WE DONT NEED NO WATER. LET THE MO";
}
?>

<iframe src="https://embed.spotify.com/?uri=spotify:track:4YZNILrv7RwA57GHmmvj7o" frameborder="0" allowtransparency="true"></iframe>
<iframe src="https://embed.spotify.com/?uri=spotify:track:5JunxkcjfCYcY7xJ29tLai" frameborder="0" allowtransparency="true"></iframe>
