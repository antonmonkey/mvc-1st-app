<?php include_once ROOT. '/views/alshskbl/header.php'; ?>

<body>
<!--   <div id="page-preloader">
    <span class="spinner">
    </span>
  </div>
  <div id="background-video">
    <video width="100%" autoplay loop>
      <source src="video/animated-pic-2.mp4" type="video/mp4">
    Your browser does not support the video tag.
    </video>
  </div> -->
  <div id="kvad-content">
    <!-- LOGO and Title text -->
    <div id="logo">
      <h1>imagine reality</h1>
      <img src="includes/pics/kvad_logo_medium.png" alt="">
    </div>
    <!-- About(right-top) -->
    <div id="about">
      <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
    </div>
    <div id="about-wrap" class="hide">
      <div id="about-content">  
        If you have any questions, <br>
        please feel free to contact me <br>
        Alexey Ostrovoy <br>
        (097) 309 19 32
      </div>
    </div>
    <!-- Left Bottom Button and menu video-categories -->
    <div id="menu-video-categories">
      <div class="c-hamburger c-hamburger--htra">
        <span></span>
      </div>
      <div id="video-categories">
        <div id="video-categories-list" class="video-categories-buttons cl-effect-5">
          <a href="#"><span id="button-all" data-hover="All" style='background-color:red'>All</span></a>
          <a href="#"><span id="button-production" data-hover="Production" style='background-color:blue'>Production</span></a>
          <a href="#"><span id="button-dop" data-hover="DOP" style='background-color:green'>DOP</span></a>
          <a href="#"><span id="button-aerial" data-hover="Aerial" style='background-color:yellow'>Aerial</span></a>
          <a href="#"><span id="button-edit" data-hover="Edit" style='background-color:violet'>Edit</span></a>
        </div>
        <div id="video-category-text" class="hide">
          <a href="" onclick="return false" name="V">VIDEO CATEGORIES</a>
        </div>
      </div>
    </div>
    <!-- Video priviews -->
    <div id="menu_holder">
      <div id="container">
        <div id="thumbs">
<?php foreach ($videos as $videosItem):?>

          <div class="video-thumb active" data-video-category='<?php echo $videosItem['category'];?>'>
            <img src="/upload/images/<?php echo $videosItem['id'] ?>.jpg">
            <a href="<?php echo $videosItem['url'];?>" class="popup description violet"><p><?php echo $videosItem['name'];?></p></a>
          </div>

<?php endforeach;?>

        </div>
      </div>
    </div>
    <div id="hit_area_top" onmouseover="toggleDown();"></div>
    <div id="hit_area_bottom" onmouseover="toggleUp();"></div>
  </div>

<?php include_once ROOT. '/views/alshskbl/footer.php'; ?>