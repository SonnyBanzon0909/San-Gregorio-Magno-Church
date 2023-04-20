<?php
  //include "includes/db.php";


  try {
    // fetch data from the database
    $sql = "SELECT name, gender, barangay, age, date FROM formdata";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data as JSON
      $data = array();
      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      echo json_encode($data);
    } else {
      echo "0 results";
    }

    $conn->close();

  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
?>
