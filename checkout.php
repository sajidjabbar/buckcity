<!-- Header Start here -->
<?php include 'include/head.php'?>
<!-- Header End here -->

<!-- Slick Slider -->
<link href="css/checkout.css" rel="stylesheet">
<!-- Slick Slider -->

<!-- Banner Start here -->
<section class="checkout-banner universal-banner text-white text-center">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2">
            </div>

            <div class="col-md-8">
                <h1 class="title">checkout</h1>
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

<!-- Checkout css Start Here -->
<section class="checkout text-white">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="address-tab" data-toggle="tab" href="#address" role="tab"
                    aria-controls="address" aria-selected="true">Address</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="item-tab" data-toggle="tab" href="#item" role="tab" aria-controls="item"
                    aria-selected="false">Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab"
                    aria-controls="payment" aria-selected="false">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="confirm-tab" data-toggle="tab" href="#confirm" role="tab"
                    aria-controls="confirm" aria-selected="false">Confirm</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="address" role="tabpanel" aria-labelledby="address-tab">
                <div class="head">
                    <h5>Select Delivery Address</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisci ng elit, sed do eiusmod tempor incididun</p>
                </div>
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <h5 class="heading">Add New Address</h5>
                        <form>
                            <div class="form-group">
                                <label for="country">Select a region</label>
                                <select class="form-control" id="country">
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>UAE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your Full Name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address Line 1</label>
                                <input type="text" class="form-control" placeholder="Enter your Address" id="address">
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <div class="note">
                            <figure><img src="img/note.png" alt=""></figure>
                            <p>Select your region based on the delivery of your item.</p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control" placeholder="+44-123-456-7890"
                                            id="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="postal">Postal Code</label>
                                        <input type="text" class="form-control" placeholder="12345" id="postal">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="form-control" placeholder="Texas" id="state">
                                            <option>Texas</option>
                                            <option>California</option>
                                            <option>Manchester</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">Town / City</label>
                                        <input type="text" class="form-control" placeholder="Houston" id="city">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="add-instruction">
                    <h5 class="heading">Add Delivery Instructions</h5>
                    <form>
                        <div class="form-group">
                            <label for="message">Lorem ipsum ipsum dolor isset amet consectetur ?</label><br>
                            <textarea id="message" placeholder="Define your concern"></textarea>
                        </div>
                    </form>
                    <div class="week-delivery">
                        <h6>Weekend Delivery</h6>
                        <p>Lorem ipsum Dolor isset amet consectetur</p>
                    </div>
                    <div class="add-address">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Use this address as default address
                            </label>
                        </div>

                        <div class="addAddress-btn">
                            <button>Add Address</button>
                        </div>
                    </div>
                </div>

                <div class="saved-address">
                    <div class="heading">
                        <h5>Saved Address</h5>
                    </div>
                    <div class="address-info">
                        <div class="detailed">
                            <div class="countryName">
                                <h5>United States</h5>
                            </div>
                            <div class="addressLine">
                                <p>Lorem ispum 1st Block 1st Cross, Houston | Texas-123456</p>
                            </div>
                            <div class="PhoneState">
                                <li class="phone"><a href="tel:+441234567890">Phone: <span
                                            class="getPhone">+44-123-456-7890</span></a></li>
                                <li class="State"><a href="tel:+441234567890">State: <span
                                            class="statename">Texas</span></a>
                                </li>
                            </div>
                            <div class="instruction">
                                <div class="property">
                                    <p>Delivery Instructions:</p>
                                </div>
                                <div class="value">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore ...</p>
                                </div>
                            </div>
                        </div>

                        <div class="button-group">
                            <button>Add Address</button><br>
                            <button>Edit This Address</button>
                        </div>
                    </div>
                </div>
                <div class="next-btn">
                    <a href="#">Continue</a>
                </div>
            </div>

            <div class="tab-pane fade" id="item" role="tabpanel" aria-labelledby="item-tab">
                <div class="checkout-item">
                    <div class="head">
                        <h5>Choose Delivery Address for each item</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisci ng elit, sed do eiusmod tempor incididun</p>
                    </div>

                    <div class="important-message">
                        <div class="iconDv">
                            <figure><img src="img/danger.png" alt=""></figure>
                        </div>
                        <div class="txtDv">
                            <h5>Imporant Message</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate
                            </p>
                        </div>
                    </div>

                    <table class="table table-responsive">
                        <tbody>
                            <tr class="top-bar">
                                <th class="wd-50">Item</th>
                                <th class="wd-20">Quantity</th>
                                <th class="wd-30">Addresses</th>
                            </tr>

                            <tr class="pro-row">
                                <td class="product-item wd-50">
                                    <div class="product-item">
                                        <div class="img-box">
                                            <figure><img src="img/proitem.png" alt=""></figure>
                                        </div>
                                        <div class="prodesc">
                                            <h5 class="price"><sup>$</sup>120</h5>
                                            <h5 class="name">Lorem Ipsum</h5>
                                            <div class="rating">
                                                <figure><img src="img/rating.png" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="quantity wd-20">
                                    <input type="number" value="2">
                                </td>
                                <td class="address wd-30">
                                    <h6>4th Street Newyork</h6>
                                </td>
                            </tr>

                            <tr class="pro-row">
                                <td class="product-item wd-50">
                                    <div class="product-item">
                                        <div class="img-box">
                                            <figure><img src="img/proitem.png" alt=""></figure>
                                        </div>
                                        <div class="prodesc">
                                            <h5 class="price"><sup>$</sup>72</h5>
                                            <h5 class="name">Lorem Ipsum</h5>
                                            <div class="rating">
                                                <figure><img src="img/rating.png" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="quantity wd-20">
                                    <input type="number" value="1">
                                </td>
                                <td class="address wd-30">
                                    <h6>4th Street Newyork</h6>
                                    <p>Lorem ipsum Dolor isset amet consec tetur amino
                                        amigo aantry zamo limo atom</p>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="next-btn">
                        <a href="#">Continue</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                <div class="checkout-payment">
                    <div class="head">
                        <h5>Select payment method</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisci ng elit, sed do eiusmod tempor incididun</p>
                    </div>

                    <div class="precautions">
                        <div class="txt-with-icon">
                            <div class="txt">
                                <figure><img src="img/precaution.png" alt=""></figure>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitatio
                                </p>
                            </div>
                        </div>
                        <div class="button-group">
                            <button>Learn More</button>
                        </div>
                    </div>
                    <!-- Saved Payment Box -->
                    <div class="saveBoxPay">
                        <h3>Saved payment methods </h3>

                        <div class="savedPayBox">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="visaNumber">
                                        <div class="icoBefore">
                                            <figure>
                                                <svg width="44" height="32" viewBox="0 0 44 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M43.3477 28.4261C43.3477 29.8627 42.2097 31.0272 40.8059 31.0272H2.88944C1.48564 31.0273 0.347656 29.8627 0.347656 28.4261V3.28391C0.347656 1.84738 1.48564 0.682922 2.88944 0.682922H40.8059C42.2098 0.682922 43.3477 1.84746 43.3477 3.28391V28.4261Z"
                                                        fill="white" />
                                                    <path
                                                        d="M9.89245 16.03L8.88279 11.0739C8.7102 10.3904 8.20797 10.1871 7.58044 10.1602H2.95139L2.91016 10.3866C6.51552 11.281 8.9011 13.4385 9.89245 16.03Z"
                                                        fill="#F79F1A" />
                                                    <path
                                                        d="M20.6167 10.2599H17.6258L15.7578 21.4771H18.7438L20.6167 10.2599Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M11.7127 21.4658L16.4166 10.2675H13.2512L10.3249 17.9184L10.0126 16.7632C9.43896 15.3735 7.79959 13.3733 5.875 12.1142L8.5499 21.4696L11.7127 21.4658Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M29.1479 17.8102C29.159 16.5367 28.3599 15.5653 26.6379 14.763C25.5913 14.2448 24.9535 13.8993 24.9611 13.3734C24.9611 12.9088 25.5013 12.4098 26.6717 12.4098C27.6511 12.3944 28.3562 12.6132 28.9077 12.8397L29.178 12.9665L29.5833 10.5364C28.9904 10.3098 28.0637 10.068 26.9046 10.068C23.952 10.068 21.8736 11.5883 21.8548 13.7688C21.836 15.3813 23.3406 16.2796 24.4735 16.8169C25.6364 17.3647 26.0266 17.7152 26.0192 18.2066C26.0117 18.958 25.0924 19.3006 24.2333 19.3006C23.0365 19.3006 22.4024 19.1317 21.4191 18.7125L21.0369 18.5329L20.6172 21.0465C21.3145 21.3584 22.6049 21.631 23.9445 21.6423C27.0844 21.6423 29.1254 20.1413 29.1479 17.8102Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M32.7001 19.7958C33.0415 19.7958 36.0916 19.7996 36.527 19.7996C36.617 20.1902 36.8909 21.481 36.8909 21.481H39.6633L37.2434 10.2715H34.9362C34.2196 10.2715 33.687 10.4711 33.3717 11.2004L28.9336 21.481H32.0739C32.0737 21.481 32.5838 20.0992 32.7001 19.7958ZM34.7484 14.3637C34.7336 14.3943 34.9962 13.7149 35.1463 13.2926L35.3487 14.2599C35.3487 14.2599 35.9192 16.9396 36.0391 17.5001H33.5592C33.8069 16.8553 34.7484 14.3637 34.7484 14.3637Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M40.8059 0.682922H2.88944C1.48564 0.682922 0.347656 1.84737 0.347656 3.2839V5.98337H43.3477V3.2839C43.3477 1.84737 42.2098 0.682922 40.8059 0.682922Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M40.8059 31.0273H2.88944C1.48564 31.0273 0.347656 29.8628 0.347656 28.4263V25.7269H43.3477V28.4263C43.3477 29.8628 42.2098 31.0273 40.8059 31.0273Z"
                                                        fill="#F79F1A" />
                                                </svg>
                                            </figure>
                                        </div>

                                        <div class="visaNum">
                                            <p class="num">****************1297</p>
                                            <p class="debit">Debit Card</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="checkBox">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <span class="check">
                                                    <input type="checkbox" class="form-check-input" value=""
                                                        checked="checked">
                                                    <span class="checkmark"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6 d-flex flex-wrap align-content-center">
                                    <p class="desc">
                                        Amy Anderson
                                    </p>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 d-flex flex-wrap align-content-center p-0">
                                    <p class="desc">
                                        Saved Card Title e.g (Company)
                                    </p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-payment ">Use this Payment Method</button>
                                        <button type="button" class="btn btn-set default">Set as default</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="savedPayBox">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="visaNumber">
                                        <div class="icoBefore">
                                            <figure>
                                                <svg width="44" height="32" viewBox="0 0 44 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M43.3477 28.4261C43.3477 29.8627 42.2097 31.0272 40.8059 31.0272H2.88944C1.48564 31.0273 0.347656 29.8627 0.347656 28.4261V3.28391C0.347656 1.84738 1.48564 0.682922 2.88944 0.682922H40.8059C42.2098 0.682922 43.3477 1.84746 43.3477 3.28391V28.4261Z"
                                                        fill="white" />
                                                    <path
                                                        d="M9.89245 16.03L8.88279 11.0739C8.7102 10.3904 8.20797 10.1871 7.58044 10.1602H2.95139L2.91016 10.3866C6.51552 11.281 8.9011 13.4385 9.89245 16.03Z"
                                                        fill="#F79F1A" />
                                                    <path
                                                        d="M20.6167 10.2599H17.6258L15.7578 21.4771H18.7438L20.6167 10.2599Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M11.7127 21.4658L16.4166 10.2675H13.2512L10.3249 17.9184L10.0126 16.7632C9.43896 15.3735 7.79959 13.3733 5.875 12.1142L8.5499 21.4696L11.7127 21.4658Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M29.1479 17.8102C29.159 16.5367 28.3599 15.5653 26.6379 14.763C25.5913 14.2448 24.9535 13.8993 24.9611 13.3734C24.9611 12.9088 25.5013 12.4098 26.6717 12.4098C27.6511 12.3944 28.3562 12.6132 28.9077 12.8397L29.178 12.9665L29.5833 10.5364C28.9904 10.3098 28.0637 10.068 26.9046 10.068C23.952 10.068 21.8736 11.5883 21.8548 13.7688C21.836 15.3813 23.3406 16.2796 24.4735 16.8169C25.6364 17.3647 26.0266 17.7152 26.0192 18.2066C26.0117 18.958 25.0924 19.3006 24.2333 19.3006C23.0365 19.3006 22.4024 19.1317 21.4191 18.7125L21.0369 18.5329L20.6172 21.0465C21.3145 21.3584 22.6049 21.631 23.9445 21.6423C27.0844 21.6423 29.1254 20.1413 29.1479 17.8102Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M32.7001 19.7958C33.0415 19.7958 36.0916 19.7996 36.527 19.7996C36.617 20.1902 36.8909 21.481 36.8909 21.481H39.6633L37.2434 10.2715H34.9362C34.2196 10.2715 33.687 10.4711 33.3717 11.2004L28.9336 21.481H32.0739C32.0737 21.481 32.5838 20.0992 32.7001 19.7958ZM34.7484 14.3637C34.7336 14.3943 34.9962 13.7149 35.1463 13.2926L35.3487 14.2599C35.3487 14.2599 35.9192 16.9396 36.0391 17.5001H33.5592C33.8069 16.8553 34.7484 14.3637 34.7484 14.3637Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M40.8059 0.682922H2.88944C1.48564 0.682922 0.347656 1.84737 0.347656 3.2839V5.98337H43.3477V3.2839C43.3477 1.84737 42.2098 0.682922 40.8059 0.682922Z"
                                                        fill="#059BBF" />
                                                    <path
                                                        d="M40.8059 31.0273H2.88944C1.48564 31.0273 0.347656 29.8628 0.347656 28.4263V25.7269H43.3477V28.4263C43.3477 29.8628 42.2098 31.0273 40.8059 31.0273Z"
                                                        fill="#F79F1A" />
                                                </svg>
                                            </figure>
                                        </div>

                                        <div class="visaNum">
                                            <p class="num">****************1297</p>
                                            <p class="debit">Debit Card</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="checkBox d-none">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <span class="check">
                                                    <input type="checkbox" class="form-check-input" value="">
                                                </span>

                                                <span class="text">
                                                    Selected as Default
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex flex-wrap align-content-center">
                                    <p class="desc">
                                        Amy Anderson
                                    </p>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex flex-wrap align-content-center p-0">
                                    <p class="desc">
                                        Saved Card Title e.g (Company)
                                    </p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-payment ">Use this Payment Method</button>
                                        <button type="button" class="btn btn-set default">Set as default</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Saved Payment Box -->

                    <!-- Cards -->
                    <div class="creditDebit">
                        <h3>Add Credit or debit card</h3>

                        <div class="row">
                            <div class="col-lg-8">
                                <form action="#" class="debitcard">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Card Number</label>
                                                <input type="text" class="form-control" placeholder="+44-123-456-7890">
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Name on card</label>
                                                <input type="text" class="form-control" placeholder="12345">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CVV</label>
                                                <select type="text" class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Exp Date</label>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select name="day" id="day">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <select name="day" id="day">
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="checkButton">
                                                <div class="checkBox">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <span class="checkBx">
                                                                <input type="checkbox" class="form-check-input"
                                                                    value="">
                                                            </span>

                                                            <span class="text">
                                                                Selected as Default
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="addCard">
                                                    <a href="#" class="btn btn-card">Add Card</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-4">
                                <div class="cardChoice">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <figure>
                                                <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path
                                                            d="M43.6016 34.7221C43.6016 36.1587 42.4636 37.3232 41.0598 37.3232H3.14335C1.73955 37.3233 0.601562 36.1587 0.601562 34.7221V9.57993C0.601562 8.1434 1.73955 6.97894 3.14335 6.97894H41.0598C42.4637 6.97894 43.6016 8.14348 43.6016 9.57993V34.7221Z"
                                                            fill="white" />
                                                        <path
                                                            d="M10.1464 22.326L9.13669 17.3699C8.96411 16.6865 8.46188 16.4831 7.83435 16.4562H3.2053L3.16406 16.6827C6.76943 17.577 9.155 19.7346 10.1464 22.326Z"
                                                            fill="#F79F1A" />
                                                        <path
                                                            d="M20.8706 16.5559H17.8797L16.0117 27.7731H18.9977L20.8706 16.5559Z"
                                                            fill="#059BBF" />
                                                        <path
                                                            d="M11.9666 27.7618L16.6705 16.5635H13.5051L10.5788 24.2144L10.2665 23.0592C9.69287 21.6695 8.05349 19.6693 6.12891 18.4102L8.80381 27.7656L11.9666 27.7618Z"
                                                            fill="#059BBF" />
                                                        <path
                                                            d="M29.4018 24.1062C29.4129 22.8327 28.6138 21.8613 26.8918 21.059C25.8452 20.5408 25.2074 20.1953 25.215 19.6694C25.215 19.2048 25.7552 18.7058 26.9256 18.7058C27.905 18.6904 28.6101 18.9092 29.1616 19.1358L29.4319 19.2625L29.8372 16.8325C29.2443 16.6058 28.3176 16.364 27.1585 16.364C24.2059 16.364 22.1275 17.8843 22.1087 20.0648C22.0899 21.6773 23.5945 22.5756 24.7274 23.1129C25.8903 23.6607 26.2805 24.0112 26.2731 24.5026C26.2656 25.254 25.3463 25.5966 24.4872 25.5966C23.2904 25.5966 22.6564 25.4278 21.673 25.0086L21.2908 24.8289L20.8711 27.3425C21.5684 27.6544 22.8588 27.927 24.1984 27.9383C27.3383 27.9383 29.3793 26.4373 29.4018 24.1062Z"
                                                            fill="#059BBF" />
                                                        <path
                                                            d="M32.954 26.0918C33.2954 26.0918 36.3455 26.0957 36.7809 26.0957C36.8709 26.4863 37.1448 27.777 37.1448 27.777H39.9172L37.4973 16.5675H35.1901C34.4735 16.5675 33.9409 16.7671 33.6257 17.4964L29.1875 27.777H32.3278C32.3276 27.777 32.8377 26.3952 32.954 26.0918ZM35.0023 20.6597C34.9875 20.6904 35.2501 20.0109 35.4002 19.5886L35.6026 20.556C35.6026 20.556 36.1731 23.2357 36.293 23.7961H33.8131C34.0608 23.1513 35.0023 20.6597 35.0023 20.6597Z"
                                                            fill="#059BBF" />
                                                        <path
                                                            d="M41.0598 6.97894H3.14335C1.73955 6.97894 0.601562 8.1434 0.601562 9.57992V12.2794H43.6016V9.57992C43.6016 8.1434 42.4637 6.97894 41.0598 6.97894Z"
                                                            fill="#059BBF" />
                                                        <path
                                                            d="M41.0598 37.3233H3.14335C1.73955 37.3233 0.601562 36.1588 0.601562 34.7224V32.0229H43.6016V34.7224C43.6016 36.1588 42.4637 37.3233 41.0598 37.3233Z"
                                                            fill="#F79F1A" />
                                                        <path opacity="0.15"
                                                            d="M2.40865 34.7221V9.57993C2.40865 8.1434 3.54673 6.97894 4.95061 6.97894H3.14327C1.73955 6.97894 0.601562 8.1434 0.601562 9.57993V34.7222C0.601562 36.1588 1.73955 37.3233 3.14335 37.3233H4.95069C3.54681 37.3233 2.40865 36.1587 2.40865 34.7221Z"
                                                            fill="#202121" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="43" height="44" fill="white"
                                                                transform="translate(0.601562 0.151123)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </figure>
                                        </div>

                                        <div class="col-md-4">
                                            <figure>
                                                <svg width="54" height="34" viewBox="0 0 54 34" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path d="M34.4945 3.71277H20.1641V29.6544H34.4945V3.71277Z"
                                                            fill="#FF5F00" />
                                                        <path
                                                            d="M21.0728 16.6837C21.0728 11.4129 23.5294 6.73789 27.3054 3.71289C24.5303 1.51289 21.0273 0.183716 17.2058 0.183716C8.15259 0.183716 0.828125 7.56288 0.828125 16.6837C0.828125 25.8045 8.15259 33.1837 17.2058 33.1837C21.0273 33.1837 24.5303 31.8545 27.3054 29.6546C23.5294 26.6754 21.0728 21.9545 21.0728 16.6837Z"
                                                            fill="#EB001B" />
                                                        <path
                                                            d="M53.8288 16.6836C53.8288 25.8044 46.5043 33.1836 37.4511 33.1836C33.6297 33.1836 30.1267 31.8544 27.3516 29.6544C31.173 26.6294 33.5842 21.9544 33.5842 16.6836C33.5842 11.4128 31.1275 6.73776 27.3516 3.71276C30.1267 1.51277 33.6297 0.183594 37.4511 0.183594C46.5043 0.183594 53.8288 7.60859 53.8288 16.6836Z"
                                                            fill="#F79E1B" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="53" height="33" fill="white"
                                                                transform="translate(0.828125 0.183594)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </figure>
                                        </div>

                                        <div class="col-md-4">
                                            <figure>
                                                <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path
                                                            d="M44.7109 34.7221C44.7109 36.1587 43.5465 37.3232 42.11 37.3232H3.31184C1.87539 37.3233 0.710938 36.1587 0.710938 34.7221V9.57993C0.710938 8.14348 1.87539 6.97894 3.31184 6.97894H42.11C43.5466 6.97894 44.7109 8.14348 44.7109 9.57993V34.7221Z"
                                                            fill="#306FC5" />
                                                        <path opacity="0.15"
                                                            d="M2.56005 34.7221V9.57993C2.56005 8.14348 3.72468 6.97894 5.16113 6.97894H3.31175C1.87539 6.97894 0.710938 8.1434 0.710938 9.57993V34.7222C0.710938 36.1588 1.87539 37.3233 3.31184 37.3233H5.16121C3.72477 37.3233 2.56005 36.1587 2.56005 34.7221Z"
                                                            fill="#202121" />
                                                        <path
                                                            d="M7.12109 19.1216H8.43577L7.7786 17.4484L7.12109 19.1216Z"
                                                            fill="white" />
                                                        <path
                                                            d="M14.1094 24.7385V25.5155H16.3205V26.3523H14.1094V27.2488H16.5594L17.6947 25.9936L16.6192 24.7385H14.1094Z"
                                                            fill="white" />
                                                        <path
                                                            d="M31.3812 17.4484L30.6641 19.1216H32.0386L31.3812 17.4484Z"
                                                            fill="white" />
                                                        <path
                                                            d="M20.5069 27.7264V24.3203L18.9531 25.9936L20.5069 27.7264Z"
                                                            fill="white" />
                                                        <path
                                                            d="M23.4319 25.2766C23.3721 24.9181 23.1328 24.7385 22.7741 24.7385H21.5195V25.8141H22.8343C23.1927 25.8142 23.4319 25.635 23.4319 25.2766Z"
                                                            fill="white" />
                                                        <path
                                                            d="M27.6145 25.6949C27.7341 25.635 27.794 25.4555 27.794 25.2766C27.8538 25.0378 27.7341 24.9181 27.6145 24.8583C27.4953 24.7985 27.3158 24.7985 27.1368 24.7985H25.9414V25.7547H27.1367C27.3157 25.7547 27.4952 25.7547 27.6145 25.6949Z"
                                                            fill="white" />
                                                        <path
                                                            d="M36.22 15.8947V16.6118L35.8617 15.8947H33.0535V16.6118L32.6947 15.8947H28.8704C28.2131 15.8947 27.6751 16.0143 27.1972 16.2533V15.8947H24.5083V15.9545V16.2533C24.2096 16.0144 23.8511 15.8947 23.373 15.8947H13.7523L13.0947 17.3887L12.4376 15.8947H10.2865H9.39005V16.6118L9.09124 15.8947H9.03143H6.46198L5.26668 18.7032L3.89245 21.7507L3.86719 21.8106H3.89245H6.94005H6.97821L6.99987 21.7507L7.35857 20.8545H8.13536L8.49389 21.8106H11.9594V21.7507V21.0935L12.2584 21.8105H13.9911L14.2898 21.0935V21.7507V21.8106H15.6642H22.5362H22.596V20.2568H22.7158C22.8351 20.2568 22.8351 20.2568 22.8351 20.4362V21.7508H27.1376V21.3922C27.4961 21.5717 28.0336 21.7508 28.7507 21.7508H30.5436L30.9022 20.7949H31.7385L32.0971 21.7508H35.5627V21.1533V20.8546L36.1008 21.7508H36.22H36.28H38.9092V15.8947H36.2202H36.22ZM15.9631 20.9144H15.3655H15.007V20.5561V17.6277L14.9472 17.7648V17.7632L13.5571 20.9144H13.5131H13.1935H12.6764L11.2423 17.6277V20.9144H9.21078L8.79252 20.0181H6.76062L6.34227 20.9144H5.29186L7.05959 16.7314H8.55336L10.2265 20.735V16.7314H10.5849H11.8096L11.8378 16.7913H11.8399L12.5938 18.4322L13.1352 19.6616L13.1544 19.5997L14.3494 16.7315H15.9631V20.9144H15.9631ZM20.0864 17.6277H17.7559V18.4045H20.0266V19.241H17.7559V20.0779H20.0864V20.974H16.7401V16.7315H20.0864V17.6277ZM24.3485 19.1686C24.35 19.17 24.352 19.1709 24.3539 19.1722C24.3765 19.1961 24.3959 19.2201 24.4124 19.243C24.5268 19.3931 24.6194 19.6162 24.624 19.9435C24.6244 19.9492 24.6246 19.9547 24.625 19.9604C24.625 19.9637 24.6256 19.9665 24.6256 19.9699C24.6256 19.9718 24.6254 19.9732 24.6254 19.975C24.6268 20.0079 24.6276 20.0415 24.6276 20.0779V20.9145H23.7315V20.4363C23.7315 20.1973 23.7315 19.8386 23.5519 19.5997C23.4955 19.5432 23.4383 19.506 23.3761 19.4795C23.2866 19.4215 23.1168 19.4206 22.8351 19.4206H21.7592V20.9145H20.7436V16.7315H23.0145C23.5519 16.7315 23.9107 16.7315 24.2095 16.9108C24.5023 17.0866 24.6792 17.3782 24.6859 17.8399C24.6721 18.4758 24.2639 18.8248 23.9704 18.9424C23.9704 18.9424 24.1697 18.9825 24.3485 19.1686ZM26.3607 20.9144H25.3448V16.7314H26.3607V20.9144ZM38.0132 20.9144H36.6983L34.7862 17.7472V20.3764L34.7799 20.3703V20.917H33.7704V20.9145H32.7545L32.3959 20.0182H30.3043L29.9458 20.974H28.8105C28.3327 20.974 27.7348 20.8547 27.3764 20.4962C27.0179 20.1376 26.8388 19.6595 26.8388 18.8828C26.8388 18.2853 26.9582 17.6874 27.3764 17.2095C27.675 16.8507 28.213 16.7315 28.8702 16.7315H29.8265V17.6277H28.8702C28.5117 17.6277 28.3327 17.6873 28.0932 17.8669C27.9143 18.0461 27.7947 18.4045 27.7947 18.8228C27.7947 19.3009 27.8545 19.5997 28.0932 19.8386C28.2729 20.0182 28.5117 20.078 28.8105 20.078H29.2287L30.6029 16.7915H31.2008H32.097L33.7703 20.795V20.5909V19.2412V19.1218V16.7916H35.2641L36.9967 19.7194V16.7916H38.013V20.9146H38.0132V20.9144Z"
                                                            fill="white" />
                                                        <path
                                                            d="M23.4951 18.4736C23.5126 18.455 23.5284 18.4338 23.5418 18.4096C23.5959 18.3239 23.658 18.1696 23.6246 17.9589C23.6232 17.9396 23.6197 17.9217 23.6155 17.9045C23.6144 17.8997 23.6146 17.8954 23.6133 17.8906L23.6127 17.8907C23.583 17.7884 23.5071 17.7255 23.4314 17.6873C23.3116 17.6277 23.1323 17.6277 22.9531 17.6277H21.7578V18.584H22.9531C23.1323 18.584 23.3117 18.584 23.4314 18.5241C23.4493 18.515 23.4653 18.5026 23.4807 18.4886L23.4809 18.4894C23.481 18.4893 23.4871 18.4829 23.4951 18.4736Z"
                                                            fill="white" />
                                                        <path
                                                            d="M41.5391 26.89C41.5391 26.4718 41.4198 26.0534 41.2406 25.7546V23.0657H41.2378V22.8862C41.2378 22.8862 38.7332 22.8862 38.3604 22.8862C37.9878 22.8862 37.5356 23.2447 37.5356 23.2447V22.8862H34.7869C34.3684 22.8862 33.831 23.0058 33.5916 23.2447V22.8862H28.6918V23.0657V23.2446C28.3336 22.946 27.6757 22.8861 27.3772 22.8861H24.1503V23.0657V23.2445C23.8516 22.9459 23.1342 22.886 22.7755 22.886H19.1907L18.3539 23.7825L17.577 22.886H17.3269H16.9198H12.1992V23.0656V23.5376V28.9217H17.4577L18.3217 28.0574L19.0707 28.9217H19.1307H22.1607H22.298H22.3578H22.4173V28.3242V27.5474H22.7163C23.1342 27.5474 23.6722 27.5474 24.0905 27.3679V28.8616V28.9814H26.7795V28.8616V27.4277H26.8987C27.0783 27.4277 27.0783 27.4277 27.0783 27.6069V28.8616V28.9814H35.2048C35.743 28.9814 36.2805 28.8616 36.5792 28.6226V28.8616V28.9814H39.1489C39.6863 28.9814 40.2246 28.9217 40.5831 28.6825C41.1333 28.3524 41.48 27.7682 41.5316 27.0713C41.534 27.0507 41.537 27.03 41.5389 27.0093L41.5354 27.006C41.5376 26.9673 41.5391 26.9291 41.5391 26.89ZM22.7163 26.5316H21.5209V26.7104V27.0691V27.4278V28.0851H19.5568L18.4137 26.7703L18.4097 26.7747L18.3539 26.7104L17.0393 28.0851H13.215V23.9023H17.0991L18.1603 25.0646L18.3834 25.3079L18.4136 25.2766L19.6686 23.9023H22.8356C23.4502 23.9023 24.1385 24.054 24.3993 24.6794C24.4307 24.8032 24.4489 24.9409 24.4489 25.0973C24.4489 26.2924 23.6123 26.5316 22.7163 26.5316ZM28.6918 26.4717C28.8112 26.6505 28.871 26.89 28.871 27.2487V28.085H27.8553V27.5474C27.8553 27.308 27.8553 26.89 27.6758 26.7104C27.5566 26.5316 27.3173 26.5316 26.959 26.5316H25.8835V28.0851H24.8677V23.8424H27.1383C27.616 23.8424 28.0342 23.8424 28.3336 24.0215C28.6321 24.201 28.871 24.4998 28.871 24.9779C28.871 25.635 28.4529 25.9935 28.154 26.1133C28.4529 26.2323 28.6321 26.3522 28.6918 26.4717ZM32.8151 24.7384H30.4843V25.5153H32.7551V26.3521H30.4843V27.1888H32.8151V28.085H29.4688V23.8424H32.8151V24.7384ZM35.3247 28.0851H33.4124V27.1889H35.3247C35.5036 27.1889 35.6234 27.1889 35.7432 27.0692C35.803 27.0093 35.8624 26.89 35.8624 26.7704C35.8624 26.6506 35.803 26.5317 35.7432 26.4718C35.6832 26.4121 35.5635 26.3522 35.3843 26.3522C34.4282 26.2924 33.2928 26.3523 33.2928 25.0378C33.2928 24.4401 33.6514 23.7827 34.727 23.7827H36.6989V24.7984H34.8466C34.6674 24.7984 34.5477 24.7984 34.4281 24.8582C34.3089 24.9181 34.3089 25.0378 34.3089 25.1571C34.3089 25.3365 34.4281 25.3963 34.5476 25.4556C34.6674 25.5155 34.7868 25.5155 34.9061 25.5155H35.444C35.9819 25.5155 36.3404 25.635 36.5793 25.8741C36.7587 26.0534 36.8782 26.3523 36.8782 26.7704C36.8782 27.6665 36.3404 28.0851 35.3247 28.0851ZM40.4636 27.6665C40.2249 27.9058 39.8064 28.0851 39.2086 28.0851H37.2968V27.1889H39.2085C39.3879 27.1889 39.5077 27.1889 39.627 27.0692C39.6866 27.0093 39.7466 26.89 39.7466 26.7704C39.7466 26.6506 39.6866 26.5317 39.627 26.4718C39.5672 26.4121 39.4479 26.3522 39.2685 26.3522C38.3127 26.2924 37.177 26.3523 37.177 25.0378C37.177 24.4699 37.502 23.9568 38.3033 23.8045C38.3992 23.7912 38.5004 23.7827 38.6113 23.7827H40.5833V24.7984H39.2685H38.7906H38.7308C38.5514 24.7984 38.4321 24.7984 38.3127 24.8582C38.2525 24.9181 38.1927 25.0378 38.1927 25.1571C38.1927 25.3365 38.2526 25.3963 38.4321 25.4556C38.5514 25.5155 38.671 25.5155 38.7906 25.5155H38.85H39.3282C39.5894 25.5155 39.7869 25.5477 39.9676 25.6112C40.1331 25.6711 40.6811 25.9162 40.8036 26.556C40.8143 26.623 40.8221 26.693 40.8221 26.7704C40.8221 27.129 40.7025 27.4278 40.4636 27.6665Z"
                                                            fill="white" />
                                                    </g>

                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="44" height="44" fill="white"
                                                                transform="translate(0.710938 0.151123)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </figure>
                                        </div>

                                        <div class="col-md-6">
                                            <figure>
                                                <img src="img/paypal.png" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-6">
                                            <figure>
                                                <img src="img/googleplay.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cards -->

                </div>
            </div>

            <div class="tab-pane fade" id="confirm" role="tabpanel" aria-labelledby="confirm-tab">
                <div class="head">
                    <h5>Confirm information & checkout </h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisci ng elit, sed do eiusmod tempor incididun</p>
                </div>
                <section class="savePayment">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <div class="deliveryDv">
                                    <h4>1 Delivery</h4>

                                    <div class="deliveryBox">
                                        <h5>United States</h5>

                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="inbox">
                                                    <div class="content">
                                                        <p>
                                                            Lorem ispum 1st Block 1st Cross, Houston
                                                        </p>

                                                        <div class="txtdv">
                                                            <div class="col-dv">
                                                                <p>
                                                                    <b>Phone: </b>
                                                                    <span class="txt">+44-123-456-7890</span>
                                                                </p>
                                                            </div>

                                                            <div class="col-dv">
                                                                <p>
                                                                    <b>State: </b>
                                                                    <sapn class="txt">Texas</sapn>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <p>Delivery Instructions:</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="inboxBtn">
                                                    <button class="btn btn-change">
                                                        Change Address
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="saveBoxPay">
                                    <h5>2 Method</h5>

                                    <div class="payMethodBox">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cartTotalDv">
                                                    <div class="col-Dv">
                                                        <div class="imgBox">
                                                            <figure>
                                                                <img src="img/cnfrmcart.png" alt="">
                                                            </figure>

                                                            <figure>
                                                                <span class="itemCount">+</span>
                                                            </figure>
                                                        </div>
                                                    </div>

                                                    <div class="col-dv">
                                                        <h6>
                                                            <b>Cart Sub Total</b> (4 Items)<b>: $50</b>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 promo">
                                                <h6>Gift card or promo code</h6>

                                                <form class="form-inline" action="/action_page.php">
                                                    <input type="number" class="form-control" placeholder="12345"
                                                        id="proCode">
                                                    <button type="submit" class="btn btn-appCode">Apply Code</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="savedPayBox">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="visaNumber">
                                                    <div class="icoBefore">
                                                        <figure>
                                                            <svg width="44" height="32" viewBox="0 0 44 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M43.3477 28.4261C43.3477 29.8627 42.2097 31.0272 40.8059 31.0272H2.88944C1.48564 31.0273 0.347656 29.8627 0.347656 28.4261V3.28391C0.347656 1.84738 1.48564 0.682922 2.88944 0.682922H40.8059C42.2098 0.682922 43.3477 1.84746 43.3477 3.28391V28.4261Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M9.89245 16.03L8.88279 11.0739C8.7102 10.3904 8.20797 10.1871 7.58044 10.1602H2.95139L2.91016 10.3866C6.51552 11.281 8.9011 13.4385 9.89245 16.03Z"
                                                                    fill="#F79F1A" />
                                                                <path
                                                                    d="M20.6167 10.2599H17.6258L15.7578 21.4771H18.7438L20.6167 10.2599Z"
                                                                    fill="#059BBF" />
                                                                <path
                                                                    d="M11.7127 21.4658L16.4166 10.2675H13.2512L10.3249 17.9184L10.0126 16.7632C9.43896 15.3735 7.79959 13.3733 5.875 12.1142L8.5499 21.4696L11.7127 21.4658Z"
                                                                    fill="#059BBF" />
                                                                <path
                                                                    d="M29.1479 17.8102C29.159 16.5367 28.3599 15.5653 26.6379 14.763C25.5913 14.2448 24.9535 13.8993 24.9611 13.3734C24.9611 12.9088 25.5013 12.4098 26.6717 12.4098C27.6511 12.3944 28.3562 12.6132 28.9077 12.8397L29.178 12.9665L29.5833 10.5364C28.9904 10.3098 28.0637 10.068 26.9046 10.068C23.952 10.068 21.8736 11.5883 21.8548 13.7688C21.836 15.3813 23.3406 16.2796 24.4735 16.8169C25.6364 17.3647 26.0266 17.7152 26.0192 18.2066C26.0117 18.958 25.0924 19.3006 24.2333 19.3006C23.0365 19.3006 22.4024 19.1317 21.4191 18.7125L21.0369 18.5329L20.6172 21.0465C21.3145 21.3584 22.6049 21.631 23.9445 21.6423C27.0844 21.6423 29.1254 20.1413 29.1479 17.8102Z"
                                                                    fill="#059BBF" />
                                                                <path
                                                                    d="M32.7001 19.7958C33.0415 19.7958 36.0916 19.7996 36.527 19.7996C36.617 20.1902 36.8909 21.481 36.8909 21.481H39.6633L37.2434 10.2715H34.9362C34.2196 10.2715 33.687 10.4711 33.3717 11.2004L28.9336 21.481H32.0739C32.0737 21.481 32.5838 20.0992 32.7001 19.7958ZM34.7484 14.3637C34.7336 14.3943 34.9962 13.7149 35.1463 13.2926L35.3487 14.2599C35.3487 14.2599 35.9192 16.9396 36.0391 17.5001H33.5592C33.8069 16.8553 34.7484 14.3637 34.7484 14.3637Z"
                                                                    fill="#059BBF" />
                                                                <path
                                                                    d="M40.8059 0.682922H2.88944C1.48564 0.682922 0.347656 1.84737 0.347656 3.2839V5.98337H43.3477V3.2839C43.3477 1.84737 42.2098 0.682922 40.8059 0.682922Z"
                                                                    fill="#059BBF" />
                                                                <path
                                                                    d="M40.8059 31.0273H2.88944C1.48564 31.0273 0.347656 29.8628 0.347656 28.4263V25.7269H43.3477V28.4263C43.3477 29.8628 42.2098 31.0273 40.8059 31.0273Z"
                                                                    fill="#F79F1A" />
                                                            </svg>
                                                        </figure>
                                                    </div>

                                                    <div class="visaNum">
                                                        <p class="num">****************1297</p>
                                                        <p class="debit">Debit Card</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 d-none">
                                                <div class="checkBox">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <span class="check">
                                                                <input type="checkbox" class="form-check-input" value=""
                                                                    checked="checked">
                                                                <span class="checkmark"></span>
                                                            </span>

                                                            <span class="text">
                                                                Selected as Default
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-6 d-flex flex-wrap align-content-center">
                                                <p class="desc">
                                                    Amy Anderson
                                                </p>
                                            </div>

                                            <div
                                                class="col-lg-3 col-md-6 col-6 d-flex flex-wrap align-content-center p-0">
                                                <p class="desc">
                                                    Saved Card Title e.g (Company)
                                                </p>
                                            </div>

                                            <div class="col-lg-6 ">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-paymethod ">Change Payment
                                                        Method</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviewDv">
                                    <h5>3 Review Items & Delivery</h5>

                                    <div class="payMethodBox">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="payMethodDv">
                                                    <h4>
                                                        <b>
                                                            Delivery Date:
                                                            <span class="red">12 July 2021</span>
                                                        </b>

                                                        <span class="small">
                                                            if order placed in next 5 Hours and 20 minutes
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviewChooseBox">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cartBrief">
                                                    <div class="imgBox">
                                                        <figure>
                                                            <img src="img/proitem.png" alt="">
                                                        </figure>
                                                    </div>

                                                    <div class="content">
                                                        <h4>
                                                            <span class="smallTop">$</span>
                                                            <span class="text">120</span>
                                                        </h4>

                                                        <div class="favStars">
                                                            <ul>
                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.989 14.4291L10.6948 14.215L10.4006 14.4291L5.46467 18.0213L7.35358 12.2216L7.46733 11.8723L7.16805 11.6594L2.25987 8.16675H8.27816H8.64236L8.75406 7.8201L10.6948 1.79704L12.6356 7.8201L12.7473 8.16675H13.1115H19.1298L14.2216 11.6594L13.9223 11.8723L14.0361 12.2216L15.925 18.0213L10.989 14.4291Z"
                                                                            stroke="#FFB800"></path>
                                                                    </svg>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="chooseOptionDv">
                                                    <div class="proAddDv">
                                                        <select name="count" id="count">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>

                                                    <div class="chooseBox">
                                                        <h6>Choose Delivery Option</h6>

                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <span class="customRadio">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="optradio" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </span>

                                                                <span class="txt">
                                                                    <b>Option A: </b>
                                                                    Get it on Tomorrow
                                                                    <span class="red">12 july 2021</span>
                                                                </span>
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <span class="customRadio">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="optradio">
                                                                    <span class="checkmark"></span>
                                                                </span>

                                                                <span class="txt">
                                                                    <b>Option B: </b>
                                                                    Get it on Friday
                                                                    <span class="red">14 july 2021</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviewChooseBox">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cartBrief">
                                                    <div class="imgBox">
                                                        <figure>
                                                            <img src="img/proitem.png" alt="">
                                                        </figure>
                                                    </div>

                                                    <div class="content">
                                                        <h4>
                                                            <span class="smallTop">$</span>
                                                            <span class="text">72</span>
                                                        </h4>

                                                        <div class="favStars">
                                                            <ul>
                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.9331 14.8334L17.1164 19.3334L14.7498 12.0667L20.9331 7.66675H13.3498L10.9331 0.166748L8.51644 7.66675H0.933105L7.11644 12.0667L4.74977 19.3334L10.9331 14.8334Z"
                                                                            fill="#FFB800"></path>
                                                                    </svg>
                                                                </li>

                                                                <li>
                                                                    <svg width="21" height="20" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.989 14.4291L10.6948 14.215L10.4006 14.4291L5.46467 18.0213L7.35358 12.2216L7.46733 11.8723L7.16805 11.6594L2.25987 8.16675H8.27816H8.64236L8.75406 7.8201L10.6948 1.79704L12.6356 7.8201L12.7473 8.16675H13.1115H19.1298L14.2216 11.6594L13.9223 11.8723L14.0361 12.2216L15.925 18.0213L10.989 14.4291Z"
                                                                            stroke="#FFB800"></path>
                                                                    </svg>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="chooseOptionDv">
                                                    <div class="proAddDv">
                                                        <select name="count" id="count">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>

                                                    <div class="chooseBox">
                                                        <h6>Choose Delivery Option</h6>

                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <span class="customRadio">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="optradio" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </span>

                                                                <span class="txt">
                                                                    <b>Option A: </b>
                                                                    Get it on Tomorrow
                                                                    <span class="red">12 july 2021</span>
                                                                </span>
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <span class="customRadio">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="optradio">
                                                                    <span class="checkmark"></span>
                                                                </span>

                                                                <span class="txt">
                                                                    <b>Option B: </b>
                                                                    Get it on Friday
                                                                    <span class="red">14 july 2021</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="dvdr">

                                <div class="totalPayDv">
                                    <h4>Total Payment $194</h4>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="totalBox">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="confirmBtn">
                                                <button class="btn btn-confirm">
                                                    Confirm & PLace Order
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Agree to terms &
                                        Conditions
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="orderSumBox">
                                    <h4>Order Summary</h4>

                                    <div class="currencyFlex">
                                        <label>
                                            Seleced Currency:
                                        </label>

                                        <div class="form-group">
                                            <select name="currency" id="currency">
                                                <option value="usd">USD</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="currencyFlex">
                                        <label>
                                            items
                                        </label>

                                        <div class="price">
                                            <h6>$192</h6>
                                        </div>
                                    </div>

                                    <div class="currencyFlex">
                                        <label>
                                            packaging & Shipping
                                        </label>

                                        <div class="price">
                                            <h6>$2</h6>
                                        </div>
                                    </div>

                                    <hr class="dvdr">

                                    <div class="currencyFlex after">
                                        <label class="red">
                                            Order
                                        </label>

                                        <div class="price">
                                            <h6 class="red">$194</h6>
                                        </div>
                                    </div>

                                    <div class="vat">
                                        <p>
                                            VAT included
                                            <span class="blue">See details</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- Checkout css End Here -->

<!-- Confirm Order Popup -->
<section class="added-fixed-window">
    <div class="container">
        <div class="added-succesfully">
            <!-- <button class="cancel"><i class="fa fa-times" aria-hidden="true"></i></button> -->
            <div class="img-box">
                <figure><img src="img/tick.png" alt=""></figure>
            </div>
            <div class="txtDv">
                <p>Your Order Has Been Placed</p>
                <h5 style="color:#1D8107;">Thank You.</h5>
            </div>
        </div>
    </div>
</section>
<!-- Confirm Order Popup -->

<!-- Footer Start here -->
<?php include 'include/footer.php'?>
<!-- Footer Start here -->