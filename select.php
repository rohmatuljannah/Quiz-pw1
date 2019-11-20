<?php
include "config.php";

$query = "select * from mahasiswa";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<thead>
<h2>Tabel Data Mahasiswa</h2>
	<th>ID</th>
	<th>Nama Mahasiswa</th>
	<th>NIM</th>
	<th>Opsi</th>	
</thead>
";

if ($result) {
	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['Nama']."</td>";
		echo "<td>".$row['nim']."</td>";
		echo "</tr>";
	}
}
echo "</table>";
?>