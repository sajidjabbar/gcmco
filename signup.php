<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->


<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/signup.css">
<!-- Css Stylesheet -->


<!-- signup page start here -->
<section class="signup_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Sign Up</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Sign Up</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="signup_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="signup_form">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Name *</label>
                                        <input class="form-control" type="text" name="fname" id="fname"
                                            placeholder="First">
                                        <label for="" class="text_label">First</label>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lname" placeholder="Last">
                                        <label for="" class="text_label">Last</label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="signupemail">Email *</label>
                                        <input type="email" class="form-control" id="signupemail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="">Preferred Language (Select One): *</label>
                                    <select class="form-control form-control-lg">
                                        <option>English</option>
                                        <option>Spanish</option>
                                        <option>Arabic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button-group">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="signup_right">
                        <h2>SUPPORT</h2>
                        <p>
                            WHERE MOST NEEDED
                        </p>
                        <p>
                            Your gift to” Where most needed” equips Great Commission Ministries with the resources-
                            including personal, discipleship materials, food, housing for women in distress, Hope Homes
                            for
                            children, clothing , and equipment- to fulfill our mission of relief and evangelism in
                            Africa.
                        </p>
                        <div class="btn_give">
                            <div class="button-group">
                                <a href="give.php" class="btn">Give</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- signup page end here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->