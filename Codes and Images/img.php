<?php
   $con = mysqli_connect("localhost", "root" , "", "readandwatch");
if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

  

   $sql = "SELECT * FROM movies WHERE movie_id=5";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["movie_id"]. " - Name: " . $row["movie_name"]. " " . $row["runtime"]. "<br>";
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'"/>';
    }
} else {
    echo "0 results";
}
$con->close();
   ?>