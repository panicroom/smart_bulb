<html>
 <head>
  <title>New Devices</title>
 </head>
 <body>
<?php
        echo ("<A HREF=./index.php><img src='./images/settings.png' HEIGHT='100' WIDTH='100' border='0' alt='Link to this page'></A>");
        echo ("<A HREF=./new_dev.php><img src='./images/search.png' HEIGHT='100' WIDTH='100' border='0' alt='Link to this page'></A>");
        echo ("<div align='center'>");
        $response = file_get_contents('http://localhost:8080/dev_list');
//	$response = str_replace("(","",$response);
//	$response = str_replace(")","",$response);
        for($i=0;$i < count($response);$i++){
            echo "<br>$response</br>";
        }
        echo "<br></br>";
?>
 </body>
</html>

