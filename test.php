<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/la_global.css">
<!--   <link rel="stylesheet" href="css/la_home.css">
 -->  <link rel="stylesheet" href="css/la_input.css">
  <link rel="stylesheet" href="css/la_external-privilege.css">
  <script src="js/jquery.min.js"></script>
  <style>
.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 15px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 15px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
            transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -25%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 25%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3 {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(25%, 0, 0);
            transform: translate3d(25%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-25%, 0, 0);
            transform: translate3d(-25%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media only screen and (min-width: 768px) {
  .logo {
    margin: 28px;
    float: left;
  }
}
.title {
  padding: 28px;
  display: table-cell;
  position: relative;
  vertical-align: middle;
  text-align: center;
}
</style>
  <script src="js/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans|Bitter" rel="stylesheet" type="text/css">
<div class="container">
  <div class="row header-row">
    <div class="col-md-offset-2 col-md-8 title">
      <img alt="" class="img-responsive logo" src="//static.rtpdesign.co.uk/blog/img/blog-logo.png">
      <h1>Bootstrap 3 Show Many Slide One Carousel</h1>
          <p>Find out more about <a href="https://github.com/rtpHarry/Bootstrap3-ShowManySlideOneCarousel">this code sample</a>.</p>
    </div>    
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="carouselABC">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/0054A6/fff/&amp;text=A" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/002d5a/fff/&amp;text=B" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/d6d6d6/333&amp;text=C" class="img-responsive"></a></div>
          </div>          
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/002040/eeeeee&amp;text=D" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/0054A6/fff/&amp;text=E" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/002d5a/fff/&amp;text=F" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=G" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="http://placehold.it/500/40a1ff/002040&amp;text=H" class="img-responsive"></a></div>
          </div>
        </div>
        <a class="left carousel-control" href="#carouselABC" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#carouselABC" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>  
</div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.dotdotdot.min.js"></script>

<script>

    (function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // http://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());

  </script>
</body>
