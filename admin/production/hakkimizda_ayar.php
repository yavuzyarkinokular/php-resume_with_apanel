<?php include "header.php";
include "../dynamic/baglan.php";

// Veri tabanındaki veriyi ayrıştırarak seçme
$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id ");
$hakkimizdasor->execute(array('id' => 0));
//Veriyi Dahil Etme
$hakkimizdacek = $hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Hakkımızda Ayarları <small> 
                            <!-- Update Durumu-->
                            <?php if ($_GET['durum'] == "ok") { ?>
                              <b style="color: green;">İşlem Başarılı</b>
                            <?php
                            } else { ?>
                              <b style="color: darkred;">İşlem Başarısız</b>

                            <?php
                            }
                            ?>
                            <!-- Update Durumu Bitiş-->

                            </small></h2>  

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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="hakkimizda_mail" type="text" id="first-name" value="<?php echo $hakkimizdacek['hakkimizda_mail']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="hakkimizda_tel" type="text" id="first-name" value="<?php echo $hakkimizdacek['hakkimizda_tel']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adres: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="hakkimizda_adres" type="text" id="first-name" value="<?php echo $hakkimizdacek['hakkimizda_adres']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Paragraf 1 : <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="hakkimizda_description1" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $hakkimizdacek['hakkimizda_description1']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Paragraf 2 : <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="hakkimizda_description2" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $hakkimizdacek['hakkimizda_description2']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Paragraf 3 : <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="hakkimizda_description3" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $hakkimizdacek['hakkimizda_description3']; ?></textarea>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Paragraf 4 : <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="hakkimizda_description4" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $hakkimizdacek['hakkimizda_description4']; ?></textarea>
                                </div>
                            </div> 
                             
                             
                            <!-- Update Button-->
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="  col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="hakkimizdaayarkaydet" class="btn btn-success">Güncelle</button>
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