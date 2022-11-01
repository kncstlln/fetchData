<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");

$collection = $client->local->students;
$result = $collection->find();


?>
<hmtl>

<title> PDC10 </title>
<h1> <center> MongoDB Table </h1>
<h6><center> Castillano, Kane Erryl G.</h6>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<body>
<table class="table table-striped">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">First Name</th>
  <th scope="col">Last Name</th>
  <th scope="col">Birthdate</th>
  <th scope="col">Address</th>
  <th scope="col">Program</th>
  <th scope="col">Contact Number</th>
  <th scope="col">Emergency Contact</th>
</tr>
</thead>
<tbody>
<?php
foreach ($result as $student) 
  { 
    ?>
<tr>
  <td><?=$student['_id']?></td>
  <td><?=$student['firstName']?></td>
  <td><?=$student['lastName']?></td>
  <td><?=$student['birthdate']?></td>
  <td><?=$student['address']?></td>
  <td><?=$student['program']?></td>
  <td><?=$student['contactNumber']?></td>
  <td><?=$student['emergencyContact']?></td>
</tr>
 <?php }  ?>
</tbody>
</table>
</body>
</html>