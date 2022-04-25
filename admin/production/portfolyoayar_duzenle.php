<?php include "header.php";
$portfolyosor = $db->prepare("SELECT * FROM portfolyo where portfolyo_id=:id ");
$portfolyosor->execute(array('id' => $_GET['portfolyo_id'])); 
//Veriyi Dahil Etme
$portfolyocek = $portfolyosor->fetch(PDO::FETCH_ASSOC);
?> 
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2> Portfolyo Düzenle <small>
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
              <li><a class="close-link" href="portfolyo_ayar.php"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="../dynamic/islem.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> 
             
             
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> İsim:  
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="portfolyo_name" type="text" id="first-name"   value="<?php echo $portfolyocek['portfolyo_name'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
             
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Başlık:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="portfolyo_title" type="text" id="first-name"   value="<?php echo $portfolyocek['portfolyo_title'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Açıklama : <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="portfolyo_description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $portfolyocek['portfolyo_description']; ?></textarea>
                </div>
              </div> 
               
              
              
               
              <!-- Id bilgisini işlem php e yollamak için kullanıyoruz -->
               <input type="hidden" name="portfolyo_id" value="<?php echo $portfolyocek['portfolyo_id']?>">
              
              
              <!-- Update Button-->
              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="  col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                  <button type="submit" name="portfolyoduzenle" class="btn btn-success">Güncelle</button>

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