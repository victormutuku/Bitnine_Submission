<?php
function OpenConnection() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "auth";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}

function setData($insert) {
    $dbConnect = OpenConnection();

    if(mysqli_query($dbConnect, $insert)) {
        echo "Success";
    } else {
        echo "Error ". mysqli_error($dbConnect);
    }
}

function getData($insert) {
    $dbConnect = OpenConnection();
    $results = mysqli_query($dbConnect, $insert);
    $rows = array();

    if(mysqli_num_rows($results)>0) {
        
        while ($row = mysqli_fetch_assoc($results)){
            $rows[] = $row;
        }

        return $rows;
    }
}

function CloseConnection($conn)
{
    $conn -> close();
}
?>
