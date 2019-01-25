<?php include('header-link.php');?>
<!--Login2 area start-->
<section class="login2-area">
    <div class="container">
        <div class="row no-max">
            <div class="col-md-5">
                <div class="login2-bg">
                    <div class="login2-bg-img">
                        <img src="img/login.png" alt="login">
                    </div>
                </div>
            </div>
            <div class="col-md-7">
               <div class="login2-form-text">
                   <div class="login2-middle">
                       <div class="logn2-text">
                           <h2>log in with your account</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       </div>
                       <div class="login2-form">
                           <form action="#" method="POST">
                               <input type="email" name="email"  id="email" placeholder='Email*'  autocomplete="off" required>
                               <input type="text" name="password"  id="password" placeholder='********'  autocomplete="off" required>
                               <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember Me</label>
                               <button type="submit" class="login1-btn">log in</button>
                           </form>
                           <span><i class="fas fa-check-circle"></i>  password recovery. <a href="#">click here</a></span>
                           <span><i class="fas fa-check-circle"></i>  create an account <a href="signup1.php">click here</a></span>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!--Login2 area end-->
<?php include('footer-link.php');?>