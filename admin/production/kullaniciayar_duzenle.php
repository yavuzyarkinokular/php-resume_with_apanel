<?php include "header.php";
$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_id=:id ");
$kullanicisor->execute(array('id' => $_GET['kullanici_id'])); 
//Veriyi Dahil Etme
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
?> 
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2> Kullanıcı Düzenle <small>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nickname: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input required="required" name="kullanici_nickname" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_nickname'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
             
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İsim Soyisim: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="kullanici_adsoyad" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_adsoyad'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Okul: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="kullanici_okul" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_okul'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div> 
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ünvan:  
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="kullanici_unvan" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_unvan'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input required="required" name="kullanici_mail" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_mail'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifre: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input required="required" name="kullanici_password" type="password" id="first-name"  value="<?php echo $kullanicicek['kullanici_password'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="kullanici_il" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_il'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="kullanici_ilce" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_ilce'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="kullanici_gsm" type="text" id="first-name"  value="<?php echo $kullanicicek['kullanici_gsm'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div> 
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Yetki<span class="required">*</span>
                </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" name="kullanici_yetki" required> 
                    <option value="5" <?php echo $kullanicicek['kullanici_yetki'] == '5' ? 'selected=""' : ''; ?>>Aktif</option> 
                    <option value="0" <?php if ($kullanicicek['kullanici_yetki']=='0') { echo 'selected=""'; } ?>>Pasif</option> 
                  </select>
                </div>
               </div>
              
               <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']?>">
              
              
              <!-- Update Button-->
              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="  col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                  <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>

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