<?php include 'include/dashboard-head.php' ?>
<link rel="stylesheet" href="css/seller-customer.css">
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
                <!-- ssearch field starts here -->
                <div class="row pb-4">
                    <div class="col-lg-4">
                        <div class="search-box-wrapper">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Search</label>
                                <div class="col-sm-10">
                                    <input type="search" class="form-control" id="inputPassword" placeholder="Search &amp; Filter">
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
                                        <option value="Default" selected="">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ssearch field ends here -->
                <!-- my customer table starts here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="customer-wrapper">
                            <div class="customer-content-wrapper">
                                <h4>My Customers</h4>
                            </div>
                            <div class="customer-table-wrapper">
                                <div class="table-responsive-lg">
                                    <table class="table">
                                        <thead>
                                            <th class="pro-name-heading">Product Name</th>
                                            <th class="customer-name-heading">Customer Name</th>
                                            <th class="email-name-heading">Email</th>
                                            <th class="con-name-heading">Contact Number</th>
                                            <th class="quantity-name-heading">Quantity</th>
                                            <th class="Total-name-heaidng">Total</th>
                                        </thead>
                                        <tbody>
                                            <tr class="row2">
                                                <td class="pro-name">
                                                    <div class="img-and-name-wrapper">
                                                        <img src="img/pro4.png" alt="">
                                                        <h6>Koizuma Massage Gun </h6>
                                                    </div>
                                                </td>
                                                <td class="customer-name">
                                                    John Doe
                                                </td>
                                                <td class="pro-email">
                                                    <span>Loremipsum</span>
                                                    <span>Loremipsum@gmail.com</span>
                                                </td>
                                                <td class="pro-number">
                                                    +00 123 456 789
                                                </td>
                                                <td class="pro-quality">
                                                    01
                                                </td>
                                                <td class="price">
                                                    $50
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="pro-name">
                                                    <div class="img-and-name-wrapper">
                                                        <img src="img/pro4.png" alt="">
                                                        <h6>Koizuma Massage Gun </h6>
                                                    </div>
                                                </td>
                                                <td class="customer-name">
                                                    John Doe
                                                </td>
                                                <td class="pro-email">
                                                    <span>Loremipsum</span>
                                                    <span>Loremipsum@gmail.com</span>
                                                </td>
                                                <td class="pro-number">
                                                    +00 123 456 789
                                                </td>
                                                <td class="pro-quality">
                                                    01
                                                </td>
                                                <td class="price">
                                                    $50
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="pro-name">
                                                    <div class="img-and-name-wrapper">
                                                        <img src="img/pro4.png" alt="">
                                                        <h6>Koizuma Massage Gun </h6>
                                                    </div>
                                                </td>
                                                <td class="customer-name">
                                                    John Doe
                                                </td>
                                                <td class="pro-email">
                                                    <span>Loremipsum</span>
                                                    <span>Loremipsum@gmail.com</span>
                                                </td>
                                                <td class="pro-number">
                                                    +00 123 456 789
                                                </td>
                                                <td class="pro-quality">
                                                    01
                                                </td>
                                                <td class="price">
                                                    $50
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="pro-name">
                                                    <div class="img-and-name-wrapper">
                                                        <img src="img/pro4.png" alt="">
                                                        <h6>Koizuma Massage Gun </h6>
                                                    </div>
                                                </td>
                                                <td class="customer-name">
                                                    John Doe
                                                </td>
                                                <td class="pro-email">
                                                    <span>Loremipsum</span>
                                                    <span>Loremipsum@gmail.com</span>
                                                </td>
                                                <td class="pro-number">
                                                    +00 123 456 789
                                                </td>
                                                <td class="pro-quality">
                                                    01
                                                </td>
                                                <td class="price">
                                                    $50
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="pro-name">
                                                    <div class="img-and-name-wrapper">
                                                        <img src="img/pro4.png" alt="">
                                                        <h6>Koizuma Massage Gun </h6>
                                                    </div>
                                                </td>
                                                <td class="customer-name">
                                                    John Doe
                                                </td>
                                                <td class="pro-email">
                                                    <span>Loremipsum</span>
                                                    <span>Loremipsum@gmail.com</span>
                                                </td>
                                                <td class="pro-number">
                                                    +00 123 456 789
                                                </td>
                                                <td class="pro-quality">
                                                    01
                                                </td>
                                                <td class="price">
                                                    $50
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- my customer table ends here -->
            </div>
        </div>
    </div>
</section>
<!-- seller home dashboard starts here -->
<?php include 'include/footer.php' ?>