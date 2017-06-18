//Page preloader
$(window).on('load', preLoader);
function preLoader() {
  var preloader = $('#page-preloader'),
  spinner = preloader.find('.spinner');
  spinner.delay(2150).fadeOut();
  preloader.delay(2350).fadeOut('slow');
}

// Show about
$("#about").on( "click", showAbout);
function showAbout() {
  $('#about-wrap').toggleClass("hide");
  $(this).toggleClass("on");
  $("#about-content").stop().fadeToggle('slow')
}


// Videos previews slide
var containerWidth, sliderWidth, thumb;
containerWidth = $('#container').innerWidth();
thumb = $('#thumbs');
sliderWidth = thumb.outerWidth();
  $(function() {
  $('#thumbs').mousemove(function(e)
  {
  thumb.css({left: ((containerWidth - sliderWidth)*((e.pageX / containerWidth).toFixed(3))).toFixed(1) +"px" });
  });
  });


//Humburger menu animation
(function() {
  var toggles = document.querySelectorAll(".c-hamburger");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();

// Show video categories
var videoCategoriesText = $("#video-category-text");
var videoCategories = $("#video-categories");
var hamburgerMenu = $('.c-hamburger');

function showVideoCategories() {
  $("#video-categories-list").removeClass('fadeOutDown').addClass('show animated fadeInUp');toggleUp();
};

function hideVideoCategories() {
  $("#video-categories-list").removeClass('fadeOutDown').addClass("show animated fadeOutDown");toggleUp();
};

function showVideoCategoryText() {
  var element = $('#video-category-text');
  element.toggleClass('hide').toggleClass('inline-block animated fadeIn');
  $('#video-categories-list').removeClass('inline-block');
};

videoCategoriesText.on('mouseover', showVideoCategories);
videoCategories.on('mouseleave', hideVideoCategories);
hamburgerMenu.on('click', showVideoCategoryText);

//Filter for video categories
var thumbs = document.getElementById('thumbs');

function hasClass(ele, cls) {
    return ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(ele, cls) {
    if (!this.hasClass(ele, cls)) ele.className += " " + cls;
}

function removeClass(ele, cls) {
    if (hasClass(ele, cls)) {
        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
        ele.className = ele.className.replace(reg, ' ');
    }
}

function replaceClass(ele, oldClass, newClass){
    if(hasClass(ele, oldClass)){
        removeClass(ele, oldClass);
        addClass(ele, newClass);
    }
    return;
}

function activateAll() { 
  for (i = 0; i < thumbs.children.length; i++) {
    replaceClass(thumbs.children[i],'hide', 'active animated fadeIn');
 };
 sliderWidth = thumb.outerWidth();thumb.css({left: 0}); //Reset slider width
};


function categoryFilter(categoryName) {
  activateAll();
  for (i = 0; i < thumbs.children.length; i++) {
      var thumbCategoryName = thumbs.children[i].dataset.videoCategory;
      if (thumbCategoryName.indexOf(categoryName) + 1) {
      replaceClass(thumbs.children[i],'active', 'active animated fadeIn');
      console.log('This thumb-' + i + ' is true for this condition');
    } else {
      replaceClass(thumbs.children[i],'active', 'hide');
      console.log('This thumb-' + i + ' is false for this condition');
    }
  sliderWidth = thumb.outerWidth();thumb.css({left: 0}); //Reset slider width
  };
  console.log('VFX thumbs ACTIVATED! Yeehh!');
};


var allCategory = document.getElementById('button-all');
var productionCategory = document.getElementById('button-production');
var dopCategory = document.getElementById('button-dop');
var aerialCategory = document.getElementById('button-aerial');
var editCategory = document.getElementById('button-edit');

allCategory.addEventListener('click', function() {
  activateAll()
});
productionCategory.addEventListener('click', function() {
  categoryFilter('production');
});

dopCategory.addEventListener('click', function() {
  categoryFilter('dop');
});

aerialCategory.addEventListener('click', function() {
  categoryFilter('aerial');
});

editCategory.addEventListener('click', function() {
  categoryFilter('edit');
});


// Show videos by YoutubePopUp plugin
jQuery(function(){
        jQuery("a.popup").YouTubePopUp();
    });