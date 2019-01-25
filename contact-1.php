<?php include('header-link.php');?>
<?php include('head.php');?>
<!--Project breadcum-area start-->
<section class="project-breadcum-area">
    <div  id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="breadcum-area">
                <h1>contact layout</h1>
                <span>home / </span><a href="#">contact</a>
            </div>
        </div>
    </div>
</section>
<!--Project breadcum-area end-->
<!--Contact3 area start-->
<section class="contact3-area-start c-title-space">
    <div class="container">
        <div class="row">
            <div class="contact3-area">
                <div class="col-md-5">
                    <div class="contact3-bg">
                        <div class="contact3-content">
                            <h4> <i class="fa fa-map-marker"></i> Address</h4>
                            <p>251, Anex tower, main road </p>
                            <p>Anex tower rajshahi</p>
                            <p>Anex tower rajshahi</p>
                        </div> <!--Single contact end-->
                        <div class="contact3-content">
                            <h4><i class="fa fa-phone"></i> Phone number </h4>
                            <p>+99 0123 45 120</p>
                            <p>+88 1712 34 567</p>
                            <p>+88 1712 34 567</p>
                        </div> <!--Single contact end-->
                        <div class="contact3-content">
                            <h4><i class="fa fa-envelope-o"></i> E-mail</h4>
                            <p>info@example.com </p>
                            <p>mail@example.com</p>
                            <p>mail@example.com</p>
                        </div> <!--Single contact end-->
                    </div> 
                </div><!--Contact content end-->
                <div class="col-md-7">
                    <div class="cotact3-form">
                        <h2>get in touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum corporis voluptas sequi sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed perferendis ipsam voluptatibus error illo inventore dolorem ab libero illum dolores esse sequi, doloremque non voluptates adipisci. Dolor, nam necessitatibus beatae!</p>
                        <form action="#" method="POST">
                            <input type="text" name="name" id="name" placeholder="Name*" autocomplete="off" class="input-half">
                            <input type="text" name="email" id="email" placeholder="Email*" autocomplete="off" class="input-half pull-right">
                            <input type="text" name="subject" id="subject" placeholder="subject*" autocomplete="off">
                            <textarea name="mesaage" id="message" cols="30" rows="10" placeholder="Message*"></textarea>
                            <button class="btn btn-message">message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact3 area end-->
<!--Contact2 Map area start-->
<section class="map-area">
    <div id="map"></div>
</section>
<!--Contact2 Map area end-->
<?php include('footer.php');?>
<!--Contact2 Map script-->
<script>
    function initMap(){
        var location ={lat: 24.363589, lng: 88.624135};
        var map = new google.maps.Map(document.getElementById("map"),{
            zoom: 4,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async  defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-MmUNH88-MhjMBIGUstRjsaAq4kpLDsI&callback=initMap"></script>