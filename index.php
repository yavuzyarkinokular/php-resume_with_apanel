<?php include 'header.php';?> 
<?php 
    // Veri tabanındaki veriyi ayrıştırarak seçme
$genelayarsor = $db->prepare("SELECT * FROM genelayar where genelayar_id=:id ");
$genelayarsor->execute(array('id' => 0));
//Veriyi Dahil Etme
$genelayarcek = $genelayarsor->fetch(PDO::FETCH_ASSOC);

?>
<div class="page-content">
      <div class="container">
        <div class="resume-container">
          <div class="shadow-1-strong bg-white my-5" id="intro">
              <div class="bg-info text-white">
                  
                  <div class="cover bg-image">
                      <div
                      class="mask"
                      style="
                    background-color: rgba(0, 0, 0, 0.7);
                    backdrop-filter: blur(2px);
                    "
                >
                
                <!-- <img src="images/otesiyok.jpg" style="width:1300px;height:600px;" /> -->

                  <div class="text-center p-5">
                    <div class="avatar p-1"> 
                      
                      <img
                        class="img-thumbnail shadow-2-strong"
                        src="images/vesikalik.jpg"
                        width="160"
                        height="160"
                      />
                    </div>
                    <div class="header-bio mt-3">
                      <div data-aos="zoom-in" data-aos-delay="0">
                        <h2 class="h1"><?php echo $genelayarcek['genelayar_author']; ?> </h2>
                        <p><?php echo $genelayarcek['genelayar_meslek']; ?></p>
                      </div>
                      <div
                        class="header-social mb-3 d-print-none"
                        data-aos="zoom-in"
                        data-aos-delay="200"
                      >
                        <nav role="navigation">
                          <ul class="nav justify-content-center">
                            <li class="nav-item">
                              <a
                                class="nav-link"
                                href="https://github.com/yavuzyarkinokular"
                                target="_blank"
                                title="Github"
                                >  Github</a>
                            </li>
                            <li class="nav-item">
                              <a
                                class="nav-link"
                                href="https://www.linkedin.com/in/yavuzyarkinokular"
                                target="_blank"
                                title="Github"
                                >  Linkedin</a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                      <div class="d-print-none">
                        <a
                          class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3   "
                          href="./resume/yavuzyarkinokular.pdf"
                          data-aos="fade-right"
                          data-aos-delay="700"
                          download=""
                          >Otomotiv CV</a
                        >
                        <a
                          class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3"
                          href="./resume/y_yavuzyarkinokular.pdf"
                          data-aos="fade-right"
                          data-aos-delay="700"
                          download=""
                          >Yazılım CV</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- About -->
          <?php include 'about.php';?>
          <!-- end of About -->
          <!-- Skills -->
          <?php include 'skills.php';?>
          <!-- end of Skills -->
          <!-- Experience -->
          <?php include 'experience.php';?>
          <!--end of  Experience -->
          <!-- Education -->
          <?php include 'education.php';?>
          <!--end of  Education -->
          <!-- Portfolio -->
          <?php include 'portfolio.php';?>
          <!--end of  Portfolio --> 
         
        </div>
      </div>
    </div>
   

<?php include 'footer.php';?>