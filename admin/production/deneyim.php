<?php include 'header.php';?>
<?php $deneyimsor = $db->prepare("SELECT * FROM deneyim");
$deneyimsor->execute(); 
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
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Deneyim Firma</th>
                          <th>Deneyim Pozisyon</th>
                          <th>Tarih</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <?php while ($deneyimcek = $deneyimsor->fetch(PDO::FETCH_ASSOC)) {?>
                            <td><?php echo $deneyimcek['deneyim_firma'];?></td>
                            <td><?php echo $deneyimcek['deneyim_pozisyon'];?></td>
                            <td><?php echo $deneyimcek['deneyim tarih'];?></td>
                            <td><center><a href="deneyimayar_duzenle.php?kullanici_id=<?php echo $deneyimcek['deneyim_id'] ?>"><button class="btn btn-primary btn-xs" >Düzenle </button></a></center></td>
                            <td><center><button class="btn btn-danger btn-xs">Sil</button></center></td> 
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
