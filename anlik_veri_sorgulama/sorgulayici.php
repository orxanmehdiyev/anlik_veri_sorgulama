<?php 
include 'baglan.php';
extract($_POST);
$arama =$_POST['uye_id'];
$uye=$db->prepare("SELECT * FROM uyeler WHERE uye_id=?");
$uye->execute(array($arama));
if ($uye->rowCount() > 0) {
$getir=$uye->fetch(PDO::FETCH_ASSOC);

 ?>
            <form>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                  <label>İşlenmiş Veri</label>
                <input class="form-control" type="mail" name="uye_mail" value="<?php echo $getir['uye_mail']; ?>" placeholder="Alıcı:">
              </div>
              <div class="form-group">
                <input class="form-control" name="ad" type="text" value="<?php echo $getir['uye_ad']; ?>"  placeholder="Konu:">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="konu" value="" placeholder="Konu:"></div>
             <div class="form-group">
                <textarea class="form-control" name="mesaj" type="text"   placeholder="Mesajınız;"></textarea> 
              </div>
 
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
               
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Gönder</button>
              </div>
             
            </div>
            <!-- /.box-footer -->
         
          </form>
        
                  <?php }

                   ?>