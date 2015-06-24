<?

// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Debuging

$jsondata =file_get_contents($_GET["url"],false,$context);
echo $jsondata;

//

$prefix = substr($_GET["url"], 0, 4);
if($prefix != "http") die();
echo file_get_contents($_GET["url"],false,$context);



//header("Location: ".$_GET["url"]);
?>
