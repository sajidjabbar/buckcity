<?php include 'include/dashboard-head.php' ?>
<link rel="stylesheet" href="css/seller-detail.css">
<link rel="stylesheet" href="css/seller-home.css">
<link rel="stylesheet" href="css/dashboard.css">
<!-- seller home dashboard starts here -->
<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="content-wrapper">
                    <div class="dashboard-heading-wrapper">
                        <div class="seller_sidebar">
                            <div class="heading_wrapper">
                                <h4>Seller Dashboard</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisci ng elit</p>
                            </div>
                            <div class="seller_profile">
                                <div class="img_box">
                                    <figure><img src="img/cat12.png" alt=""></figure>
                                </div>
                                <div class="profile_content">
                                    <div class="topbar">
                                        <h4>John Doe</h4>
                                        <ul class="stars">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </ul>
                                    </div>
                                    <p class="type">Seller</p>
                                    <div class="actions_btn">
                                        <a href="#" class="profile">Profile</a>
                                        <span class="spacer">|</span>
                                        <a href="#" class="setting">Settings</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sales_summary">
                                <div class="title">
                                    <h3>Sales Summary</h3>
                                </div>
                                <div class="totals_sales">
                                    <div class="today-sale sales">
                                        <span>Today sales</span>
                                        <h3 class="price">$50</h3>
                                    </div>
                                    <div class="week-sale sales">
                                        <span>Last 7 Days</span>
                                        <h3 class="price">$536</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="order-detail-wrapper">
                    <div class="order-detail-heading-wrapper">
                        <h6>Order #12345 was placed on 5 feb 2022</h6>
                        <h4>Order Detail</h4>
                    </div>
                    <div class="order-table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-head">Product :</td>
                                    <td class="pro-img"><img src="img/Ellipse 49.png" alt=""></td>
                                    <td class="pro-img-2"><img src="img/Ellipse 49.png" alt=""></td>
                                </tr>
                                <tr class="row2">
                                    <td class="pro-name">Product Name :</td>
                                    <td class="pro-name-title">Lorem Ipsum 143</td>
                                    <td class="pro-name-title">Lorem Ipsum 143</td>
                                </tr>
                                <tr class="row2">
                                    <td class="qty-name">Qty</td>
                                    <td class="pro-name-title">1</td>
                                    <td class="pro-name-title">5</td>
                                </tr>
                                <tr class="row2">
                                    <td class="Sub-Total">Sub Total :</td>
                                    <td class="pro-price">$3.00</td>
                                    <td class="pro-price">$ 8.00</td>
                                </tr>
                                <tr class="row2">
                                    <td class="shipping-Total">Shipping</td>
                                    <td></td>
                                    <td class="pro-price">$ 2</td>
                                </tr>
                                <tr class="row2">
                                    <td class="Payment-Total">Payment method</td>
                                    <td></td>
                                    <td class="Bank-transfer">Bank transfer</td>
                                </tr>
                                <tr class="row2">
                                    <td class="Total">Total</td>
                                    <td></td>
                                    <td class="total-price">$ 13.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="button-group">
                        <button class="btn-order">Print Order</button>
                        <button class="btn-order">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- seller home dashboard starts here -->
<?php include 'include/footer.php' ?>