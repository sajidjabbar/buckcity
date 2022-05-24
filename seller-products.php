<?php include 'include/dashboard-head.php' ?>
<link rel="stylesheet" href="css/seller-products.css">
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
                    <div class="heading_wrapper mb-3">
                        <h4>Products</h4>

                    </div>
                    <div class="add-upload-wrapper mb-5">
                        <button class="add-products" onclick="location.href='seller-add-product.php'">Add</button>
                        <button class="upload-products"> <img src="img/upload-products.svg" alt=""> Upload</button>
                    </div>
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr class="topbar">
                                    <th scope="col" class="Status">Status</th>
                                    <th scope="col" class="billingname">Product Name</th>
                                    <th scope="col" class="amount">SKU number</th>
                                    <th scope="col" class="Image">Image</th>
                                    <th scope="col" class="shipmentstatus">Date</th>
                                    <th scope="col" class="Price">Price</th>
                                    <th scope="col" class="Stock">Stock Available</th>
                                    <!-- <th scope="col" class="Featured">Featured</th> -->
                                    <!-- <th scope="col" class="Details">Details</th> -->
                                    <!-- <th scope="col" class="Action">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <!-- <td class="Boost"> <button class="btn boost-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter">Boost</button> </td> -->
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <!-- <td class="Boost"> <button class="btn boost-btn">Boost</button> </td> -->
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <!-- <td class="Boost"> <button class="btn boost-btn">Boost</button> </td> -->
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <!-- <td class="Boost"> <button class="btn boost-btn">Boost</button> </td> -->
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <!-- <td class="Boost"> <button class="btn boost-btn">Boost</button> </td> -->
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <!-- <td class="Boost"> <button class="btn boost-btn">Boost</button> </td> -->
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <!-- <td class="Boost"> <button class="btn boost-btn">Boost</button> </td> -->
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
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
<!-- seller home dashboard starts here -->
<?php include 'include/footer.php' ?>