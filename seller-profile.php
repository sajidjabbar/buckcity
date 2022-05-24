<?php include 'include/dashboard-head.php' ?>
<link rel="stylesheet" href="css/seller-profile.css">
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
                <!-- my customer table starts here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="customer-wrapper">
                            <div class="customer-content-wrapper">
                                <h4>My Profile</h4>
                            </div>
                            <div class="customer-table-wrapper">
                                <div class="table-responsive-lg">
                                    <table class="table">
                                        <thead>
                                            <th class="quantity-name-heading"></th>
                                            <th class="Total-name-heaidng"></th>
                                        </thead>
                                        <tbody>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Nane:
                                                </td>
                                                <td class="pro-number f-name">
                                                    John
                                                </td>

                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Last Name:
                                                </td>
                                                <td class="pro-number l-name">
                                                    Doe
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Email:
                                                </td>
                                                <td class="pro-number mail">
                                                    name@email.com
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Phone
                                                </td>
                                                <td class="pro-number phone">
                                                    +01 000 123 456
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Gender
                                                </td>
                                                <td class="pro-number male">
                                                    Male
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    About
                                                </td>
                                                <td class="pro-number">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br> exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Passwrod
                                                </td>
                                                <td class="pro-number">
                                                    <input type="password" value="*******">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="button-group-wrapper">
                                    <button class="edit">Edit</button>
                                    <button class="change-password">Change Password</button>
                                </div>
                            </div>
                        </div>
                        <div class="edit-customer-wrapper">
                            <div class="edit-customer-content-wrapper">
                                <h4>My Profile</h4>
                            </div>
                            <div class="edit-customer-table-wrapper">
                                <div class="table-responsive-lg">
                                    <table class="table">
                                        <thead>
                                            <th class="quantity-name-heading"></th>
                                            <th class="Total-name-heaidng"></th>
                                        </thead>
                                        <tbody>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Nane:
                                                </td>
                                                <td class="pro-number f-name">
                                                    <input type="text" value="John">
                                                </td>

                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Last Name:
                                                </td>
                                                <td class="pro-number l-name">
                                                    <input type="text" value="Doe">
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Email:
                                                </td>
                                                <td class="pro-number mail">
                                                    <input type="email" value="name@email.com">
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Phone
                                                </td>
                                                <td class="pro-number phone">
                                                    <input type="text" value="+01 000 123 456">
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Gender
                                                </td>
                                                <td class="pro-number male">
                                                    <input type="text" value="Male">
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    About
                                                </td>
                                                <td class="pro-number">
                                                    <textarea name="" id="" cols="30" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="button-group-wrapper">
                                    <button class="Save-Changes">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        <div class="change-password-customer-wrapper">
                            <div class="change-password-customer-content-wrapper">
                                <h4>My Profile</h4>
                            </div>
                            <div class="change-password-customer-table-wrapper">
                                <div class="table-responsive-lg">
                                    <table class="table">
                                        <thead>
                                            <th class="quantity-name-heading"></th>
                                            <th class="Total-name-heaidng"></th>
                                        </thead>
                                        <tbody>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Current Password
                                                </td>
                                                <td class="pro-number f-name">
                                                    <input type="password" value="John">
                                                </td>

                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    New Password
                                                </td>
                                                <td class="pro-number l-name">
                                                    <input type="password" value="John">
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="customer-name">
                                                    Confirm Password
                                                </td>
                                                <td class="pro-number mail">
                                                    <input type="password" value="John">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="button-group-wrapper">
                                    <button class="Save-Changes">Save Changes</button>
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