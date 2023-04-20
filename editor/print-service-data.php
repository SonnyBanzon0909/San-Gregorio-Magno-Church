<?php
  // include "includes/db.php";




$data = [  [    'id' => 1,    'title' => 'Lorem Ipsum',    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae fringilla ante. Mauris sodales ex in mi maximus, at accumsan ex varius. Sed aliquet lectus eu pharetra lacinia.',    'created_at' => '2022-01-01 12:00:00',    'updated_at' => '2022-01-01 12:00:00',  ],
[    'id' => 2,    'title' => 'Dolor Sit Amet',    'body' => 'Dolor sit amet, consectetur adipiscing elit. Nulla vitae fringilla ante. Mauris sodales ex in mi maximus, at accumsan ex varius. Sed aliquet lectus eu pharetra lacinia.',    'created_at' => '2022-01-02 12:00:00',    'updated_at' => '2022-01-02 12:00:00',  ],
[    'id' => 3,    'title' => 'Adipiscing Elit',    'body' => 'Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nulla vitae fringilla ante. Mauris sodales ex in mi maximus, at accumsan ex varius. Sed aliquet lectus eu pharetra lacinia.',    'created_at' => '2022-01-03 12:00:00',    'updated_at' => '2022-01-03 12:00:00',  ],
];

echo json_encode($data);




  // try {
  //   // fetch data from the database
  //   $sql = "SELECT name, gender, barangay, age, date_time FROM formdata";
  //   $result = $conn->query($sql);

  //   if ($result->num_rows > 0) {
  //     // output data as JSON
  //     $data = array();
  //     while($row = $result->fetch_assoc()) {
  //       $data[] = $row;
  //     }
  //     echo json_encode($data);
  //   } else {
  //     echo "0 results";
  //   }

  //   $conn->close();

  // } catch (Exception $e) {
  //   echo "Error: " . $e->getMessage();
  // }
?>
