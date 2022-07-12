<?php require_once('./config.php'); ?>
<!DOCTYPE html>

<head>

  <link rel="icon" href="./img/logo.png" />
  <link rel="stylesheet" href="style/style.css">
  <html lang="en" class="" style="height: auto;">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>شركة القدس</title>
</head>



<?php require_once('inc/header.php') ?>

<body class="layout-top-nav layout-fixed layout-navbar-fixed ; background:#A18F74;"
  style="height: auto; overflow: hidden" dir="rtl">
  <div class="wrapper">
    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
    <?php require_once('inc/topBarNav.php') ?>
    <?php if($_settings->chk_flashdata('success')): ?>
    <script>
    alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
    </script>
    <?php endif;?>
    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper pt-5" style="">
       <?php if($page == "home" || $page == "about_us"): ?>
         <div id="header" class="shadow mb-4">
             <div class="d-flex justify-content-center h-100 w-100 align-items-center flex-column px-3">
                 <h1 class="w-100 text-center site-title px-5"><?php echo $_settings->info('name') ?></h1>
                <h3 class="w-100 text-center px-5 site-subtitle"><?php echo $_settings->info('name') ?></h3> -->
  </div>
  </div>
  <?php endif; ?>
  <!-- Main content -->
  <div class="content ">
    <div class="container">
      <?php 
             if(!file_exists($page.".php") && !is_dir($page)){
                 include '404.html';
             }else{
               if(is_dir($page))
                 include $page.'/index.php';
               else
                 include $page.'.php';

             }
           ?>
    </div>
  </div>
  <!-- /.content -->

  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">

    </div>
  </div>
  </div>


  <?php require_once('inc/header.php') ?>

  <div class="alert-logo" id="alert-logo">
    <article>
      <img src="./img/logo.png" alt="" srcset="">

      <img id="close" onclick="alertClose()" src="https://img.icons8.com/ios-glyphs/30/edf0f1/delete-sign.png" />
      <h1>شركة القدس للنقل و السياحة</h1>
      <p>في العام 1960 تأسست شركة باصات القدس في قلب مدينة غزة الشامخة على روابي فلسطين وعلى مسافة لا تتعدى 60 كيلو متر
        الى الجنوب من مدينة خانيونس .

        في ذلك الوقت كان المؤسس عبد الحي شاهين المفعم بالشباب من أوائل رجال الاعمال الذين بادروا للاستثمار في قطاع النقل
        والمواصلات ، وكان هذا الرجل العصامي متسلحاً بارادة وعزيمة كبيرتين وبحبه الشديد لوطنه وشعبه وبايمانه الراسخ أن
        لكل مجتهد نصيب وان طريق النجاح تبدأ بخطوة واحدة ،وبالفعل كانت البداية متواضعة حيث انطلقت في باص واحد عمل على
        الخطوط الداخلية في مدينة خليل الرحمن ، ثم أخذت هذه الشركة تتطور وتنمو يوماً بعد يوم وتمد شبكة خطوطها الى النطاق
        العربي بعد ان ادخلت باص آخر للعمل على خط الخليل الاردن الكويت .</p>
    </article>
  </div>





  <div class="navigation" id="navigation" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
    <div class="nav-container">
      <div class="brand">
        <a href="#!"></a>
      </div>
      <nav>

        <div class="left-nav">
          <img id="nav-logo" src="./img/logo.png" alt="" srcset="" onclick="alertOpen()">
          <a href='#' onclick="playAudio()">
            <!-- <img id="darkAndlight" src="img/darkmod-removebg-preview.png"   onclick="edit()" alt="" srcset=""> </a> -->
        </div>
        <div class="nav-mobile" style="background: none; width: 10%;"><a id="nav-toggle" href="#!"><span></span></a>
        </div>
        <ul class="nav-list">

          <li>
            <a href="http://localhost/orrs/?page=contact_us">تواصل معنا</a>
          </li>
          <li>

          </li>
          <li>
            <a href="worktime.php">مواعيد العمل</a>
          </li>
          <li>
            <a href="http://localhost/orrs/?page=schedules">حجز حافلة</a>
          </li>
          <li>
            <a href="#!"> البوابات</a>
            <ul class="nav-dropdown">
              <li>

                <a href="http://localhost/orrs/admin/login.php" id="admin-go" style="    background: #333 !important;
   color: #edf0f1 !important;
   border-radius: 10px;
   text-align: right;">بوابة الأدمن</a>
              </li>

            </ul>
          </li>
          <li>
            <a href="index.php" class="active">الرئيسية</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>


  <section class="sec1" id="sec1">
    <div class="sec1cont" id="sec1cont">

      <a href="http://localhost/orrs/?page=schedules">
        <img src="img/bus-ico.png" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"
          class="time-sec1" loading="lazy" alt="" srcset="">
      </a>


      <h1 data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500"
        class="sec1h1" id="sec1h1">أسهل و أسرع طريقة</h1>

      <div class="pr-sec1" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
        data-aos-duration="500">
        <p class="sec1p" id="sec1p">للوصول لوجهتك بأمان <img src="img/3d-fluency-pink-heart.png"
            class="d-fluency-pink-heart" alt="" srcset=""></p>
      </div>

      <div class="sec1-btns" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
        data-aos-duration="500">
        <a href="#" onclick="alertOpen()" id="sec1-f1-btn">
          <button>من نحن ؟</button>
        </a>
        <a href="http://localhost/orrs/?page=schedules" id="sec1-f2-btn">

          <button> حجز حافلة</button>
        </a>
      </div>

    </div>
  </section>

  <audio src="./voice/click.mp3" style="display:none;" id="audio" controls></audio>


  <div class="footer">
    <h1>جميع الحقوق محفوظة © شركة القدس
    </h1>
  </div>



  </div>
  </div>

  <script>
  function playAudio() {
    document.getElementById("audio").play()
  }
  </script>


  <script src="https://kit.fontawesome.com/4824b5dc23.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  AOS.init();
  </script>
  <script>
  (function($) { // Begin jQuery
    $(function() { // DOM ready
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        // Close one dropdown when selecting another
        $('.nav-dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      // Clicking away from dropdown will remove the dropdown class
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
      // Toggle open and close nav styles on click
      $('#nav-toggle').click(function() {
        $('nav ul').slideToggle();
      });
      // Hamburger to X toggle
      $('#nav-toggle').on('click', function() {
        this.classList.toggle('active');
      });
    }); // end DOM ready
  })(jQuery); // end jQuery
  </script>
  <script src="./js/app.js"></script>
</body>

</html>