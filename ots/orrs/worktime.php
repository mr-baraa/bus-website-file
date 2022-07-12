
<?php require_once('./config.php'); ?>
 <!DOCTYPE html>

 <head>

 <link rel="icon" href="		https://img.icons8.com/clouds/100/undefined/bus.png"/>
<link rel="stylesheet" href="style/style.css">
<html lang="en" class="" style="height: auto;">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<title>شركة القدس</title>
</head>



<?php require_once('inc/header.php') ?>
  <body class="layout-top-nav layout-fixed layout-navbar-fixed ; background:#A18F74;" style="height: auto;background: #A18F74;" dir="rtl">
  <div class="wrapper">
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
     <?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
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
  <div class="modal fade rounded-0" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body rounded-0">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body rounded-0">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body rounded-0">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div>


 <?php require_once('inc/header.php') ?>

<div class="alert-logo" id="alert-logo">
  <article>
    <img src="./img/logo.png" alt="" srcset="">
    <img id="close" onclick="alertClose()" src="https://img.icons8.com/ios-glyphs/30/edf0f1/delete-sign.png"/>
    <h1>شركة القدس للنقل و السياحة</h1>
    <p>في العام 1960 تأسست شركة باصات القدس في قلب مدينة غزة الشامخة على روابي فلسطين وعلى مسافة لا تتعدى 60 كيلو متر الى الجنوب من مدينة خانيونس .

في ذلك الوقت كان المؤسس عبد الحي شاهين المفعم بالشباب من أوائل رجال الاعمال الذين بادروا للاستثمار في قطاع النقل والمواصلات ، وكان هذا الرجل العصامي متسلحاً بارادة وعزيمة كبيرتين وبحبه الشديد لوطنه وشعبه وبايمانه الراسخ أن لكل مجتهد نصيب وان طريق النجاح تبدأ بخطوة واحدة ،وبالفعل كانت البداية متواضعة حيث انطلقت في باص واحد عمل على الخطوط الداخلية في مدينة خليل الرحمن ، ثم أخذت هذه الشركة تتطور وتنمو يوماً بعد يوم وتمد شبكة خطوطها الى النطاق العربي بعد ان ادخلت باص آخر للعمل على خط الخليل الاردن الكويت .</p>
  </article>
</div>


<style>
  @import url("https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap");

  .navigation {
  height: 70px !important;
  -webkit-backdrop-filter: saturate(180%) blur(20px) !important;
  backdrop-filter: saturate(180%) blur(20px) !important;
  position: absolute !important;
  left: 0 !important;
  top: 0 !important;
  right: 0 !important;
  bottom: auto !important ;
  z-index: 100 !important;
background: transparent !important;
border: none !important;
}
.alert-logo {
  height: 100%;
  width: 100%;
  position: absolute;
  background-color: #ddd;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  z-index: 9999;
  display: none;
  top: 0;
  bottom: 0;
}

.alert-logo article {
  height: 40%;
  width: 50%;
  background-color: #fff;
  height: 74%;
    width: 83%;
    background-color: #fff;
    border-radius: 23px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    align-items: center;
    line-height: 1cm;
    margin-left: auto;
    margin-right: auto;
    padding: 0 50px 0 50px;
    
}

.alert-logo article img:nth-child(1){
  height: 74px;
    width: 83px;
    border-radius: 50%;

}

.alert-logo article img:nth-child(2){
 position: absolute;
 right: 20px;
 top: 20px;
 cursor: pointer;
 transition: all 0.3s ease 0s;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -ms-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  background-color: #222;
  border-radius: 50%;
  padding: 4px;
}

.alert-logo article img:nth-child(2):hover{
filter: drop-shadow(16px 16px 20px red) invert(75%);

}
.sec1 {
  padding: 100px 0 220px 0 !important;
  height: 100%;
  width: 100%;
}

</style>

 <div class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!"></a>
    </div>
    <nav>

    <img id="nav-logo" src="./img/logo.png" alt="" srcset="" onclick="alertOpen()" >
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
       
        <li>
          <a href="http://localhost/orrs/?page=contact_us">تواصل معنا</a>
        </li>
        <li>
       
        </li>
        <li>
          <a href="#mm" >مواعيد العمل</a>
        </li>
        <li>
          <a href="http://localhost/orrs/?page=schedules">حجز حافلة</a>
        </li>
        <li>
          <a href="#!"> البوابات</a>
          <ul class="nav-dropdown">
            <li>

              <a href="http://localhost/orrs/admin/login.php" style="    background: #333 !important;
    color: #edf0f1 !important;
    border-radius: 10px;
    text-align: right;">بوابة الأدمن</a>
            </li>
        
          </ul>
        </li>
        <li>
          <a href="index.php">الرئيسية</a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<section class="sec2"  style="padding-top: 100px;">


<h2 data-aos="fade-down" style="margin-top: 5vh;"
     data-aos-easing="linear"
     data-aos-duration="1500">جدول العمل</h2>
<div class="table-wrapper" dir="rtl">
    <table class="fl-table">
        <thead>
        <tr>
            <th>محطة الذهاب</th>
            <th>وقت الذهاب</th>
            <th>محطة الرجوع</th>
            <th>وقت الرجوع</th>
            <th>رقم الباص</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>غزة</td>
            <td dir="ltr">9 : 00</td>
            <td>العودة</td>
            <td dir="ltr">12 : 00</td>
            <td>33</td>
        </tr>
        <tr>
        <td>خانيونس</td>
            <td dir="ltr">9 : 00</td>
            <td>الرمال</td>
            <td dir="ltr">12 : 00</td>
            <td>14</td>
        </tr>
        <tr>
        <td>رفح</td>
            <td dir="ltr">9 : 00</td>
            <td>بيت حانون</td>
            <td dir="ltr" >1 : 00</td>
            <td>10</td>
        </tr>
        <tr>
        <td>الرمال</td>
            <td dir="ltr">9 : 00</td>
            <td>السلطان</td>
            <td dir="ltr">12 : 00</td>
            <td>23</td>
        </tr>
        <tr>
        <td>رفح البلد</td>
            <td dir="ltr">9 : 00</td>
            <td>تل الهوا</td>
            <td dir="ltr">12 : 00</td>
            <td>69</td>
        </tr>
        <tr>
        <td>الشجاعية</td>
            <td dir="ltr">9 : 00</td>
            <td>المشروع</td>
            <td dir="ltr">12 : 00</td>
            <td>18</td>
        </tr>
        <tr>
        <td>القلعة</td>
            <td dir="ltr">9 : 00</td>
            <td>الكراج الشرقي</td>
            <td dir="ltr" >12 : 00</td>
            <td>74</td>
        </tr>
        <tr>
        <td>الميناء</td>
            <td dir="ltr">9 : 00</td>
            <td>المعبر</td>
            <td dir="ltr">12 : 00</td>
            <td>94</td>
        </tr>
        <tr>
        <td>صلاح الدين</td>
            <td dir="ltr">9 : 00</td>
            <td>العودة</td>
            <td dir="ltr">12 : 00</td>
            <td>75</td>
        </tr>
        <tr>
        <td>جباليا</td>
            <td dir="ltr">9 : 00</td>
            <td>النصيرات</td>
            <td dir="ltr">12 : 00</td>
            <td>36</td>
        </tr>
        <tbody>
    </table>
</div>
</section>



      </div>
      </div>
      


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
