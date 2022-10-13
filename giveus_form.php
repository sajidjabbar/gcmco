<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/giveus_form.css">
<!-- Css Stylesheet -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/where_most_needed.css">
<!-- Css Stylesheet -->

<!-- section give us form start here -->
<section class="giveus_form_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Give Form</h1>
            <!-- <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;GCM Team</p> -->
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="where_most_sec">
        <div class="container">
            <div class="text-center">
                <input type="radio" name="the_package" hidden class="all_package" id="no1" checked>
                <label for="no1">
                    <div class="boxx">
                        <span>Once</span>
                    </div>
                </label>
                <input type="radio" name="the_package" hidden class="all_package" id="no2">
                <label for="no2">
                    <div class="boxx">
                        <span>Monthly</span>
                    </div>
                </label>
                <input type="radio" name="the_package" hidden class="all_package" id="no3">
                <label for="no3">
                    <div class="boxx">
                        <span>Quarterly</span>
                    </div>
                </label>
                <input type="radio" name="the_package" hidden class="all_package" id="no4">
                <label for="no4">
                    <div class="boxx">
                        <span>Semi Annually</span>
                    </div>
                </label>
                <input type="radio" name="the_package" hidden class="all_package" id="no5">
                <label for="no5">
                    <div class="boxx">
                        <span>Yearly</span>
                    </div>
                </label>
            </div>
            <div class="black_select text-center">
                <div class="row">

                    <div class="col-md-4 p-1">
                        <div class="black_box">
                            <input type="radio" name="the_package2" hidden class="all_package" id="no6" checked>
                            <label for="no6">
                                <div class="boxx">
                                    <span>$50</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="black_box">
                            <input type="radio" name="the_package2" hidden class="all_package" id="no7">
                            <label for="no7">
                                <div class="boxx">
                                    <span>$250</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="black_box">
                            <input type="radio" name="the_package2" hidden class="all_package" id="no8">
                            <label for="no8">
                                <div class="boxx">
                                    <span>$500</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="black_box">
                            <input type="radio" name="the_package2" hidden class="all_package" id="no9">
                            <label for="no9">
                                <div class="boxx">
                                    <span>$1,000</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="black_box">
                            <input type="radio" name="the_package2" hidden class="all_package" id="no10">
                            <label for="no10">
                                <div class="boxx">
                                    <span>$5,000</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="black_box">
                            <input type="radio" name="the_package2" hidden class="all_package" id="no11">
                            <label for="no11">
                                <div class="boxx">
                                    <span>

                                        $<input type="text" name="" value="" placeholder="Other amount in $">
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="form_start">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <div class="input-group mb-2 mt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Email *">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" id="inputphone" placeholder="Phone *"
                                    name="phoneno">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputfirt" name="firstName"
                                    placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputlast" name="lastname"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <input type="checkbox" name="the_check" id="add_filed" value="">

                                <span><label for="add_filed"> I am donating on behalf of an organization.</label></span>
                                <label for="add_filed" class="d-block">
                                    <input type="text" class="form-control hidden_field" id="organisation"
                                        name="organisation" placeholder="Organization Name">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputStreet" name="inputStreet"
                                    placeholder="Street Address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="inputCity"
                                    placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputState" name="inputState"
                                    placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputZip" name="inputZip"
                                    placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="accountdetail">Select Payment Method</label>
                                <select class="form-control see_payment" id="accountdetail">
                                    <option value="Card">Card</option>
                                    <option value="Bank Account">Bank Account</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" id="the_card">
                            <div class="form-group">
                                <label for="">Credit / Debit Card</label>
                                <input type="text" class="form-control" id="inputCardno" name="inputCardno"
                                    placeholder="Card Number">
                            </div>
                        </div>
                        <div class="col-md-12 d-none" id="the_bank">
                            <div class="form-group">
                                <label for="">Account Holder Name</label>
                                <input type="text" class="form-control" id="inputCardno" name="inputCardno"
                                    placeholder="Account Holder Name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Routing number</label>
                                    <input type="number" class="form-control" id="inputCardno" name="inputCardno"
                                        placeholder="Routing number">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Account number</label>
                                    <input type="number" class="form-control" id="inputCardno" name="inputCardno"
                                        placeholder="Account number">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for=""></label>
                                <textarea class="form-control" maxlength="255" name="description"
                                    id="donation_comments"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12" id="the_card">
                            <div class="form-group">
                                <button type="submit" class="submit_btn">Donate</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
<!-- section give us form end here -->



<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->
<script>
    $('.see_payment').on('change', function() {
        if(this.value == "Card"){
            $("#the_card").removeClass("d-none");
            $("#the_bank").addClass("d-none");
        }
        else if(this.value == "Bank Account"){
            $("#the_card").addClass("d-none");
            $("#the_bank").removeClass("d-none");
        }
    });
</script>