<?php
    $conn = mysqli_connect("localhost", "nat", "cst336", "hogwarts");
    
    $result = mysqli_query($conn, "SELECT * FROM wizards");
    
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    echo json_encode($data);
    
?>