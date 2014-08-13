<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo "我的";
        ?>
        <?php
        header("Content-Type: text/html; charset=utf-8");
        error_reporting(E_ALL & ~E_DEPRECATED);
       
        $con = mysql_connect('localhost', 'root', 'root');
       
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
// $link=mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

        mysql_select_db("md", $con);
        mysql_query("SET NAMES UTF8");
        $result = mysql_query("SELECT * FROM user_info");
        while ($row = mysql_fetch_array($result)) {
            echo $row['username'];
            echo "<br />";
        }

        mysql_close($con);
        ?>
        
        
    </body>
</html>
