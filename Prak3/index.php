<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>
<html>
<head> 
 <title>Halaman Utama</title>
</head>
<body>
<a href="tambah.php">Tambah Data Baru</a><br/><br/>
 <table width='80%' border=1>
 <tr>
 <th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th> 
 <th>Update</th>
 </tr>
<?php 
while($user_data = mysqli_fetch_array($result)) { 
 echo "<tr>";
 echo "<td>".$user_data['NIM']."</td>";
 echo "<td>".$user_data['Nama']."</td>";
 echo "<td>".$user_data['jenis_kelamin']."</td>";
 echo "<td>".$user_data['Alamat']."</td>"; 
 echo "<td><a href='edit.php?NIM=$user_data[NIM]'>Edit</a> | <a href='delete.php?NIM=$user_data[NIM]'>Delete</a></td></tr>"; 
}
?>
</table>
</body>
</html>