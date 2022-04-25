<?php include "header.php";
$okulsor = $db->prepare("SELECT * FROM okul where okul_id=:id ");
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
            <h2> Okul Düzenle <small>
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
                 
              </li>
              <li><a class="close-link" href="okul_ayar.php"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="../dynamic/islem.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> 
             
             
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Okul: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="okul_isim" type="text" id="first-name" required="required" value="<?php echo $okulcek['okul_isim'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bölüm  : <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="okul_bolum" type="text" id="first-name" required="required" value="<?php echo $okulcek['okul_bolum'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mezuniyet Tarihi: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="okul_tarih" type="text" id="first-name" required="required" value="<?php echo $okulcek['okul_tarih'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div> 
              <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Açıklama: <span class="required"></span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="okul_aciklama" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $okulcek['okul_aciklama']; ?></textarea>
                    </div>
                </div> 
               
              
              
               
              
               <input type="hidden" name="okul_id" value="<?php echo $okulcek['okul_id']?>">
              
              
              <!-- Update Button-->
              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="  col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                  <button type="submit" name="okulduzenle" class="btn btn-success">Güncelle</button>

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