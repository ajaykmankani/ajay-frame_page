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


                        <script id='formScript5083456000003874207'
                            src='https://crm.zoho.com/crm/WebFormServeServlet?rid=1af8252de08741ad18e208eba03efcb1043759f9f9e7d6fefe8b9e094042d1a4gid0d02bfc645eedcedc3cab69fe4cad8e773604c7d5ef2b0e86b3b61793529ee39&script=$sYG'>
                        </script>
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