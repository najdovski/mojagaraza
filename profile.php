<?php
include 'inc/common/head.php';
include 'inc/common/navbar.php';
include 'inc/common/banner.php';
?>

<div class="container profile">
  <div class="row">
    <div class="col-12 mt-5">
    <div class="heading">Кориснички Профил</div>
    </div>
    <div class="col-12 mt-5">
      <div class="row no-gutters text-center text-md-left">
        <div class="col-12 col-md-3">
          <img src="https://ae01.alicdn.com/kf/HTB1SOzkc6fguuRjSszcq6zb7FXaG/TR90-Eyewear-Frame-Men-Fashion-Rectangle-Prescription-lenses-Optical-Spectacles-Myopia-Eyeglasses-Frames-High-Quality-MZ01.jpg" class="profile-current-image rounded-circle w-100">
        </div>
        <div class="mt-4 mt-md-0 ml-md-5 ml-xl-0 col-12 col-md-6 col-lg-5 col-xl-4 align-self-center">
          <div class="profile-name">John Doe</div>
          <div class="profile-email mt-1">Johndoe@website.com</div>
          <form action="#" enctype="multipart/form-data" class="mt-4 pr-2">
            <input type="file" id="profile-picture" accept="image/png, image/jpeg" class="profile-picture-upload">
            <label for="profile-picture"><i class="fas fa-upload mr-2 mr-md-0 px-md-4 mx-lg-1"></i> <span class="ml-2 ml-md-0 profile-picture-text">Прикачи Профилна Слика</span></label>
          </form>
        </div>
        <div class="col-12 mt-5">
          <div class="row">
          <form action="#" id="details"></form>
            <div class="col-12 col-md-6">
              <span class="form-label">Корисничко Име</span>
              <input type="text" class="form-control mt-2 mb-3" form="details" placeholder="John Doe">
            </div>
            <div class="col-12 col-md-6">
              <span class="form-label">Емаил</span>
              <input type="text" class="form-control mt-2 mb-3" form="details" placeholder="Johndoe@website.com">
            </div>
            <div class="col-12 col-md-6 mt-3">
              <span class="form-label">Лозинка</span>
              <input type="password" class="form-control mt-2 mb-3" form="details" placeholder="*********">
            </div>
            <div class="col-12 col-md-6 mt-3">
              <span class="form-label">Телефон (Опционално)</span>
              <input type="text" class="form-control mt-2 mb-3" form="details" placeholder="+38970">
            </div>
            <div class="col-12 text-right my-5 my-md-0 mt-md-2">
              <button class="btn btn-save-changes">Зачувај Промени</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'inc/common/footer.php';
?>