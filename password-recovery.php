<?php
include 'inc/common/head.php';
?>


<div class="container password-recovery">
  <div class="row justify-content-center">
    <div class="col-11 col-md-8 col-lg-6 text-center pt-5 mt-5">
      <img src="svg/logo.svg">
      <div class="password-change-text mt-4">Промена на Лозинка</div>
      <form action="#" id="password-recovery" class="text-left mt-5">
        <span class="form-label">Нова Лозинка</span>
        <input type="password" class="form-control pass mt-2 mb-3 bg-white">
        <span class="form-label">Повтори Лозинка</span>
        <input type="password" class="form-control pass my-2 bg-white">
        <input type="submit" class="btn btn-recover-pass float-right mt-5" value="Промени Лозинка">
      </form>
    </div>
    <div class="col-12 text-center copyright mb-5 mt-5">
      <img src="svg/footer_fb.svg" class="mr-1">
      <img src="svg/footer_ig.svg" class="ml-1">
      <p class="copyright-text mt-2"> &copy; mojagaraza.mk <?php echo date("Y"); ?> </p>
  </div>
  </div>
</div>

          
<?php
include 'inc/no-bg/footer.php';
?>