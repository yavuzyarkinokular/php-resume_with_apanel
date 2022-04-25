 
 <?php 
 $ayarsor = $db->prepare("SELECT * FROM ayar where ayar_id=:id ");
 $ayarsor->execute(array('id' => 0));
 //Veriyi Dahil Etme
 $ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

// Veri tabanındaki veriyi ayrıştırarak seçme
$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id ");
$hakkimizdasor->execute(array('id' => 0));
//Veriyi Dahil Etme
$hakkimizdacek = $hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Hakkımda Başlangıç -->
<div class="shadow-1-strong bg-white my-5 p-5" id="about">
            <div class="about-section">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="h2 mb-4">Hakkımda  </h2> 
                  <p><?php echo $hakkimizdacek['hakkimizda_description1'];?></p>
                  <p><?php echo $hakkimizdacek['hakkimizda_description2'];?></p>
                  <p><?php echo $hakkimizdacek['hakkimizda_description3'];?></p>
                  <p><?php echo $hakkimizdacek['hakkimizda_description4'];?></p>


                </div>
                 
                <div class="col-md-5 offset-lg-1">
                  <div class="row mt-2">
                    <h2 class="h2 fw-light mb-4">Bio</h2>
                    <div class="col-sm-5">
                      <div class="pb-2 fw-bolder">
                        <i
                          class="far fa-calendar-alt pe-2 text-muted"
                          style="width: 24px; opacity: 0.85"
                        ></i>
                        Yaş
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="pb-2"><?php echo $hakkimizdacek['hakkimizda_yas'];?></div>
                    </div>
                    <div class="col-sm-5">
                      <div class="pb-2 fw-bolder">
                        <i
                          class="far fa-envelope pe-2 text-muted"
                          style="width: 24px; opacity: 0.85"
                        ></i>
                        Email
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="pb-2"><?php echo $hakkimizdacek['hakkimizda_mail'];?></div>
                    </div>
                    <div class="col-sm-5">
                      <div class="pb-2 fw-bolder">
                        <i
                          class="fas fa-map-marker-alt pe-2 text-muted"
                          style="width: 24px; opacity: 0.85"
                        ></i>
                        Adres
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="pb-2"><?php echo $hakkimizdacek['hakkimizda_adres'];?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Hakkımda Bitiş -->