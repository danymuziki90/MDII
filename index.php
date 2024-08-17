<?php include "header.php"; ?>
<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center ">
  <div class="container">
    <div class="row align-items-center">
      <!-- Welcome Intro Start -->
      <div class="col-12 col-md-7">
        <?php
                        $rr=mysqli_query($con,"SELECT * FROM static");
                        $r = mysqli_fetch_row($rr);
                        $stitle = $r[1];
                        $stext=$r[2];
                    ?>

        <div class="welcome-intro">
          <h1 class="text-white text-center" data-aos="fade-up">« MDI »</h1>
          <p class="text-white my-4  " data-aos="fade-up">
            MDI se vent être une organisation forte et stable capable d’accompagne les femmes, les jeunes filles,
            garçons et enfants dans l’émergence des objectifs de millénaire pour un développement d’ici 2030 et
            l’instauration d’une société stable fondée sur la jouissance de droits de tous les citoyens sans
            distinction du sexe, de statut (rang social) et c’est dans le strict respect de lois en vigueur</p>
          <!-- Buttons -->
          <div class="button-group" data-aos="fade-up">
            <a href="about.php" class="btn btnn btn-bordered-white">Apprendre plus</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5" data-aos="fade-up">
        <!-- Welcome Thumb -->

      </div>
    </div>
  </div>


  <!-- Shape Bottom -->
  <div class="shape shape-bottom ">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
      <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
    </svg>
  </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ======= Get Started Section ======= -->
<section id="get-started" class="get-started section-bg">
  <div class="container">

    <div class="row justify-content-between gy-4">

      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
        <div class="content">
          <h3><span>QUI SOMMES-NOUS ? </span>
          </h3>
          <p>MDI se vent être une organisation forte et stable capable d’accompagne les femmes, les jeunes filles,
            garçons et enfants dans l’émergence des objectifs de millénaire pour un développement d’ici 2030 et
            l’instauration d’une
            société stable fondée sur la jouissance de droits de tous les citoyens sans distinction du sexe, de
            statut
            (rang social) et c’est dans le strict respect de lois en vigueur ; cette vision d’une société stable ne
            serait concrétisée
            que par la promotion et la pratique inconditionnelle d’une justice distributive et réparatrice et
            équitable
            en faveur de toute la communauté en RDC.</p>
          <p>Notre mission est d’aider et promouvoir le bien être Socio-économique et sanitaire, les droits de
            femmes,
            filles et enfants dans le milieu rural et urbain, garantir et combattre les égalité de droit de femmes,
            filles, et enfants
            par rapport à l’équilibre mondial dans le domaine de la protection de l’enfance et l’éducation, femmes,
            paix
            et sécurité alimentaire et entreprenariat agricole, santé communautaire et reproductive, protection des
            espaces
            environnementaux et durable, gouvernance locale et démocratie, la technologie rurale Développement et
            appropriée au profit de la communauté .notre rayon d’action.
          </p>
        </div>
      </div>

      <div class="col-lg-5" data-aos="fade">
        <form action="forms/quote.php" method="post" class="php-email-form">
          <h3>Contactez nous</h3>
          <p></p>
          <div class="row gy-3">

            <div class="col-md-12">
              <input type="text" name="name" class="form-control" placeholder="Nom" required>
            </div>

            <div class="col-md-12 ">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="phone" placeholder="Phone" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Votre message a ete envoyem Merci!</div>

              <button type="submit">Envoyer</button>
            </div>

          </div>
        </form>
      </div>
      <!-- End Quote Form -->

    </div>

  </div>
</section>
<!-- End Get Started Section -->



<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">


    <ul class="nav nav-tabs row  g-2 d-flex">

      <!-- End tab nav item -->
      <ul class="nav-item col-3">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <h4>Vision</h4>
        </a>
      </ul>
      <!-- End tab nav item -->

      <ul class="nav-item col-3">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
          <h4>Mision</h4>
        </a>
      </ul>



    </ul>

    <div class="tab-content">

      <div class="tab-pane" id="tab-1">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1mt-lg-0 d-flex flex-column justify-content-center">
            <p class="fst-italic">
              MDI se vent être une organisation forte et stable capable d’accompagne les femmes, les jeunes filles,
              garçons et enfants dans l’émergence des objectifs de millénaire pour un développement d’ici 2030 et
              l’instauration d’une société stable fondée sur la jouissance de droits de tous les citoyens sans
              distinction du sexe, de statut (rang social) et c’est dans le strict respect de lois en vigueur ;
              cette
              vision d’une société stable ne serait concrétisée que par la promotion et la pratique inconditionnelle
              d’une justice distributive et réparatrice et équitable en faveur de toute la communauté en RDC.
            </p>

          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="assets/img/IMG-20200910-WA0051.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- End tab content item -->


      <div class="tab-pane active show" id="tab-2">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100">
            <p>Sa mission est d’aider et promouvoir le bien être Socio-économique et sanitaire, les droits de
              femmes,
              filles et enfants dans le milieu rural et urbain, garantir et combattre les égalité de droit de
              femmes,
              filles, et enfants par rapport à l’équilibre mondial dans le domaine de la protection de l’enfance et
              l’éducation, femmes, paix et sécurité alimentaire et entreprenariat agricole, santé communautaire et
              reproductive, protection des espaces environnementaux et durable, gouvernance locale et démocratie, la
              technologie rurale Développement et appropriée au profit de la communauté .notre rayon d’action.</p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/IMG-20200910-WA0071.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- End tab content item -->
    </div>
  </div>
</section>
<!-- End Features Section -->

