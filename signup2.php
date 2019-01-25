<?php include('header-link.php');?>
<!--Signup2 area start-->
<section class="sign2-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="sign2-form">
                    <div class="sign2-form-text">
                       <div class="form-head">
                           <h2>create an account</h2>
                       </div>
                        <form action="#" method="POST">
                            <input type="text" name="uname" id="uname" placeholder="Username*" autocomplete="off" required>
                            <input type="email" name="email" id="email" placeholder="Email*" autocomplete="off" required>
                            <input type="password" name="password" id="password" placeholder="Password*" autocomplete="off" required>
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password*" autocomplete="off" required>
                            <input type="checkbox" name="remember" id="remember"> <span>I have read and accept <a href="#">terms and conditions</a></span><br>
                            <div class="sign2-form-btn">
                                <button type="submit" class="login1-btn sign2-btn">create an account</button>
                                    <span>or</span>
                                <button type="submit" class="login1-btn sign2-btn">sign up with facebook</button>
                            </div>
                        </form>
                        <span><i class="fas fa-check-circle"></i> Have an account <a href="login2.php">click here</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="sign2-bg-img">
                    <div class="sign2-img">
                        <img src="img/man.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Signup2 area end-->
<?php include('footer-link.php');?>