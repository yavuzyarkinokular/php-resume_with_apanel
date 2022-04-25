<?php include "header.php";
$okulsor = $db->prepare("SELECT * FROM deneyim where okul_id=:id ");
$okulsor->execute(array('id' => $_GET['okul_id'])); 
//Veriyi Dahil Etme
$okulcek = $okulsor->fetch(PDO::FETCH_ASSOC);
?> 
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2> Deneyim Ekle <small>
                <!-- Update Durumu-->
                <?php if ($_GET['durum'] == "ok") { ?>
                  <b style="color: green;"> Başarılı</b>
                <?php
                } else { ?>
                  <b style="color: darkred;"> Başarısız</b>

                <?php
                }
                ?>
              </small></h2>
            <!-- Update Durumu Bitiş --> 

            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link" href="kullanici_ayar.php"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="../dynamic/islem.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> 
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Okul İsmi:  
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="okul_isim" type="text" id="first-name"   value="<?php echo $okulcek['okul_isim'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
             
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">  Bölüm:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="okul_bolum" type="text" id="first-name"   value="<?php echo $okulcek['okul_bolum'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mezuniyet Tarih:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="okul_tarih" type="text" id="first-name"   value="<?php echo $okulcek['okul_tarih'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Açıklama:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="okul_aciklama" type="text" id="first-name"   value="<?php echo $okulcek['okul_aciklama'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
               
               
              
              
              <!-- Update Button-->
              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="  col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                  <button type="submit" name="okulekle" class="btn btn-success">Ekle</button>

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