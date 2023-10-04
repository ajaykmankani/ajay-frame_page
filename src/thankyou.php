<?php include('includes/header.php') ?>
<!------------------------------>
<section class="thankyousec">

  <div class="container p-5">
    <div class="row text-center">
      <div class="col-md-12">
        <div id="lottie-animation" style="height:121px; margin-bottom: 40px; margin-top: 40px;"></div>
        <h1 class="text-b">Thank You For Submitting...</h1>
        <p class="mb-5">Thank you for reaching out! If you have any further questions or concerns,
          please don't hesitate to contact us at <b><?=$mail?></b>.</p>
        <a href="index.php" class="backtohomebtn">Home</a>
      </div>
    </div>
  </div>

</section>



<!------------------------>


<?php include('includes/footer.php') ?>
<script src="js/lottie.js"></script>
<script>
  const container = document.getElementById('lottie-animation');
  const animation = bodymovin.loadAnimation({
    container: container,
    path: 'lottie/right.json',
    renderer: 'svg',
    loop: true,
    autoplay: true,
    name: "Lottie Animation"
  });
</script>