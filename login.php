<?php
include 'inc/no-bg/head.php';
?>

<div class="container-fluid login">
  <div class="row">
    <div class="col-lg-6 col-xl-5 form text-center text-md-left">
      <div class="row justify-content-center">
        <div class="col-10 col-xl-9">
        <img src="svg/logo.svg">
        <p class="welcome-text mt-3">Добредојдовте на сајтот!</p>
        </div>

        <div class="col-10 col-xl-9 mt-4">
          <form action="#" id="login"></form>
          <span class="form-label">Корисничко Име или Емаил</span>
          <input type="text" class="form-control login mt-2 mb-3" form="login">
          <span class="form-label">Лозинка</span>
          <input type="text" class="form-control pass my-2" form="login">
          <div class="row mt-3">
            <div class="col-md-5">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remember-me" form="login">
                <label class="custom-control-label" for="remember-me">Запомни ме</label>
              </div>
            </div>
            <div class="col-12 col-md-7 text-md-right mt-3 mt-md-0">
              <a href="#" class="forget-password">Заборавена Лозинка?</a>
            </div>
            <div class="col-12 float-right text-right mt-4">
              <input type="submit" class="btn btn-login-custom" value="Логирај се" form="login">
            </div>
          </div>
          <div class="col-12 text-center copyright mb-5 mt-5 mt-md-0">
           <img src="svg/footer_fb.svg" class="mr-1">
           <img src="svg/footer_ig.svg" class="ml-1">
           <p class="copyright-text mt-2"> &copy; mojagaraza.mk <?php echo date("Y"); ?> </p>
          </div>
        </div>

      </div>
    </div>
    <div class="d-none d-lg-block col-lg-6 col-xl-7 background"></div>
  </div>
</div>

<?php
include 'inc/no-bg/footer.php';
?>