<!DOCTYPE html>
<html>
<head>
    <title>gpdp</title>
</head>
<body>
<?php
include("./connesssione.php");
$richiesta = explore("/", substr(@$_SERVER['PHAT_INFO'], 1));
$data = file_get_contents("./js/data.json");
$Sjson = json_decode($data, true);
 switch($_SERVER['REQUEST_METHOD']){

     case 'GET':
        echo "GET";
        echo $data[5];
     break;

     case 'POST':
        echo "POST";
        for ($i=0; $i < 20; $i++) { 
            echo $data["_embedded"]["employees"][$i];
        }
     break;

     case 'PUT':
         echo 'success PUT';
         
     break;

     case 'DELETE':
        echo 'success delete';
     break;

     default:
         //404 status
         header("HTTP/1.1 404 Not Found");
     break;



 }
?>
</body>
</html>