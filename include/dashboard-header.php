<!-- SearchBox -->
<div class="Search">
    <div class="searchBox">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- SearchBox -->

<!-- Header Start Here -->
<header>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3 col-5">
                <div class="logoDv">
                    <figure><a href="index.php"><img class="img-fluid" src="img/logo.png" alt=""></a></figure>
                </div>
            </div>

            <div class="col-md-6 col-1">
                <div class="navbar">
                    <ul class="menus">
                        <li class="menu-items"><a href="index.php">Home</a></li>
                        <li class="menu-items"><a href="about.php">About</a></li>
                        <li class="menu-items"><a href="shop.php">Shop</a></li>
                        <li class="menu-items"><a href="auction.php">Auction</a></li>
                        <li class="menu-items"><a href="blog.php">Blog</a></li>
                        <li class="menu-items"><a href="#">Forum</a></li>
                        <li class="menu-items"><a href="faqs.php">Faq's</a></li>
                        <li class="menu-items"><a href="faqs.php">market place</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn-icon search-btn">
                        <figure><img src="img/search.png" alt=""></figure>
                    </button>
                    <button type="button" class="btn-icon signin-btn">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn-icon signup-btn">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </button>
                    <!-- <div class="dropdown">
                            <button class="btn btn-icon btn-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="">
                                <figure><img src="img/profile.png" alt=""></figure>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="#">Edit Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                                <a class="dropdown-item" href="#">Login</a>
                            </div>
                        </div> -->
                    <div class="dropdown">
                        <button type="button" class="btn-icon" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <figure><img src="img/cart.png" alt=""></figure>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="cart-item">
                                <div class="product-item">
                                    <div class="pro-img">
                                        <figure><img src="img/pro4.png" alt=""></figure>
                                    </div>
                                    <div class="desc">
                                        <div class="name">
                                            <h6>Lorem Ipsum - <span class="price">£ 65</span></h6>
                                        </div>
                                        <div class="total">
                                            <div class="count">
                                                <h6>1x</h6>
                                            </div>
                                            <div class="price">
                                                <h6>£ 65</h6>
                                            </div>
                                        </div>
                                        <p class="category">
                                            category:<span class="actualcategories">Football Trading Cards</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="delete-item">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="product-item">
                                    <div class="pro-img">
                                        <figure><img src="img/pro3.png" alt=""></figure>
                                    </div>
                                    <div class="desc">
                                        <div class="name">
                                            <h6>Lorem Ipsum - <span class="price">£ 65</span></h6>
                                        </div>
                                        <div class="total">
                                            <div class="count">
                                                <h6>1x</h6>
                                            </div>
                                            <div class="price">
                                                <h6>£ 65</h6>
                                            </div>
                                        </div>
                                        <p class="category">
                                            category:<span class="actualcategories">Football Trading Cards</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="delete-item">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="subtotalDv">
                                <div class="property">
                                    <h6>Subtotal:</h6>
                                </div>
                                <div class="value">
                                    <h6>£ 100</h6>
                                </div>
                            </div>
                            <div class="btns-group">
                                <a href="checkout.php" class="btn">CHECKOUT</a><br>
                                <a href="cart.php" class="btn">VIEW CART</a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-icon canvas">
                        <figure><i class="fa fa-bars" aria-hidden="true"></i></figure>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="nav-bar-wrapper">
                    <ul>
                        <li class="nav-item"><a href="seller-home.php" class="nav-links">Dashboard</a></li>
                        <li class="nav-item"><a href="seller-profile.php" class="nav-links">Manage Profile</a></li>
                        <li class="nav-item"><a href="seller-customer.php" class="nav-links">My Customers</a></li>
                        <li class="nav-item"><a href="seller-orders.php" class="nav-links">Manage Orders</a></li>
                        <li class="nav-item"><a href="seller-products.php" class="nav-links">Manage Products &
                                Inventory</a></li>
                        <li class="nav-item"><a href="inbox.php" class="nav-links">Inbox</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mob-navbar">
        <div class="cancel">
            <button><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <ul class="menus">
            <li class="menu-items"><a href="index.php">Home</a></li>
            <li class="menu-items"><a href="about.php">About</a></li>
            <li class="menu-items"><a href="shop.php">Shop</a></li>
            <li class="menu-items"><a href="auction.php">Auction</a></li>
            <li class="menu-items"><a href="blog.php">Blog</a></li>
            <li class="menu-items"><a href="#">Forum</a></li>
            <li class="menu-items"><a href="faqs.php">Faq's</a></li>
            <li class="menu-items"><a href="faqs.php">market place</a></li>
        </ul>
    </div>
</header>
<!-- Header End Here -->