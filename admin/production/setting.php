<?php include "header.php";
?>

<?php include "../dynamic/baglan.php";

// Veri tabanındaki veriyi ayrıştırarak seçme
$ayarsor = $db->prepare("SELECT * FROM ayar where ayar_id=:id ");
$ayarsor->execute(array('id' => 0));
//Veriyi Dahil Etme
$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>API Ayarları <small>
                <!-- Update Durumu-->
                <?php if ($_GET['durum'] == "ok") { ?>
                  <b style="color: green;">İşlem Başarılı</b>
                <?php
                } else { ?>
                  <b style="color: darkred;">İşlem Başarısız</b>

                <?php
                }
                ?>
              </small></h2>
            <!-- Update Durumu Bitiş -->






            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="../dynamic/islem.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="ayar_maps" type="text" id="first-name" required="required" value="<?php echo $kullanicicek['kullanici_ad']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Soyad: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="ayar_analystic" type="text" id="first-name" value="<?php echo $kullanicicek['kullanici_soyad']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yetki Düzeyi: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="ayar_zopim" type="text" id="first-name" value="<?php echo $kullanicicek['kullanici_yetki']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail : <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="ayar_zopim" type="text" id="first-name" value="<?php echo $kullanicicek['kullanici_mail']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div><div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifre: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="ayar_zopim" type="text" id="first-name" value="<?php echo $kullanicicek['kullanici_password']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <!-- Update Button-->
              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="  col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="kullanicibilgiler" class="btn btn-success">Güncelle</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>
<!-- /page content -->
<?php include 'footer.php'; ?>