<div class="header">
  <h1>OneWord</h1>
  <h2>Your One Word Playlist</h2>
</div>
<?php
//echo $result;
/*if(!isset($_COOKIE["word"])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE["word"];
}*/

$newstring = substr_replace("http://ws.spotify.com/search/1/track?q=", $_COOKIE["word"], 39, 0);

$url = $newstring;

$xml = file_get_contents( $url );
$domDocument = new DOMDocument();
$domDocument->loadXML( $xml );

$value = $domDocument->getElementsByTagName( "track" );
?> <br><div class="pure-g"> <?php
foreach ( $value as $e ) {
    //echo substr($e->getAttribute( "href" ), 14)."<br>";
    $endtext = substr($e->getAttribute( "href" ), 14);

    ?>
    <iframe class="pure-u-1-3" src="https://embed.spotify.com/?uri=spotify:track:<?php echo $endtext;?>" frameborder="0" allowtransparency="true"></iframe>
    <?php
}

?>
</div>
