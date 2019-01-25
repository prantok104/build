<?php include('header-link.php');?>
<!--Login area start-->
<section class="login1-area">
    <div class="container">
        <div class="row">
            <div class="login">
                <div class="login1-form">
                    <form action="#" method="POST">
                        <label for="email">Email*</label>
                        <input type="email" name="email"  id="email" placeholder='Email*' class="form-control" autocomplete="off" required>
                        <label for="email">password*</label>
                        <input type="text" name="password"  id="password" placeholder='********' class="form-control" autocomplete="off" required>
                        <input type="checkbox" name="remember" id="remember"> <span>remember me</span>
                        <button type="submit" class="login1-btn">log in</button>
                        <span><i class="fas fa-check-circle"></i>  password recovery. <a href="#">click here</a></span>
                        <span><i class="fas fa-check-circle"></i>  create an account <a href="signup2.php">click here</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Login area end-->
<?php include('footer-link.php');?>