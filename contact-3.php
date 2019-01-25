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
<!--Contact1 area start-->
<section class="location1-area location2-area location1-area c-title-space">
    <div class="container">
        <div class="row">
            <h2>send us message</h2>
            <div class="col-md-8">
                <div class="contact1-form">
                    <form action="#" method="POST">
                        <input type="text" name="name" id="name" placeholder="Full name*">
                        <input type="email" name="email" id="email" placeholder="Email*">
                        <input type="subject" name="subject" id="subject" placeholder="Subject*">
                        <textarea name="message" id="message" cols="30" rows="20" placeholder="Message*"></textarea>
                        <button type="submit" class="login1-btn">message<i class="fa fa-rocket"></i></button>
                    </form>
                </div>
            </div><!--Contact1 end-->
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location1-text">
                            <i class="fa fa-map-marker"></i>
                            <h3>address</h3>
                            <p>Road-3 Kumarpara Rajshahi</p>
                            <p>Rajshahi-6100 Ghuramara</p>
                        </div>
                    </div><!-- Single location end-->
                    <div class="col-md-12">
                        <div class="location1-text">
                            <i class="fa fa-phone"></i>
                            <h3>phone number</h3>
                            <p>+880-1745507075</p>
                            <p>+880-1745507075</p>
                        </div>
                    </div><!-- Single location end-->
                    <div class="col-md-12">
                        <div class="location1-text">
                            <i class="fa fa-envelope-o"></i>
                            <h3>email</h3>
                            <p>prantok104@gmail.com</p>
                            <p>prantokumar@icloud.com</p>
                        </div>
                    </div><!-- Single location end-->
                </div>
            </div><!--Contact1 end-->
        </div>
    </div>
</section>
<!--contact1 area end-->
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