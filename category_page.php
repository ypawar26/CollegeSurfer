
<?php

$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','categorary');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"categorary");
$sql="SELECT * FROM bca WHERE course_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>name</th>
<th>address</th>
<th>phone_no</th>
<th>location</th>
<th>email</th>
<th>website</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['phone_no'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['website'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>