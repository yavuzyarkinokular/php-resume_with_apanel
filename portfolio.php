<?php 

//$portfolyosor = $db->prepare("SELECT * FROM portfolyo");
//$portfolyosor->execute(); 
?>
<!-- Portfolyo Başlangıç -->
<div
    class="shadow-1-strong bg-white my-5 p-5 d-print-none"
    id="portfolio"
  >
    <div class="portfolio-section">
      <h2 class="h2 mb-4">Portfolyo</h2>
      <div class="row g-0"> 
      <!-- Siemens NX  -->
      <div class="row g-0">
        <div class="col-md-6">
          <div
            id="siemens"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#siemens"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#siemens"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#siemens"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button><button
                type="button"
                data-bs-target="#siemens"
                data-bs-slide-to="3"
                aria-label="Slide 4"
              ></button>
               
            </div>
            <style>
              .carousel-inner img {
                margin: auto;
              }
            </style>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/siemensnx/pistonkafasi.png"
                  class="d-block w-100  "
                  alt="pistonkafa"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/siemensnx/blocking.jpg"
                  class="d-block w-100  "
                  alt="motoblok"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/siemensnx/model4.jpg"
                  class="d-block w-100  "
                  alt="motoblok"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/siemensnx/model5.jpg"
                  class="d-block w-100  "
                  alt="motoblok"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#siemens"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="false"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#siemens"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="false"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div
          class="col-md-6 d-flex align-items-center"
          data-aos="fade-left"
          data-aos-delay="100"
        > 
          <div class="m-4 mt-md-2">
            <p class="text-teal text-small">Simens NX / Part Design/ Assembly Design</p>
            <h3>CAD Parçaları</h3>
            <p class="text-muted">
              Udemy online platformu üzerinden aldığım eğitimle Siemens NX öğrendim. Eğitimimi tamamladıktan sonra pratize etmek adına 6 silindirli bir motor bloğunu fotoğraftan bakarak 3 boyutlu halde çizip parçaları montajladım.  
            </p>
          </div>
        </div>
      </div>
      <!-- Siemens NX Portfolyo -->





      
      
      <!-- Python Şifre Kaydet  -->
      <div class="row g-0">
        <div class="col-md-6">
          <div
            id="pythonsifrekaydet"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#pythonsifrekaydet"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
               
               
            </div>
            <style>
              .carousel-inner img {
                margin: auto;
              }
            </style>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/pythonsifre/sifredepola.png"
                  class="d-block w-100"
                  alt="pistonkafa"
                />
              </div> 
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#pythonsifrekaydet"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#pythonsifrekaydet"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div
          class="col-md-6 d-flex align-items-center"
          data-aos="fade-left"
          data-aos-delay="100"
        >
          <div class="m-4 mt-md-2">
            <p class="text-teal text-small">Python / SQLite</p>
            <h3>Şifre  Kaydedici</h3>
            <p class="text-muted">
              Temel python eğitimimi tamaladıktan sonra <strong>Şifre Kaydedici</strong> ihtiyacım sebebiyle bir program kodladım. Bu program dahilinde bir şifre oluşturabiliyor ya da daha önceden oluşturulmuş şifreleri listeleyebiliyorsunuz. Program 3 sütunda şifreyi kaydediyor. İlk sütunda şifrenin nerede kullanılacağını, ikinci kısmında kullanıcı adını, üçüncü adımda ise şifreyi girerek kaydetme işlemini onaylıyorsunuz. Ve şifre SQLite veritabanında depolanıyor.
            </p>
          </div>
        </div>
      </div>
      <!-- Python Şifre Kaydet   Portfolyo --> 
       
       <!-- Python Şifre Oluştur  -->
       <div class="row g-0">
        <div class="col-md-6">
          <div
            id="sifreolustir"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#sifreolustir"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
               
               
            </div>
            <style>
              .carousel-inner img {
                margin: auto;
              }
            </style>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/pythonsifre/sifreuret.png"
                  class="d-block w-100"
                  alt="pistonkafa"
                />
              </div>
              <!-- <div class="carousel-item">
                <img
                  src="images/pythonsifre/blocking.jpg"
                  class="d-block w-50 h-50"
                  alt="foto"
                />
              </div> -->
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#sifreolustir"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#sifreolustir"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div
          class="col-md-6 d-flex align-items-center"
          data-aos="fade-left"
          data-aos-delay="100"
        >
          <div class="m-4 mt-md-2">
            <p class="text-teal text-small">Python / Random Fonksiyonu </p>
            <h3>Şifre  Oluşturucu</h3>
            <p class="text-muted">
              Bu projede karakter oluşturabilmek için ilk önce şifrede bulunacak karakterleri boşluk bırakmadan bir değer ataması yapılıyor. Ardından kullanıcıdan kaç haneli olacağına dair bilgi alınıp bu bilgiyle random fonksiyonu kullanılarak kullanıcının belirttiği hane kadar for döngüsüyle program çalıştırılıyor. Döngünün sonlanmasından sonra ise <strong>print()</strong> fonksiyonu kullanılarak kullanıcıya oluşturulan şifre iletiliyor.
            </p>
          </div>
        </div>
      </div>
      <!-- Python Şifre Oluştur   Portfolyo --> 
    </div>
  </div>
          <!-- Portfolyo Bitiş -->