<?php include('header-link.php');?>
<?php include('head.php');?>
<!--Project breadcum-area start-->
<section class="project-breadcum-area">
    <div  id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="breadcum-area">
                <h1>protfolio masonary</h1>
                <span>home / </span><a href="#">masonary</a>
            </div>
        </div>
    </div>
</section>
<!--Project breadcum-area end-->
<!--Masonary Title  start-->
<section class="title-pad c-title-area c-title-space">
    <div class="container">
        <div class="row">
            <div class="c-title">
                <img src="img/title.png" alt="title-logo">
                <h1>portfolio <span>masonary</span></h1>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
    </div>
</section>
<!--Masonary title end-->
<!--Masoanry area start-->
<section class="masonary-area-start">
    <div class="container">
        <div class="row">
            <div class="masonary-area">
                <div class="c-feature-btn">
                    <div id="filters" class="button-group filter-button-groups">  
                       <button class="button is-checked fea-btn" data-filter="*">show all</button>
                        <button class="button fea-btn" data-filter=".builder">builder</button>
                        <button class="button fea-btn" data-filter=".carpenter">carpenter</button>
                        <button class="button fea-btn" data-filter=".plumber">plumber</button>
                        <button class="button fea-btn" data-filter=".repairman">repairman</button>
                    </div>
                </div> <!--end of Button area-->
                <div class="grid-masonary">
                    <div class="col-md-4  grid-item carpenter plumber">
                        <div class="single-masonary  ">
                            <img src="img/masonary/label.jpg" alt="label">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                    <div class="col-md-4  grid-item carpenter repairman">
                        <div class="single-masonary">
                            <img src="img/masonary/bag.jpg" alt="bag">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                    <div class="col-md-4  grid-item plumber">
                        <div class="single-masonary">
                            <img src="img/masonary/handbag.jpg" alt="handbag">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                    <div class="col-md-4  grid-item builder carpenter">
                        <div class="single-masonary ">
                            <img src="img/masonary/book.jpg" alt="book">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                    <div class="col-md-4  grid-item repairman">
                        <div class="single-masonary">
                            <img src="img/masonary/bcards1-2.jpg" alt="bcards">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                    <div class="col-md-4  grid-item plumber repairman">
                        <div class="single-masonary">
                            <img src="img/masonary/bottle.jpg" alt="bcards">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                    <div class="col-md-4  grid-item builder carpenter">
                        <div class="single-masonary ">
                            <img src="img/masonary/bcards.jpg" alt="bottle">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                    <div class="col-md-4  grid-item builder plumber repairman">
                        <div class="single-masonary ">
                            <img src="img/masonary/pouch.jpg" alt="pouch">
                            <div class="masonary-content">
                                <a href="blog-single.php"><h3>masonary title</h3></a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div> <!--Single masonary end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Masoanry area end-->
<?php include('footer.php');?>
<script type="text/javascript">
    (function($) {
        "use strict";
          var $grid =  $('.grid-masonary').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-item'
                }
            })
          $('.filter-button-groups').on('click', 'button', function(){
              var filterVar = $(this).attr('data-filter');
              $grid.isotope({ filter: filterVar });
          });
}(jQuery));
</script>