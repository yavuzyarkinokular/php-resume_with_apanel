<?php include "header.php";
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
            <h2>Genel Ayarlar 
                <small><?php if ($_GET['durum'] == "ok") { ?>
                        <b style="color: green;text-align:right;">İşlem Başarılı</b>
                        <?php
                        } else { ?>
                        <b style="color: darkred;font-size:12px;">İşlem Başarısız</b>

                        <?php
                        }
                        ?></small>

            </h2> 
            
             
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
            <form action="../dynamic/islem.php" method="post" id="demo-form2"  > 
                <div class="container">
                    <div class="row d-flex justify-content-around">
                        <div class="col d-flex justify-content-around"> 
                                    <!--  Site Yazarı-->
                        <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazarı: <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                <input name="ayar_nsurname" type="text" id="first-name" required="required" value="<?php echo $ayarcek['ayar_nsurname']; ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                                        <!--  Site Yazarı Bitiş--> 
                                    <!--  Linkedin -->
                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Linkedin: <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input name="ayar_linkedin" type="text" id="first-name" required="required" value="<?php echo $ayarcek['ayar_linkedin']; ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                                        <!-- Linkedin Bitiş -->
                                <!-- Telefon  -->
                                <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <input name="ayar_tel" type="text" id="first-name" value="<?php echo $ayarcek['ayar_tel']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                            <!-- Telefon Bitiş  --> 

                                
                            </div>
                        <div class="d-flex justify-content-around col">  
                            <!--  Github-->
                            </div><div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Github: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input name="ayar_github" type="text" id="first-name" required="required" value="<?php echo $ayarcek['ayar_github']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                        <!-- Github Bitiş --> 
                            <!-- İl -->
                            <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input name="ayar_il" type="text" id="first-name" value="<?php echo $ayarcek['ayar_il']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                        <!-- İl bitiş  -->
                            
                            <!--Adres  -->
                            <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adres: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input name="ayar_adres" type="text" id="first-name" value="<?php echo $ayarcek['ayar_adres']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                        <!--Adres Bitiş  --> 
                                        <!-- İlçe -->
                            <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input name="ayar_ilce" type="text" id="first-name" value="<?php echo $ayarcek['ayar_ilce']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                        <!-- İlçe Bitiş -->
                            <!-- Mail -->
                            <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input name="ayar_mail" type="text" id="first-name" value="<?php echo $ayarcek['ayar_mail']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                        <!-- Mail Bitiş -->
                        </div>
                            
                                    

                    </div>
                </div> 
                                        <!-- genelayarkaydet Button-->
             
             
                            <div class="ln_solid"></div>
                            
                                    <div class="form-group">
                                    
                                        <div align="right" class="  col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button>
                                        </div>
                                    </div>
                                    <!-- genelayarkaydet Button Bitiş -->


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