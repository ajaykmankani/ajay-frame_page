<section class="form-footer space mt-5">

<div class="container">
    <div class="row bg-dark-both d-flex align-items-center justify-content-center">
        <div class="col-md-6">
       <img src="images/info-box.png" alt="add">
        </div>
        <div class="col-md-6">
            <div class="header-from">
        <form method="POST" action="contactthanks.php" id="form1" name="form1"onSubmit="return checkform(this);">
                            <div class="text-center fs-4 fw-bold text-white" style="font-size: 21px;">
                                Quick Booking for Char Dham Package !
                            </div>

                            <div class="row mt-4">

                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <input type="text" required name="name" placeholder="Name">

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <input type="text" required name="email" placeholder="Email">

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <input type="text" required name="phone" placeholder="Phone">

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 text-light-1">
                                        <select required name="boarding">
                                            <option>Services</option>
                                            <option value="1">1</option>
                                            <option value="2">1</option>
                                            <option value="3">3</option>
                                            <option value="Others">Others</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <!-- <input type="text" required name="date" placeholder="Date"  onfocus="(this.type='date')" onblur="(this.type='text')"                        > -->
                                        <input type="text" name="TravelDate" id="TravelDate1" required=""
                                            placeholder="Date" class="js-search js-dd-focus"
                                            data-ddg-inputtype="unknown">
                                    </div>

                                </div>
                                <div class="col-12">

                                    <button class="btn2 mt-4" id="frm_submit_btn2" type="submit" name="btnsubmit">Submit
                                    </button>

                                </div>
                            </div>
                        </form>
</div>
        </div>
    </div>
</div>

</section>