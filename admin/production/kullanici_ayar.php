<?php include 'header.php';?>
<?php $kullanicisor = $db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute(); 
//Veriyi Dahil Etme
?>
 

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title"> 

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                   
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kullanıcılar  </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="kullanici_ekle.php"   role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                         
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Kayıt Tarih</th>
                          <th>Ad Soyad</th>
                          <th>Mail Adresi</th>

                          <th>Meslek</th>
                          <th>Telefon</th>
                          <th>İl</th>
                          <th>İlçe</th>
                          <th>Yetki</th>

                          
                          <th>Düzenle</th>
                          <th>Sil</th> 
                        </tr>
                      </thead>
                      <tbody> 
                      <?php while ($kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>
                        <tr>  
                            <td><?php echo $kullanicicek['kullanici_zaman'];?></td>
                            <td><b style="color:purple"><?php echo $kullanicicek['kullanici_adsoyad'];?></b></td>
                            <td><b style="color:green"><?php echo $kullanicicek['kullanici_mail'];?></b></td>
                            <td><?php echo $kullanicicek['kullanici_unvan'];?></td>
                            <td><?php echo $kullanicicek['kullanici_gsm'];?></td> 
                            <td><?php echo $kullanicicek['kullanici_il'];?></td>
                            <td><?php echo $kullanicicek['kullanici_ilce'];?></td>
                            <td><?php echo $kullanicicek['kullanici_yetki']?>
                            </td> 
                            <td><center><a href="kullaniciayar_duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>"><button class="btn btn-primary btn-xs" >Düzenle </button></a></center></td>
                            <td><center><a href="../dynamic/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td> 
                          <?php }?>
                          
                        </tr> 
                         
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

               
                
            </div>
          </div>
        </div>
        <!-- /page content --> 
<?php include 'footer.php';?>
