<!-- Header Start here -->
<?php include 'include/head.php'?>
<!-- Header End here -->

<!-- Slick Slider -->
<link href="css/cart.css" rel="stylesheet">
<!-- Slick Slider -->

<!-- Banner Start here -->
<section class="cart-banner universal-banner text-white text-center">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2">
            </div>

            <div class="col-md-8">
                <h1 class="title">CART</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </p>
            </div>

            <div class="col-md-2">
            </div>
        </div>
    </div>
</section>
<!-- Banner End here -->

<!-- table Section -->
<section class="cart-items text-white">
    <div class="container">
        <div class="leaf-one">
            <figure><img src="img/check1.png" alt=""></figure>
        </div>
        <table>
            <tr class="row1">
                <td class="sno">S.No</td>
                <td class="product">Product</td>
                <td class="price">Price</td>
                <td class="qty">Qty</td>
                <td class="total">Total</td>
            </tr>

            <tr class="row2">
                <td class="sno">1</td>
                <td class="product">
                    <div class="table-flex">
                        <div class="image-box">
                            <figure><img src="img/products.png" alt=""></figure>
                        </div>
                        <div class="name">
                            Lorem Ipsum
                        </div>
                    </div>
                </td>
                <td class="price">£ 60</td>
                <td class="qty"><input type="number" value="2"></td>
                <td class="total">£ 120</td>
            </tr>

            <tr class="row3">
                <td class="sno">2</td>
                <td class="product">
                    <div class="table-flex">
                        <div class="image-box">
                            <figure><img src="img/products.png" alt=""></figure>
                        </div>
                        <div class="name">
                            Lorem Ipsum
                        </div>
                    </div>
                </td>
                <td class="price">£ 72</td>
                <td class="qty"><input type="number" value="1"></td>
                <td class="total">£ 72</td>
            </tr>

        </table>
        <div class="update-coupon">
            <button>Update Cart</button>
        </div>

        <div class="cart-total">
            <div class="leaf-two">
                <figure><img src="img/check3.png" alt=""></figure>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-5">

                </div>

                <div class="col-lg-5 col-md-7">
                    <div class="head">
                        <h4 class="title">CART TOTALS</h4>
                    </div>

                    <div class="shipping-methods">

                        <div class="shipping-options">
                            <label class="container">Shipping Method
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                <span class="price">£ 4</span>
                            </label>

                            <label class="container light">Shipping Method 2
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                <span class="price">£ 2</span>
                            </label>
                            <div class="decription">
                                <p>
                                    Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference.
                                </p>
                            </div>

                            <label class="container">Shipping Method 3
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                <span class="price">£ 6</span>
                            </label>
                            <div class="couponDv">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="net-total">
                            <div class="property">
                                <h6>TOTAL</h6>
                            </div>

                            <div class="value">
                                <h6>£ 194</h6>
                            </div>
                        </div>
                    </div>
                    <div class="checkout">
                        <a href="checkout.php">Proceed to Checkout</a>
                    </div>

                </div>
            </div>
            <div class="leaf-three">
                <figure><img src="img/check2.png" alt=""></figure>
            </div>
        </div>

    </div>
</section>
<!-- table Section -->

<!-- Footer Start here -->
<?php include 'include/footer.php'?>
<!-- Footer Start here -->