<?php
include 'inc/common/head.php';
include 'inc/common/navbar.php';
include 'inc/common/banner.php';
?>


<div class="container contact">
  <div class="row">
    <div class="col-12 my-5">
      <div class="heading">
        Контакт
      </div>
      <form class="form-inline" action="#" id="contact"></form>
      <div class="row py-5">
        <div class="col-12 col-md-6">
          <span class="contact-label">Име и Презиме</span> <br>
          <input type="text" class="form-control mt-2" form="contact" placeholder="John Doe">
        </div>
        <div class="col-12 col-md-6 float-right pt-5 pt-md-0">
          <span class="contact-label">Емаил</span> <br>
          <input type="text" class="form-control mt-2" form="contact" placeholder="Johndoe@website.com">
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-12 col-md-6">
          <span class="contact-label">Наслов</span> <br>
          <input type="text" class="form-control mt-2" form="contact">
        </div>
        <div class="col-12 col-md-6 float-right pt-5 pt-md-0">
          <span class="contact-label">Телефон (Опционално)</span> <br>
          <input type="text" class="form-control mt-2" form="contact" placeholder="+38970">
        </div>
      </div>
      <div class="row pb-5 px-3">
      <span class="contact-label">Порака</span>
        <textarea class="form-control mt-2" rows="10"></textarea>
      </div>
      <div class="row justify-content-end pb-5">
        <div class="col-12 col-md-auto">
          <button class="btn px-4 btn-contact">Прати Порака</button>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include 'inc/common/subscribe.php';
include 'inc/common/footer.php';
?>