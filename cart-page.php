<?php include('header-link.php');?>
<?php include('head.php');?>
<!--Project breadcum-area start-->
<section class="project-breadcum-area">
    <div  id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="breadcum-area">
                <h1>cart page</h1>
                <span>home / </span><a href="#">cart</a>
            </div>
        </div>
    </div>
</section>
<!--Project breadcum-area end-->
<!--Cart page area start-->
<section class="cart-page-area c-title-space">
    <div class="container">
        <div class="row">
            <div class="cart-page">
                <h3>cart page</h3>
                <table class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>action</th>
                            <th>Image</th>
                            <th>product</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><button class="btn-danger circle"><i class="fa fa-times"></i></button></td>
                            <td><a href="product-details.php"><img src="img/product/product.png" alt="laptop"></a></td>
                            <td><a href="product-details.php">iMac pro</a> </td>
                            <td>$ 1450.00</td>
                            <td>
                               <form action="#" method="POST">
                                   <input type="button" value="-" class="decreaseVal btn-primary">
                                    <input type="text" min="1" max="100" value="1" class="val" disabled>
                                   <input type="button" value="+" class="increaseVal btn-primary">
                                </form>
                            </td>
                            <td>$ 1450.00</td>
                        </tr>
                        <tr>
                            <td><button class="btn-danger"><i class="fa fa-times"></i></button></td>
                            <td><a href="product-details.php"><img src="img/product/product3.png" alt="iPhone-7"></a></td>                    
                            <td><a href="product-details.php">iPhone 7 Plus</a></td>
                            <td>$950.00</td>
                            <td>
                                <form action="#" method="POST">
                                    <input type="button" value="-" class="decreaseVal btn-primary">
                                    <input type="text" min="1" max="100" value="1" class="val" disabled>
                                    <input type="button" value="+" class="increaseVal btn-primary">
                                </form>
                            </td>
                            <td>$ 950.00</td>
                        </tr>
                        <tr>
                            <td><button class="btn-danger"><i class="fa fa-times"></i></button></td>
                            <td><a href="product-details.php"><img src="img/product/product6.png" alt="ipad"></a></td>
                            <td><a href="product-details.php">iPad</a></td>
                            <td>$1050.00</td>
                            <td>
                                <form action="#" method="POST">
                                    <input type="button" value="-" class="decreaseVal btn-primary">
                                    <input type="text" min="1" max="100" value="1" class="val" disabled>
                                    <input type="button" value="+" class="increaseVal btn-primary">
                                </form>
                            </td>
                            <td>$ 1050.00</td>
                        </tr>
                    </tbody>
                </table><!-- End of product-->
                <div class="coupon-add-area">
                    <div class="col-md-6">
                        <div class="coupon">
                            <form action="#" method="POST">
                                <input type="text" name="coupon" id="coupon" placeholder="Add Coupon" autocomplete="off">
                                <button class="btn-coupon">Add coupon</button>
                            </form>
                        </div>
                    </div> <!--End of Coupon-->
                    <div class="col-md-6">
                        <div class="update-cart pull-right">
                            <button class="btn-update">update cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cart page area end-->
<div class="clear"></div>
<!--Subtotal area start-->
<section class="sub-total-area">
    <div class="container">
        <div class="row">
            <div class="cart-calculate">
                <div class="col-md-6">
                    <div class="shiping-code">
                        <h3>calculate shipping</h3>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Zip code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form action="#" method="POST">
                                        <td><input type="text" name="counter" placeholder="Country*" autocomplete="off"></td>
                                        <td class="text-right"><input type="text" name="counter" placeholder="Zip Code*" autocomplete="off"></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td><button class="btn-shiping">shipping</button></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!--End of Shipping-->
                <div class="col-md-6">
                    <div class="sub-total">
                       <h3>cart total </h3>
                        <table class="table table-responsive table-striped">
                           <thead>
                               <tr>
                                   <th>Title</th>
                                   <th>Amount</th>
                               </tr>
                           </thead>
                            <tr>
                                <td>cart subtotal</td>
                                <td class="text-right">$3450.00</td>
                            </tr>
                            <tr>
                                <td>Apply Coupon</td>
                                <td class="text-right">10% ($345.00) </td>
                            </tr>
                            <tr>
                                <td>Shipping cost</td>
                                <td class="text-right">$20.00</td>
                            </tr>
                            <tr>
                                <td>total</td>
                                <td class="text-right">$3125.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right"><a href="check-page.php" class="checkout-btn">checkout</a></td>
                            </tr>
                        </table>
                    </div>
                </div><!-- Subtotal area end-->
            </div>
        </div>
    </div>
</section>
<!--Subtotal area end-->
<?php include('footer.php');?>