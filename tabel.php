<?php 
include ("header.php");
 ?>
 <main role="main">
 	<div class="container">
  		<h2>Tabel User</h2> 
      <a href="adduser.php" class="btn btn-primary">create new user</a>           
  		<table class="table table-condensed">
    	<thead>
      	<tr>
        <th>Nama</th>
        <th>NPM</th>
        <th>Username</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>No telpon</th>
        <th>Config</th>
      	</tr>
    	</thead> 
        <tbody>
    <?php
       include "koneksi.php";
       $query=mysqli_query($koneksi, "select * from mhs"); //digunakan untuk memberikan perintah query ke MySql
       while ($data = mysqli_fetch_array($query)) { //perintah yg digunakan untuk menampilkan data dari fungsi mysqli_query menggunakan while ketika menampilkan data lebih dari satu
    ?>
        <tr>
         <td><?php echo $data['nama']; ?></td>
         <td><?php echo $data['npm']; ?></td>
         <td><?php echo $data['username']; ?></td> 
         <td><?php echo $data['alamat']; ?></td>
         <td><?php echo $data['jenis_kelamin']; ?></td>
         <td><?php echo $data['email']; ?></td>
         <td><?php echo $data['no_telp'];?></td>
         <td>
           <a href="edituser.php?user_id=<?php echo $data ['id']; ?>" class="btn btn-secondary">edit</a>
           <a href="userDB.php?user_id=<?php echo $data ['id']; ?>" class="btn btn-danger">delete</a>
         </td>
        </tr>
    <?php
       }
    ?> 
      </tbody>
  </table>
</div>
 </main>
<?php 
include "footer.php";
 ?>