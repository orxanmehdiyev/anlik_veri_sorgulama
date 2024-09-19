

<?php 
include "panel/header.php";
?>
<?php 
include "panel/nav.php";
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Anlık Veri Sorgulayıcı

    </h1>



    <!-- Liste ayarları Data kısmında -->

    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
      <li class="active">Anlık Veri Sorgulayıcı</li>
    </ol>
  </section>

  <!-- Main content -->






  <section class="content">
    <div class="row">
      <div class="col-md-12">

        
       <div class="nav-tabs-custom">
        <div style="display: block;" id="mesajat"> <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Form Kısmı</h3>
          </div>












          <div class="box-body">

           <div class="form-group">
            <label>Kayıtlı Veriler</label>
            <input class="form-control "   id="deneme" name="uye" type="search" 
            style="width: 100%;">


            <div style="width: 100%;position: absolute;z-index: 100;" id="sonuclar"></div>
          </div>
        </div>

        
        <div id="form">
          



          <form>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label>İşlenmiş Veri</label>
                <input class="form-control" type="mail" name="uye_mail" value="" placeholder="Alıcı:">
              </div>
              <div class="form-group">

                <input class="form-control" name="ad" type="text" value=""  placeholder="Konu:">
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
            

            
          </div>




          <!-- /.box-body -->
        </div>
      </div>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  
  <!-- /.row -->
</section>
<!-- /.content -->
</div>



<script type="text/javascript">
 $('#deneme').keyup(function(){
  $('#sonuclar').show();
  if ($('#deneme').val() == "") {
    $('#sonuclar').hide();
  }else{
    var yaz = $('#deneme').serialize()
    $.ajax({
      url:'sonuc.php',
      data:yaz,
      type:'POST',
      success:function (sc) {
        $('#sonuclar').show();
        $('#sonuclar').html(sc)
      }
    });
  }

});
 function cek(id) {
  $('#sonuclar').hide();
  var ya = 'uye_id='+id;
  $.ajax({
    url:'sorgulayici.php',
    data:ya,
    type:'POST',
    success:function (sc) {

      $('#form').html(sc)
    }
  });
}

</script>


</body>
</html>