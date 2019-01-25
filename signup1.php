<?php include('header-link.php');?>
<!--Signup area start-->
<section class="sing1-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="sing1-form-bg">
                    <div class="sign1-img">
                        <img src="img/login.png" alt="signup">
                    </div>
                </div>
            </div> <!--Form img end-->
            <div class="col-md-7">
                <div class="sign1-form">
                    <div class="sign1-middle">
                        <div class="sign1-text">
                            <h2>create an account</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="sign1-form-text">
                            <form action="#" method="POST">
                                <input type="text" name="username" id="username" placeholder="Username *" autocomplete="off" required>
                                <input type="email" name="email" id="email" placeholder="Email *" autocomplete="off" required>
                                <input type="password" name="password" id="password" placeholder="Password *" autocomplete="off" required>
                                <input type="checkbox" name="remember" id="remember"> <span><label for="remember">I have read and accept </label><a href="#"> terms and conditions</a></span>
                                <button type="submit" class="login1-btn">sign up</button>
                            </form>
                            <span><i class="fas fa-check-circle"></i> Have an account <a href="login1.php">click here</a></span>
                        </div>
                    </div>
                </div>
            </div> <!--Sign up from start-->
        </div>
    </div>
</section>
<!--Signup area end-->
<?php include('footer-link.php');?>