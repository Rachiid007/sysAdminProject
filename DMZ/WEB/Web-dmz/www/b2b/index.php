<?php
$mysqli = new mysqli("176.96.231.209:5000",'root','admin','woodytoys_db');

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>

<html>

<head>
</head>

<body>
    <h1>Bienvenu sur le site B2B (revendeurs) de WoodyToys m1-5 !</h1>
 
    <?php
        $query = "SELECT * FROM toys;";
        mysqli_query($mysqli, $query) or die('Error querying database.');
        $result = mysqli_query($mysqli, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo $row['id_toys'] . ': ' . $row['toyName'] . ' ' . $row['toyPrice'] . ' <br />';
        }
    ?>

</body>

</html>