<!-- ***** Promo Area Start ***** -->
<section class="section promo-area pt-5" data-aos="fade-up">
  <div class="containerr  container">


    <div class="card " data-aos="fade-up">
      <img src="./assets/img/about/concept.JPG" alt="" class="headerr">

      <div class=" concept  text-center ">
        <h2>Rayons d'actions</h2>
        <p>Le rayon d’action de MDI couvre la province de Sud-kivu plus particulièrement son intervention est axée
          beaucoup plus dans les milieux ruraux de la plaine de la Ruzizi...
        <div class="button-group pb-2" data-aos="fade-up">
          <a href="about.php" class="btn btn-bordered-white ">Plus</a>
        </div>
        </p>
      </div>
    </div>

    <div class="card " data-aos="fade-up">

      <img src="./assets/img/aaa.jpg" alt="" class="headerr">

      <div class=" concept  text-center">
        <h2>Secteur d'interventiom</h2>
        <p>
          Le respect de règles d’hygiène, la santé sexuelle et reproductive ainsi que le planning familial pour une
          maternité sans risque <br>Améliorer les capacités des femmes et filles...
        <div class="button-group" data-aos="fade-up">
          <a href="about.php" class="btn btn-bordered-white ">Plus</a>
        </div>
        </p>
      </div>
    </div>

    <div class="card" data-aos="fade-up">
      <img src="./assets/img/about/opportinuty.JPG" alt="" class="headerr">

      <div class=" concept  text-center">
        <h2>Perpectives d'avenir</h2>
        <p>
          Devenir une grande structure, forte capable d’accompagner la population, des structures mobilisatrices du
          changement au niveau local provincial et nationale...
        <div class="button-group" data-aos="fade-up">
          <a href="about.php" class="btn btn-bordered-white ">Plus</a>
        </div>
        </p>

      </div>
    </div>
  </div>

</section>



<!-- ***** Blog Area Start ***** -->
<section id="portfolio" class="portfolio-area overflow-hidden ptb_100 pb-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7" data-aos="fade-up">
        <!-- Section Heading -->
        <div class="section-heading text-center">
          <h2>Nos recents articles</h2>
        </div>
      </div>
    </div>
    <!-- Portfolio Items -->
    <div class="row items" data-aos="fade-up">

      <?php
				   $q="SELECT * FROM  blog ORDER BY id DESC LIMIT 3";


                    $r123 = mysqli_query($con,$q);

                    while($ro = mysqli_fetch_array($r123))
                    {

                        $id="$ro[id]";
                        $port_title="$ro[blog_title]";
                        $port_desc="$ro[blog_desc]";
                        $port_detail="$ro[blog_detail]";
                        $ufile="$ro[ufile]";

                        print "
                        <div class='col-12 col-sm-6 col-lg-4 portfolio-item' data-groups='['marketing','development']'>
                        <!-- Single Case Studies -->
                        <div class='single-case-studies'>
                            <!-- Case Studies Thumb -->
                            <a href='portdetail.php?id=$id'>
                                <img src='dashboard/uploads/blog/$ufile' alt=''>
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href='portdetail.php?id=$id' class='case-studies-overlay'>
                                <!-- Overlay Text -->
                                <span class='overlay-text text-center p-3'>
                                    <h3 class='text-white mb-3'>$port_title</h3>
                                    <p class='text-white'>$port_desc.</p>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='portdetail.php?id=$id'>
                                <h3 class='mb-3'>$port_title</h3>
                                <p>$port_desc.</p>
                            </a>
                        </div>
                        </div>
                        ";
                    }
                ?>

    </div>
    <div class="row justify-content-center" data-aos="fade-up">
      <a href="new.php" class="btn  btn-bordered mt-4">Voir Plus</a>
    </div>
  </div>
</section>
<!-- ***** Blog Area End ***** -->

<!-- ***** Price Plan Area Start ***** -->

<!-- ***** Price Plan Area End ***** -->

<!-- ***** Team Area Start ***** -->
<section id="review" class="section review-area bg-overlay pt-2 pb-4 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7">
        <!-- Section Heading -->


        <div class="section-heading  text-center m-4" data-aos="fade-up">
          <h1 class="text-white">Gallerie</h1>
        </div>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="client-reviews owl-carousel" data-aos="fade-up">

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/renfo capa.jpg" alt="" class="cardimg">
          <div class=" conceptt text-center">
            <P>
              Lors de renforcement des capacités sur la sensibilité aux conflits par nos Partenaires
              Alerte International</P>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/remise brevet.jpg" alt="" class=" cardimg">
          <div class=" conceptt  text-center">
            <p>
              Lors de remise de brevet sur la matière de gestion de sensibilité aux conflits à notre animatrice de MDI
            </p>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/echange.jpg" alt="" class="cardimg">
          <div class=" conceptt  text-center">
            <p>
              Lors d'échange de l'équipe MDI sur la matière de l'entrepreneuriat féminine de nos bénéficiaires dans
              la ville de Bukavu</p>
          </div>
        </div>



        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/exercise.jpg" alt="" class="cardimg">
          <div class=" conceptt  text-center">
            <p>Lors des petits exercices en équipe sur la matière de sensibilité aux conflits</p>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/odette cordo mdi.jpg" alt="" class="cardimg">
          <div class=" conceptt text-center">
            <p>
              La représentante du MDI pendant la formation sur la gestion des sensibilités aux conflits
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Review Area End ***** -->


<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
<script src="assets/vendor/aos/aos.js "></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js "></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js "></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js "></script>
<script src="assets/vendor/php-email-form/validate.js "></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js "></script>


<?php include "footer.php"; ?>