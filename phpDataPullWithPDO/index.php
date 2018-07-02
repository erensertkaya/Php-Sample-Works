<?php 
$user="root";
$pass="root";

try {
	$db=new PDO('mysql:host=127.0.0.1;dbname=new_schema', $user, $pass);
} catch (Exception $e) {
	
}

$query=$db->prepare('SELECT * FROM ornek');
$query->execute();
$pull=$query->fetchAll();


 ?>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Email</th> 
    <th>Telefon</th>
    <th>Şehir</th>
    <th>Tarih</th>
    <th>Tutar</th>
  </tr>
<?php  foreach ($pull as $val) {?>
  <tr>
    <td><?php echo $val['id']; ?></td>
    <td><?php echo $val['email']; ?>Smith</td> 
    <td><?php echo $val['telefon']; ?></td>
    <td><?php echo $val['sehir']; ?></td>
    <td><?php echo $val['tarih']; ?></td>
    <td><?php echo $val['tutar']; ?></td>
  </tr>
<?php } ?>
</table>