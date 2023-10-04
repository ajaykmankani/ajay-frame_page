<div id="background">
    <div id="popup" class="pop-new form-popup">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6 col-xs-12 hide-in-mob half-left">

                </div>




                <div class="col-md-6 col-xs-12  half-right">


                    <button id="close" class="popup-close-button">&times;</button>

                    <h3 class="text-center">Enquiry Now</h3>
                    <div class="header-from p-5 pop-up-form">


                        <form method="POST" action="contactthanks.php" id="form1" name="form1"
                            onsubmit="return checkform(this);">


                            <div class="row y-gap-20 pt-20">

                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <input type="text" required="" name="name" placeholder="Name">

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <input type="text" required="" name="email" placeholder="Email">

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <input type="text" required="" name="phone" placeholder="Phone">

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 text-light-1">
                                        <select required="" name="boarding">
                                            <option>Boarding</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Haridwar">Haridwar</option>
                                            <option value="Dehradoon">Dehradoon</option>
                                            <option value="Others">Others</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 text-light-1">
                                        <select required="" name="package">
                                            <option>Package</option>
                                            <option value="Chardham">Chardham</option>
                                            <option value="Do Dham(Kedar-Badri)">Do Dham(Kedar-Badri)</option>
                                            <option value="Do Dham(Gangotri-Yamunotri)">Do Dham(Gangotri-Yamunotri)
                                            </option>
                                            <option value="Others">Others</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input mt-2 ">
                                        <!-- <input type="text" required name="date" placeholder="Date"  onfocus="(this.type='date')" onblur="(this.type='text')"
                          > -->
                                        <input type="text" name="TravelDate" id="TravelDate3" required=""
                                            placeholder="Date" class="js-search js-dd-focus"
                                            data-ddg-inputtype="unknown">
                                    </div>

                                </div>
                                <div class="col-12">

                                    <button class="btn2" id="frm_submit_btn2" type="submit" name="btnsubmit">

                                        Submit
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>


            </div>
        </div>


    </div>

</div>


<script>
function showForm() {
    var form = document.getElementById("popup");
    form.style.display = "block";
    document.body.style.overflow = "hidden";
    document.querySelector("#background").style.display = "block";
}


document.querySelector("#close").addEventListener("click", function() {
    document.querySelector("#popup").style.display = "none";
    document.querySelector("#background").style.display = "none"; // hide the background element
    document.body.style.overflow = "auto";
});





document.querySelector("#background").addEventListener("click", function(event) {
    if (event.target === this) {
        console.log('clicked')

        document.querySelector("#popup").style.display = "none";
        document.querySelector("#background").style.display = "none";
        document.body.style.overflow = "auto";
    }
});
</script>