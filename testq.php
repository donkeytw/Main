<?php

    require '/home/donkeytw/db/connect.php';
  
    $sql = "SELECT * FROM student";
    $result = @mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result))
    {
        $sid = $row['sid'];
        $first = $row['first'];
        $last = $row['last'];
        $birthdate = $row['birthdate'];
        
        echo "<p>$sid - $first $last, $birthdate</p>";
    }

?>