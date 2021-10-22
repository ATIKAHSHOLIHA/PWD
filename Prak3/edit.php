<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
 $nim = $_POST['NIM'];
 $nama=$_POST['Nama'];
 $jkel=$_POST['jenis_kelamin'];
 $alamat=$_POST['Alamat'];
 // update user data
$result = mysqli_query($con, "UPDATE mahasiswa SET 
Nama='$nama',jenis_kelamin='$jkel',Alamat='$alamat' WHERE NIM='$nim'");
 // Redirect to homepage to display updated user in list
header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['NIM'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE NIM='$nim'");
while($user_data = mysqli_fetch_array($result))
{
$nim = $user_data['NIM'];
$nama = $user_data['Nama'];
$jkel = $user_data['jenis_kelamin'];
$alamat = $user_data['Alamat'];
}
?>
<html>
<head> 
<title>Edit Data Mahasiswa</title>
</head>
<body>
 <a href="index.php">Home</a>
 <br/><br/>
<form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
<tr> 
<td>Nama</td>
<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
</tr>
<tr> 
<td>Gender</td>
<td><input type="text" name="jkel" value=<?php echo $jkel;?>></td>
</tr>
<tr> 
<td>alamat</td>
<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
</tr>
<tr>
<td><input type="hidden" name="nim" value=<?php echo $_GET['NIM'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>