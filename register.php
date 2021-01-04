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
          <span class="form-label">Име и Презиме</span>
          <input type="text" class="form-control login mt-2 mb-3" form="login">
          <span class="form-label">Корисничко име</span>
          <input type="text" class="form-control login mt-2 mb-3" form="login">
          <span class="form-label">Емаил</span>
          <input type="text" class="form-control email mt-2 mb-3" form="login">
          <span class="form-label">Лозинка</span>
          <input type="text" class="form-control pass my-2" form="login">
          <div class="row mt-5 no-gutters">
            <div class="col-md-8 mt-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remember-me" form="login">
                <label class="custom-control-label" for="remember-me">Ги прифаќам <a href="#">правилата</a> на сајтот</label>
              </div>
            </div>
            <div class="col-12 col-md-4 text-right mt-3 mt-md-0">
            <input type="submit" class="btn btn-login-custom px-3 py-3" value="Регистрирај се" form="login">
            </div>
          </div>
          <div class="col-12 text-center copyright mb-5 mt-5 mt-lg-0">
           <img src="svg/fb.svg" class="mr-1">
           <img src="svg/ig.svg" class="ml-1">
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