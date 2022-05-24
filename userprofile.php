<!-- Header Start here -->
<?php include 'include/head.php'?>
<!-- Header End here -->

<!-- Slick Slider -->
<link href="css/userprofile.css" rel="stylesheet">
<!-- Slick Slider -->

<!-- Banner Start here -->
<section class="userprofile-banner universal-banner text-white text-center">
    <div class="container-fluid">
        <h1 class="title">USER PROFILE</h1>
    </div>
    </div>
</section>
<!-- Banner End here -->

<!-- User Profile Section Start Here -->
<section class="user-profile text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="user-imageDv">
                    <div class="img-box">
                        <figure><img src="img/userprofile.png" alt=""></figure>
                    </div>
                    <div class="upload-btn">
                        <button><i class="fa fa-upload" aria-hidden="true"></i> Upload a Photo</button>
                    </div>
                </div>
                <!-- Nav tabs Start Here -->
                <ul class="nav nav-tabs flex-column nav-pills" id="myTab" role="tablist" aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="true">User Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab"
                            aria-controls="offers" aria-selected="false">Placed Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="loyalty-tab" data-toggle="tab" href="#loyalty" role="tab"
                            aria-controls="loyalty" aria-selected="false">Loyalty Owners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cart-tab" data-toggle="tab" href="#cart" role="tab" aria-controls="cart"
                            aria-selected="false">Cart History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab"
                            aria-controls="wishlist" aria-selected="false">My Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="logout-tab" data-toggle="tab" href="#logout" role="tab"
                            aria-controls="wishlist" aria-selected="false">LOGOUT</a>
                    </li>
                </ul>
                <!-- Nav tabs End Here -->
            </div>

            <div class="col-lg-9">
                <!-- Tab Content Start Here -->
                <div class="tab-content">
                    <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="tab-bar">
                            <div class="heading">
                                <h5>User Profile</h5>
                            </div>
                            <div class="edit-btn">
                                <a href="#!">Edit</a>
                            </div>
                        </div>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input type="text" class="form-control" placeholder="Jason" id="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name*</label>
                                        <input type="text" class="form-control" placeholder="Jason" id="lastname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email*</label>
                                        <input type="email" class="form-control" placeholder="name@email.com"
                                            id="email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control" placeholder="123-456-789" id="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label><br>
                                        <select id="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group just-for-d-none">
                                        <button type="submit">SAVE</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tier">Loyalty Tier</label>
                                        <input type="tel" class="form-control" placeholder="Gold" id="tier">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group res-btn">
                                        <button type="submit">SAVE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                        <div class="tab-bar">
                            <div class="heading">
                                <h5>Placed Offers</h5>
                            </div>
                        </div>
                        <table>
                            <tbody class="table-responsive-sm">
                                <tr class="header">
                                    <th class="sno">S.NO</th>
                                    <th class="product">PRODUCT</th>
                                    <th class="bid">BID</th>
                                    <th class="status">ORDER STATUS</th>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">1</td>
                                    <td class="product">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Auction Type: <span class="type">Dutch Auctions</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="bid">£ 60</td>
                                    <td class="status" style="color:#7A7A7A;">PENDING</td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">2</td>
                                    <td class="product">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Auction Type: <span class="type">Dutch Auctions</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="bid">£ 72</td>
                                    <td class="status" style="color:#7A7A7A;">PENDING</td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">3</td>
                                    <td class="product">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Auction Type: <span class="type">Timed Auctions</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="bid">£ 60</td>
                                    <td class="status" style="color:#fff;">ACCEPTED<br>
                                        <p>Expected Delivery on <span class="date">Jun 22</span></p>
                                    </td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">4</td>
                                    <td class="product">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Auction Type: <span class="type">Group Break</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="bid">£ 60</td>
                                    <td class="status" style="color:#7A7A7A;">NOT ACCEPTED</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="loyalty" role="tabpanel" aria-labelledby="loyalty-tab">
                        <div class="tab-bar">
                            <div class="heading">
                                <h5>Loyalty Owners</h5>
                            </div>
                        </div>
                        <table class="table-responsive-sm">
                            <tbody>
                                <tr class="buckeye">
                                    <td class="sno">1</td>
                                    <td class="tier">
                                        <div class="tierDetail">
                                            <div class="img-box">
                                                <figure><img src="img/buckeye.png" alt=""></figure>
                                            </div>
                                            <div class="name">
                                                <h5>Buckeye</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tierDesc">
                                        <p>
                                            REE Buck City Breaker Box with five (5) sealed
                                            hobby packs + any additional packs accumulated
                                            through Tough Break
                                        </p>
                                        <p>
                                            5% website discount for the entire following
                                            month
                                        </p>
                                    </td>
                                </tr>

                                <tr class="buckeye">
                                    <td class="sno">2</td>
                                    <td class="tier">
                                        <div class="tierDetail">
                                            <div class="img-box">
                                                <figure><img src="img/platinium.png" alt=""></figure>
                                            </div>
                                            <div class="name">
                                                <h5>Platinium</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tierDesc">
                                        <p>
                                            FREE Buck City Breaker Box with five (5) sealed
                                            hobby packs + any additional packs accumulated
                                            through Tough Breaks
                                        </p>
                                        <p>
                                            5% website discount for the entire following
                                            month
                                        </p>
                                    </td>
                                </tr>

                                <tr class="buckeye">
                                    <td class="sno">3</td>
                                    <td class="tier">
                                        <div class="tierDetail">
                                            <div class="img-box">
                                                <figure><img src="img/gold.png" alt=""></figure>
                                            </div>
                                            <div class="name">
                                                <h5>Gold</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tierDesc">
                                        <p>
                                            FREE Buck City Breaker Box with two
                                            (2) sealed hobby packs + any additional packs
                                            accumulated through Tough Breaks
                                        </p>
                                    </td>
                                </tr>

                                <tr class="buckeye">
                                    <td class="sno">4</td>
                                    <td class="tier">
                                        <div class="tierDetail">
                                            <div class="img-box">
                                                <figure><img src="img/silver.png" alt=""></figure>
                                            </div>
                                            <div class="name">
                                                <h5>Silver</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tierDesc">
                                        <p>
                                            FREE Autographed Memorabilia Break -
                                            Exclusively for Silver Honors Members!
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="cart" role="tabpanel" aria-labelledby="cart-tab">
                        <div class="tab-bar">
                            <div class="heading">
                                <h5>Cart History</h5>
                            </div>
                        </div>
                        <table class="table-responsive-sm">
                            <tbody>
                                <tr class="header">
                                    <th class="sno">S.NO</th>
                                    <th class="product wd-40">PRODUCT</th>
                                    <th class="quantity wd-15">Quantity</th>
                                    <th class="total wd-15">TOTAL</th>
                                    <th class="reorder wd-20">RE ORDER</th>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">1</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">22 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="quantity wd-15"><input type="number" value="2"></td>
                                    <td class="total wd-15">£ 120</td>
                                    <td class="reorder wd-20"><button>RE ORDER</button></td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">2</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">22 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="quantity wd-15"><input type="number" value="1"></td>
                                    <td class="total wd-15">£ 72</td>
                                    <td class="reorder wd-20"><button>RE ORDER</button></td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">3</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">25 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="quantity wd-15"><input type="number" value="2"></td>
                                    <td class="total wd-15">£ 120</td>
                                    <td class="reorder wd-20"><button>RE ORDER</button></td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">1</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">22 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="quantity wd-15"><input type="number" value="1"></td>
                                    <td class="total wd-15">£ 72</td>
                                    <td class="reorder wd-20"><button>RE ORDER</button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                        <div class="tab-bar">
                            <div class="heading">
                                <h5>My Wishlist</h5>
                            </div>
                        </div>
                        <table class="table-responsive-sm">
                            <tbody>
                                <tr class="header">
                                    <th class="sno">S.NO</th>
                                    <th class="product wd-40">PRODUCT</th>
                                    <th class="details wd-25">Details</th>
                                    <th class="addCart wd-25">Add to Cart</th>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">1</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">22 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details wd-25">View Detail</td>
                                    <td class="addCart wd-25" style="color:#7A7A7A;"><button>ADD TO CART</button></td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">2</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">22 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details wd-25">View Detail</td>
                                    <td class="addCart wd-25" style="color:#7A7A7A;"><button>ADD TO CART</button></td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">3</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">25 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details wd-25">View Detail</td>
                                    <td class="addCart wd-25" style="color:#7A7A7A;"><button>ADD TO CART</button></td>
                                </tr>

                                <tr class="product-items">
                                    <td class="sno">4</td>
                                    <td class="product wd-40">
                                        <div class="product-detail">
                                            <div class="product-img">
                                                <figure><img src="img/proitem.png" alt=""></figure>
                                            </div>
                                            <div class="desc">
                                                <h5 class="name">Lorem Ipsum</h5>
                                                <p>Order Date: <span class="date">27 Jun</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details wd-25">View Detail</td>
                                    <td class="addCart wd-25" style="color:#7A7A7A;"><button>ADD TO CART</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab"></div>
                </div>
                <!-- Tab Content End Here -->
            </div>
        </div>
    </div>
</section>
<!-- User Profile Section End Here -->

<!-- Footer Start here -->
<?php include 'include/footer.php'?>
<!-- Footer Start here -->