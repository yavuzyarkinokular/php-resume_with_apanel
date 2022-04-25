<?php include 'header.php';?>
<?php $portfolyosor = $db->prepare("SELECT * FROM portfolyo");
$portfolyosor->execute(); 
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
                    <h2>Portfolyolar  </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="portfolyo_ekle.php"   role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                         
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
                          <th>İsim</th>
                          <th>Başlık </th> 
                          <th>Düzenle</th>
                          <th>Sil</th> 
                        </tr>
                      </thead>
                      <tbody> 
                      <?php while ($portfolyocek = $portfolyosor->fetch(PDO::FETCH_ASSOC)) {?>
                        <tr>   
                            <td><b style="color:purple"><?php echo $portfolyocek['portfolyo_name'];?></b></td>
                            <td><b style="color:green"><?php echo $portfolyocek['portfolyo_title'];?></b></td> 
                            <td><center><a href="portfolyoayar_duzenle.php?portfolyo_id=<?php echo $portfolyocek['portfolyo_id'] ?>"><button class="btn btn-primary btn-xs" >Düzenle </button></a></center></td>
                            <td><center><a href="../dynamic/islem.php?portfolyo_id=<?php echo $portfolyocek['portfolyo_id']; ?>&portfolyosil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td> 
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
