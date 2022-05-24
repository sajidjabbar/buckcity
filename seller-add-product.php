<?php include 'include/dashboard-head.php' ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/seller-add-product.css">
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
                <div class="products_adding">
                    <div class="heading_wrapper">
                        <h3>Add New Products</h3>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="general_info">General Info</label>
                                    <input type="text" class="form-control" id="general_info" placeholder="Product">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="select_category">Select category</label>
                                    <select id="select_category" class="form-control">
                                        <option selected="">Football Souvenirs</option>
                                        <option>Football Souvenirs</option>
                                        <option>Football Souvenirs</option>
                                        <option>Football Souvenirs</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sub_category">Select Sub catagory</label>
                                    <select id="sub_category" class="form-control">
                                        <option selected="">Cards</option>
                                        <option>Cards</option>
                                        <option>Cards</option>
                                        <option>Cards</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="BrandName">Product Name / Title</label>
                                <input type="text" id="BrandName" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                            </div>
                            <div class="col-md-6">
                                <label for="Unit">Manufacturer Name</label>
                                <input type="text" id="Unit" class="form-control" placeholder="dolor sit amet">
                            </div>

                            <hr>
                            <div class="col-md-6">
                                <div class="files_flex">
                                    <div class="custom-file">
                                        <label>Add Pictures</label>
                                        <input type="text" placeholder="Upload pictures" class="form-control">
                                        <input type="file" class="custom-file-input" id="attachments" multiple="" onchange="javascript:updateList()">
                                    </div>
                                    <ul id="fileList" class="file-list"></ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="files_flex">
                                    <div class="custom-file">
                                        <label>Add Thumbnail</label>
                                        <input type="text" placeholder="Upload pictures" class="form-control">
                                        <input type="file" class="custom-file-input" id="attachments-two" multiple="" onchange="javascript:updateListtwo()">
                                    </div>
                                    <ul id="fileList-two" class="file-list"></ul>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="UnitPrice">Unit Price</label>
                                    <input type="number" placeholder="00" class="form-control" id="UnitPrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PurchasePrice">Update Prices</label>
                                    <input type="number" placeholder="00" class="form-control" id="PurchasePrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tax"><span class="colored">Current Stock</span></label>
                                    <input type="number" placeholder="00" class="form-control" id="tax">
                                </div>
                            </div>

                            <hr>
                            <div class="col-md-12">
                                <div class="text-editor">
                                    <label>Product Description</label>
                                    <div id="editor"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="bottom_bar">
                                    <div class="checkbox">
                                        <input type="checkbox" class="form-control" id="forcheck">
                                        <label for="forcheck">I Confirm that the product and it specifications are
                                            correct and same as product</label>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn">Submit</button>
                                        <button class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'include/footer.php' ?>