<?php include 'include/dashboard-head.php' ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/seller-orders.css">
<link rel="stylesheet" href="css/seller-home.css">
<link rel="stylesheet" href="css/dashboard.css">
<!-- css file ends here -->
<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
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
            <div class="col-md-9">
                <!-- ssearch field starts here -->
                <div class="row pb-4">
                    <div class="col-lg-4">
                        <div class="search-box-wrapper">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Search</label>
                                <div class="col-sm-10">
                                    <input type="search" class="form-control" id="inputPassword" placeholder="Search & Filter">
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
              
                <div class="sellers_orders">
                    <div class="heading_wrapper">
                        <h4>Orders</h4>
                    </div>
                    <div class="table-resposnive">
                        <table class="table">
                            <tbody>
                                <tr class="topbar">
                                    <th class="orderid">Order ID</th>
                                    <th class="billingname">Billing Name</th>
                                    <th class="amount">Amount</th>
                                    <th class="items">Item</th>
                                    <th class="OrderDate">Order Date</th>
                                    <th class="shipmentstatus">Shipment Status</th>
                                    <th class="details">Details</th>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="date">4-6-2022</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Unshipped <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';" class="view_detail_btn">View Details  </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="date">4-6-2022</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Proccess <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';" class="view_detail_btn">View Details  </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="date">4-6-2022</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Proccess <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';" class="view_detail_btn">View Details  </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="date">4-6-2022</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Proccess <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';" class="view_detail_btn">View Details  </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="date">4-6-2022</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Proccess <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';" class="view_detail_btn">View Details  </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="date">4-6-2022</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Proccess <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';" class="view_detail_btn">View Details  </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="date">4-6-2022</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Proccess <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';" class="view_detail_btn">View Details  </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="paginations_results">
                        <div class="showing_results">
                            <p>Showing <b>7</b> of over 50 <b>results</b></p>
                        </div>
                        <ul class="paginations">
                            <li class="arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                            <li class="pagi">1</li>
                            <li class="pagi">2</li>
                            <li class="pagi">3</li>
                            <li class="pagi">..</li>
                            <li class="pagi">90</li>
                            <li class="arrow right-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'include/footer.php' ?>