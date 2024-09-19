
                  
                  <select multiple class="form-control" style="height: 80px">
                   
                  
<?php 
include 'baglan.php';
extract($_POST);
$arama =$_POST['uye'];
$uye=$db->prepare("SELECT * FROM uyeler WHERE uye_ad LIKE'%$arama%'");
$uye->execute();
if ($uye->rowCount() > 0) {
$getir=$uye->fetchAll(PDO::FETCH_ASSOC);
foreach ($getir as $key ) {
$id= $key['uye_id'];
  ?>
  <option onclick="cek('<?php echo $id ?>');"><?php echo $key['uye_ad']; ?></option>

<?php
}

                  }

                   ?></select>
               