<?php 

$okulsor = $db->prepare("SELECT * FROM okul");
$okulsor->execute(); 
?>
<!-- Eğitim  -->
 <div class="shadow-1-strong bg-white my-5 p-5" id="education">
            <div class="education-section">
              <h2 class="h2 mb-4">Eğitim</h2>
              <div class="timeline">
              <?php while ($okulcek=$okulsor->fetch(PDO::FETCH_ASSOC)) {?>
                  <div
                    class="timeline-card timeline-card-success"
                    data-aos="fade-in"
                    data-aos-delay="0" >
                    
                    <div class="timeline-head px-4 pt-3">
                        <div class="h5">
                          <?php echo $okulcek['okul_bolum']?>
                          <span class="text-muted h6"><?php echo $okulcek['okul_isim']?></span>
                        </div>
                    </div>
                    <div class="timeline-body px-4 pb-4">
                      <div class="text-muted text-small mb-3"><?php echo $okulcek['okul_tarih']?></div>
                      <div>
                      <?php echo $okulcek['okul_aciklama']?>
                      </div>
                    </div>
                  </div>
                  <?php }?> 
              </div>
            </div>
          </div>
          <!-- Eğitim Bitiş -->