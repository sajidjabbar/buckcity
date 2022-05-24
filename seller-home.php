<!-- Header Include -->
<?php include 'include/dashboard-head.php' ?>
<!-- Header Include -->

<!-- Stylesheets -->
<link rel="stylesheet" href="css/seller-home.css">
<link rel="stylesheet" href="css/dashboard.css">
<!-- Stylesheets -->

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
                <!-- ssearch field starts here -->
                <div class="row pb-4">
                    <div class="col-lg-4">
                        <div class="search-box-wrapper">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Search</label>
                                <div class="col-sm-10">
                                    <input type="search" class="form-control" id="inputPassword"
                                        placeholder="Search & Filter">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="sort-by-wrapper">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Sort By</label>
                                <div class="col-sm-9">
                                    <select name="" class="form-control" id="">
                                        <option value="Default" selected>Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ssearch field ends here -->
                <div class="row">
                    <!-- seller dashboard stats starts here -->
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Orders </h6>
                            <div class="stats-and-number">
                                <h2>950</h2>
                                <img src="img/total-orders.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Products</h6>
                            <div class="stats-and-number">
                                <h2>150</h2>
                                <img src="img/total-products.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Customer</h6>
                            <div class="stats-and-number">
                                <h2>45</h2>
                                <img src="img/total-user.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Email Sent</h6>
                            <div class="stats-and-number">
                                <h2>140</h2>
                                <img src="img/total-email.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- seller dashboard stats ends here -->
                </div>
                <div class="row">
                    <div class="col-lg-9">

                        <div class="recent-orders-wrapper">
                            <div class="content-wrapper">
                                <h5>Recent Orders</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Billing Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Items</th>
                                            <th scope="col">Shipment Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="button-wrapper">
                                <a class="text-right" href="#">See All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="rating-wrapper">
                            <div class="content-wrapper">
                                <h4>Customer Reviews</h4>
                                <div class="stars-wrapper">
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i>
                                        </li>

                                        <li><i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <h6>4 out of 5</h6>
                                </div>
                                <div class="progress-bar-wrapper">
                                    <h4>5 Star</h4>
                                    <div class="total-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="total-progre">24%</span>
                                    </div>
                                    <h4>4 Star</h4>
                                    <div class="total-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="total-progre">24%</span>
                                    </div>
                                    <h4>3 Star</h4>
                                    <div class="total-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="total-progre">24%</span>
                                    </div>
                                    <h4>2 Star</h4>
                                    <div class="total-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="total-progre">24%</span>
                                    </div>
                                    <h4>1 Star</h4>
                                    <div class="total-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 10%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="total-progre">24%</span>
                                    </div>
                                    <div class="button-wrapper">
                                        <a class="text-right" href="#">See All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- seller home dashboard starts here -->

<!-- Footer Include -->
<?php include 'include/footer.php' ?>
<!-- Footer Include -->