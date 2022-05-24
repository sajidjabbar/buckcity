<!-- Header Start here -->
<?php include 'include/head.php'?>
<!-- Header End here -->

<!-- Slick Slider -->
<link href="css/forum.css" rel="stylesheet">
<!-- Slick Slider -->

<!-- Banner Start here -->
<section class="forum-banner universal-banner text-white text-center">
    <div class="container-fluid">
        <h1 class="title">Forum</h1>
    </div>
</section>
<!-- Banner End here -->

<!-- Forum Sec Start Here -->
<section class="forum_sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="messages box">
                    <div class="title">
                        <h4>Select Category</h4>
                    </div>
                    <ul class="texts">
                        <li class="active"><a href="#">Autographs</a></li>
                        <li><a href="#">Posters, pennants & rosettes</a></li>
                        <li><a href="#">Football tickets</a></li>
                        <li><a href="#">Football shirts, caps & scarves</a></li>
                        <li><a href="#">Team sheets</a></li>
                        <li><a href="#">Badges</a></li>
                        <li><a href="#">Books, cards & photos</a></li>
                        <li><a href="#">Gift ideas</a></li>
                        <li><a href="#">Medals & presentations</a></li>
                        <li><a href="#">Rare items (directors box)</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="forum_posts">
                    <div class="write-post shadow_box pb-2">
                        <div class="write_box">
                            <div class="user_img">
                                <figure><img src="img/user.png" class="img-fluid"></figure>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="What's on your mind?" class="form-control">
                                <div class="files_flex">
                                    <div class="custom-file">
                                        <label for="attachments"><img src="img/attachments.png"
                                                class="img-fluid"></label>
                                        <input type="file" class="custom-file-input" id="attachments" multiple=""
                                            onchange="javascript:updateList()">
                                    </div>
                                </div>
                                <button class="btn" type="submit">Post Now</button>
                            </div>
                        </div>
                        <ul id="fileList" class="file-list"></ul>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        Edit
                                        Post </a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide From Other</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                        Delete Post</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <div class="user-details">
                            <div class="img_box">
                                <figure><img src="img/user1.png" class="img-fluid"></figure>
                            </div>
                            <div class="details">
                                <h5 class="name">Terri Wilkes <span class="others">is with <span class="name">Kristin
                                            Moran</span> and 2 others</span></h5>
                                <!-- <p class="times_ago">Posted 3 Hours Ago</p> -->
                            </div>
                        </div>
                        <div class="post-text">
                            <p>
                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                            </p>
                        </div>
                        <div class="post_img">
                            <figure><img src="img/post-img.png" class="img-fluid"></figure>
                        </div>
                        <div class="bottom-group">
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="post-actions">
                                        <div class="liked action">
                                            <label class="action_container">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark">
                                                    <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                </span>
                                            </label>
                                        </div>
                                        <!-- <div class="dislike action">
                                            <label class="action_container">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark">
                                                    <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                        Dislike
                                                    </p>
                                                </span>
                                            </label>
                                        </div> -->
                                        <div class="dislike action">
                                            <button class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                Comment</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="porgerss_Dv">
                                        <div class="total-likes totals mr-5">
                                            <div class="images">
                                                <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                <figure><img src="img/like3.png" class="img-fluid"></figure>
                                            </div>
                                            <p>205+ Likes</p>
                                        </div>
                                        <div class="total-likes totals">
                                            <div class="images">
                                                <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                <figure><img src="img/like3.png" class="img-fluid"></figure>
                                            </div>
                                            <p>250 Views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="write-comment shadow_box pb-2">
                            <div class="write_box">
                                <div class="user_img">
                                    <figure><img src="img/user.png" class="img-fluid"></figure>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="What's on your mind?" class="form-control">
                                    <button class="btn" type="submit"><img src="img/send.png"
                                            class="img-fluid"></button>
                                </div>
                            </div>
                            <ul id="fileList" class="file-list"></ul>
                        </div>
                        <div class="all_comments">
                            <div class="comment_box">
                                <div class="user_img">
                                    <figure><img src="img/user.png" class="img-fluid"></figure>
                                </div>
                                <div class="content_dv">
                                    <div class="inner_content">
                                        <div class="topbar">
                                            <h4 class="title">Jason Williams</h4>
                                            <p class="time_ago">4h ago</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" class="rply">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="replay_dv">
                                <div class="comment_box">
                                    <div class="user_img">
                                        <figure><img src="img/rply1.png" class="img-fluid"></figure>
                                    </div>
                                    <div class="content_dv">
                                        <div class="inner_content">
                                            <div class="topbar">
                                                <h4 class="title">Mason Miller</h4>
                                                <p class="time_ago">4h ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" class="rply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_box">
                                    <div class="user_img">
                                        <figure><img src="img/rply1.png" class="img-fluid"></figure>
                                    </div>
                                    <div class="content_dv">
                                        <div class="inner_content">
                                            <div class="topbar">
                                                <h4 class="title">Mason Miller</h4>
                                                <p class="time_ago">4h ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" class="rply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_box">
                                <div class="user_img">
                                    <figure><img src="img/user.png" class="img-fluid"></figure>
                                </div>
                                <div class="content_dv">
                                    <div class="inner_content">
                                        <div class="topbar">
                                            <h4 class="title">Jason Williams</h4>
                                            <p class="time_ago">4h ago</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" class="rply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-previous">
                            <a href="#" class="comment">View previous comments</a>
                        </div>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        Edit
                                        Post </a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide From Other</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                        Delete Post</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <div class="user-details">
                            <div class="img_box">
                                <figure><img src="img/user2.png" class="img-fluid"></figure>
                            </div>
                            <div class="details">
                                <h5 class="name">Terri Wilkes <span class="others">is with <span class="name">Kristin
                                            Moran</span> and 2 others</span></h5>
                                <!-- <p class="times_ago">Posted 3 Hours Ago</p> -->
                            </div>
                        </div>
                        <div class="post-text">
                            <p>
                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                            </p>
                        </div>
                        <div class="post_img">
                            <figure><img src="img/post-img.png" class="img-fluid"></figure>
                        </div>
                        <div class="bottom-group">
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="post-actions">
                                        <div class="liked action">
                                            <label class="action_container">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark">
                                                    <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                </span>
                                            </label>
                                        </div>
                                        <!-- <div class="dislike action">
                                            <label class="action_container">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark">
                                                    <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                        Dislike
                                                    </p>
                                                </span>
                                            </label>
                                        </div> -->
                                        <div class="dislike action">
                                            <button class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                Comment</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="porgerss_Dv">
                                        <div class="total-likes totals mr-5">
                                            <div class="images">
                                                <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                <figure><img src="img/like3.png" class="img-fluid"></figure>
                                            </div>
                                            <p>205+ Likes</p>
                                        </div>
                                        <div class="total-likes totals">
                                            <div class="images">
                                                <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                <figure><img src="img/like3.png" class="img-fluid"></figure>
                                            </div>
                                            <p>250 Views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="write-comment shadow_box pb-2">
                            <div class="write_box">
                                <div class="user_img">
                                    <figure><img src="img/user.png" class="img-fluid"></figure>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="What's on your mind?" class="form-control">
                                    <button class="btn" type="submit"><img src="img/send.png"
                                            class="img-fluid"></button>
                                </div>
                            </div>
                            <ul id="fileList" class="file-list"></ul>
                        </div>
                        <div class="all_comments">
                            <div class="comment_box">
                                <div class="user_img">
                                    <figure><img src="img/user.png" class="img-fluid"></figure>
                                </div>
                                <div class="content_dv">
                                    <div class="inner_content">
                                        <div class="topbar">
                                            <h4 class="title">Jason Williams</h4>
                                            <p class="time_ago">4h ago</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" class="rply">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="replay_dv">
                                <div class="comment_box">
                                    <div class="user_img">
                                        <figure><img src="img/rply1.png" class="img-fluid"></figure>
                                    </div>
                                    <div class="content_dv">
                                        <div class="inner_content">
                                            <div class="topbar">
                                                <h4 class="title">Mason Miller</h4>
                                                <p class="time_ago">4h ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" class="rply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-previous">
                            <a href="#" class="comment">View previous comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="posts box">
                    <div class="title">
                        <h4>Recent Posts</h4>
                    </div>
                    <div class="all_recent_post">
                        <div class="recent_post">
                            <div class="img_box">
                                <figure><img src="img/rpost1.png" class="img-fluid"></figure>
                            </div>
                            <div class="content">
                                <div class="topbar">
                                    <h5 class="posted_by"> by Misty Lloyd</h5>
                                    <h5 class="date"> 29 july 10:30 am | 2021 </h5>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="button-group">
                                    <a href="#" class="lnk">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent_post">
                            <div class="img_box">
                                <figure><img src="img/rpost2.png" class="img-fluid"></figure>
                            </div>
                            <div class="content">
                                <div class="topbar">
                                    <h5 class="posted_by"> by Misty Lloyd</h5>
                                    <h5 class="date"> 29 july 10:30 am | 2021 </h5>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="button-group">
                                    <a href="#" class="lnk">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent_post">
                            <div class="img_box">
                                <figure><img src="img/rpost3.png" class="img-fluid"></figure>
                            </div>
                            <div class="content">
                                <div class="topbar">
                                    <h5 class="posted_by"> by Misty Lloyd</h5>
                                    <h5 class="date"> 29 july 10:30 am | 2021 </h5>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="button-group">
                                    <a href="#" class="lnk">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent_post">
                            <div class="img_box">
                                <figure><img src="img/rpost4.png" class="img-fluid"></figure>
                            </div>
                            <div class="content">
                                <div class="topbar">
                                    <h5 class="posted_by"> by Misty Lloyd</h5>
                                    <h5 class="date"> 29 july 10:30 am | 2021 </h5>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="button-group">
                                    <a href="#" class="lnk">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent_post">
                            <div class="img_box">
                                <figure><img src="img/rpost5.png" class="img-fluid"></figure>
                            </div>
                            <div class="content">
                                <div class="topbar">
                                    <h5 class="posted_by"> by Misty Lloyd</h5>
                                    <h5 class="date"> 29 july 10:30 am | 2021 </h5>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="button-group">
                                    <a href="#" class="lnk">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Start here -->
<?php include 'include/footer.php'?>
<!-- Footer Start here -->