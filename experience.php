<?php 

$deneyimsor = $db->prepare("SELECT * FROM deneyim");
$deneyimsor->execute();
//Veriyi Dahil Etme
?>
 
<!-- İş Geçmişi -->
<div class="shadow-1-strong bg-white my-5 p-5" id="experience">
            <div class="work-experience-section">
              <h2 class="h2 mb-4">İş Geçmişi</h2>
              <div class="timeline">
                  <?php while ($deneyimcek = $deneyimsor->fetch(PDO::FETCH_ASSOC)) {?>
                        <div
                            class="timeline-card timeline-card-info"
                            data-aos="fade-in"
                            data-aos-delay="0"
                            >
                        <div class="timeline-head px-4 pt-3">
                            <div class="h5">
                                <?php echo $deneyimcek['deneyim_pozisyon'];?>
                                <span class="text-muted h6"><?php echo $deneyimcek['deneyim_firma'];?> </span>
                            </div>
                        </div>
                            <div class="timeline-body px-4 pb-4">
                                <div class="text-muted text-small mb-3">
                                    <h6><?php echo $deneyimcek['deneyim_tarih'];?></h6>
                                        <i> 
                                            <?php echo $deneyimcek['deneyim_konum'];?> 

                                        </i>
                                    </div>
                                    <div>
                                    <ul>
                                        <li>
                                        <?php echo $deneyimcek['deneyim_aciklama1'];?>

                                        </li>
                                        <li>
                                        <?php echo $deneyimcek['deneyim_aciklama2'];?>

                                        </li>
                                        <li>
                                        <?php echo $deneyimcek['deneyim_aciklama3'];?>

                                        </li>
                                        <li>
                                        <?php echo $deneyimcek['deneyim_aciklama4'];?>

                                        </li>
                                    </ul>
                                    </div>
                            </div>
                        </div> <?php }?>
                
                <!-- <div
                  class="timeline-card timeline-card-info"
                  data-aos="fade-in"
                  data-aos-delay="200"
                >
                  <div class="timeline-head px-4 pt-3">
                    <div class="h5">
                      Hasar Departmanı Stajyeri
                      <span class="text-muted h6">E.Özgörkey Grup</span>
                    </div>
                  </div>
                  <div class="timeline-body px-4 pb-4">
                    <div class="text-muted text-small mb-3">
                      Temmuz, 2021 - Ağustos, 2021
                    </div>
                    <div>
                      <ul>
                        <li>Hasarlı araçların uygun açıdan fotoğraflanması</li>
                        <li>Araç anahtar bilgilerinin çıktı alınması</li>
                        <li>
                          Bilgisayar programları kullanılarak cam hasarının
                          girilmesi
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>  -->
              </div>
            </div>
          </div>
          <!-- İş Geçmişi Bitiş -->