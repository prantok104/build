<?php include('header-link.php');?>
<?php include('head.php');?>
<!--Project breadcum-area start-->
<section class="project-breadcum-area">
    <div  id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="breadcum-area">
                <h1>checkout page</h1>
                <span>home / </span><a href="#">checkout</a>
            </div>
        </div>
    </div>
</section>
<!--Project breadcum-area end-->
<!--Checkout page area start-->
<section class="checkout-page-area c-title-space">
    <div class="container">
        <div class="row">
            <div class="checkout-page">
                <div class="col-md-8">
                    <div class="billing-shiping-area">
                        <div class="coupon-add-area">
                            <div class="coupon">
                                <form action="#" method="POST">
                                    <input type="text" name="coupon" id="coupon" placeholder="Add Coupon" autocomplete="off">
                                    <button class="btn-coupon">Add coupon</button>
                                </form>
                            </div>
                        </div> <!--End Of coupon area-->
                        <div class="billing-area-start">
                            <h3>billing area</h3>
                            <form action="#" method="POST">
                                <input type="text" name="fname" id="fname" placeholder="First Name*" autocomplete="off" class="input-half">
                                <input type="text" name="lname" id="lname" placeholder="Last Name*" autocomplete="off" class="input-half">
                                <input type="text" name="email" id="email" placeholder="Email*" autocomplete="off">
                                <input type="text" name="address1" id="address1" placeholder="Address1*" autocomplete="off" class="input-half">
                                <input type="text" name="address2" id="address2" placeholder="Address2*" autocomplete="off" class="input-half">
                                <input type="text" name="number" id="number" placeholder="Phone Number*" autocomplete="off">
                                <input type="text" name="town" id="town" placeholder="Town/City*" autocomplete="off" class="input-half">
                                <input type="text" name="zip" id="zip" placeholder="Zip Code*" autocomplete="off" class="input-half">
                                <select name="country" id="counter">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh" selected="selected">Bangladesh</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IT">Italy</option>
                                    <option value="JP">Japan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="LY">Libya</option>
                                    <option value="MO">Macao</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="MX">Mexico</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NO">Norway</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="RO">Romania</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SG">Singapore</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TR">Turkey</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </form>
                        </div><!--End of Billing area-->
                        <div class="billing-area-start shipping-area c-title-space">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <form action="#" method="POST">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <p>Another shipping address ?</p>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <input type="text" name="fname" id="fname" placeholder="First Name*" autocomplete="off" class="input-half">
                                                <input type="text" name="lname" id="lname" placeholder="Last Name*" autocomplete="off" class="input-half">
                                                <input type="text" name="email" id="email" placeholder="Email*" autocomplete="off">
                                                <input type="text" name="address1" id="address1" placeholder="Address1*" autocomplete="off" class="input-half">
                                                <input type="text" name="address2" id="address2" placeholder="Address2*" autocomplete="off" class="input-half">
                                                <input type="text" name="number" id="number" placeholder="Phone Number*" autocomplete="off">
                                                <input type="text" name="town" id="town" placeholder="Town/City*" autocomplete="off" class="input-half">
                                                <input type="text" name="zip" id="zip" placeholder="Zip Code*" autocomplete="off" class="input-half">
                                                <select name="country" id="counter">
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Bangladesh" selected="selected">Bangladesh</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="UK">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!--Shipping area start-->
                    </div>
                </div> <!--Billing abd shipping area end-->
                <div class="col-md-4">
                    <div class="payment-area">
                        <div class="order">
                            <h4>your order</h4>
                            <p>iMac Pro <br> color: black </p>
                        </div>
                        <div class="order">
                            <h4>Total</h4>
                            <p>$1450.00</p>
                        </div>
                        <div class="cart-order">
                            <table class="table table-responsive table-striped">
                                <tr>
                                    <td>cart subtotal</td>
                                    <td>$1450.00</td>
                                </tr>
                                <tr>
                                    <td>shipping</td>
                                    <td>$10</td>
                                </tr>
                                <tr>
                                    <td>total</td>
                                    <td>$1460.00</td>
                                </tr>
                            </table>
                            <div class="cart-form">
                                <form action="#" method="POST">
                                    <input type="radio" name="pay" id="bank"> <label for="bank">bank transfer</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    <input type="radio" name="pay" id="credit"> <label for="credit">credit card</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus inventore impedit sequi.</p>
                                    <input type="radio" name="pay" id="paypal"> <label for="paypal">paypal</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus inventore impedit sequi.</p>
                                    <img src="img/paypal.png" alt="paypal"> <br>
                                    <input type="checkbox" name="term" id="term"> <label for="term">I have read and accept</label> <a href="#">term and condition</a>
                                    <button class="cart-btn">place order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Payment-area end-->
            </div>
        </div>
    </div>
</section>
<!--Checkout page area end-->
<!--Map area start-->
<section class="map-area">
    <div id="map"></div>
</section>
<!--Map area end-->
<?php include('footer.php');?>
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