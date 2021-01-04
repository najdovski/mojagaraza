<?php
include 'inc/common/head.php';
include 'inc/common/navbar.php';
include 'inc/common/banner.php';
?>

<div class="container discussion my-5">
  <div class="row">


    <div class="col shadow bg-white h-100">
    <div class="col-12 my-4">
      <span class="heading">Нова Дискусија</span>
    </div>

    <div class="row">
      <div class="col-9">
        <img src="https://ae01.alicdn.com/kf/HTB1SOzkc6fguuRjSszcq6zb7FXaG/TR90-Eyewear-Frame-Men-Fashion-Rectangle-Prescription-lenses-Optical-Spectacles-Myopia-Eyeglasses-Frames-High-Quality-MZ01.jpg" class="ml-3 rounded-circle profile-picture">
        <span class="author-name align-middle ml-2">John Doe</span>
      </div>
      <div class="col-md col-12 mt-4 ml-3 mt-md-0 mt-md-0 float-right text-md-right align-self-center new-discussion-date"><span class="pr-md-4">02.03.2020</span></div>
    </div>

    <div class="row mt-3 px-3 pb-5">
      <div class="col-12 my-3">
      <form action="#" enctype="multipart/form-data" class="new-discussion-form">
        <label for="discussion-title" class="new-discussion-title">Наслов</label>
        <input id="discussion-title" type="text" class="form-control new-discussion-title-input">
        <label for="discussion-title" class="new-discussion-title mt-3">Опис</label>
        <textarea cols="70" rows="10" class="w-100"></textarea>
          <div class="form-group mt-3">
          <input type="file" id="image-upload" accept="image/png, image/jpeg">
          <label for="image-upload"><i class="fas fa-upload px-4 mx-1"></i> <span class="image-upload-text">Прикачи Слика</span></label>
          <span class="allowed-extensions">Се Прифаќа jpg, png</span>
          </div>
          <div class="text-right">
            <input type="reset" value="Ресетирај Полиња" class="btn btn-outline-secondary px-4 btn-reset-fields btn-default-block">
            <input type="submit" value="Постави Дискусија" class="btn btn-comment mt-2 mt-md-0 ml-md-3 btn-default-block">
          </div>
      </form>
    </div>
    </div>

    </div>


    <div class="col-12 col-lg-4 ml-lg-4 h-100 mt-5 mt-lg-0">
      <a href="#">
        <div class="row">
          <div class="col-12 text-center shadow rounded h-100 bg-white">
          <div class="start-new-discussion-div py-2 my-3">
            <img src="img/new-discussion.png" class="start-new-discussion-image my-3">
            <p class="start-new-discussion"> Постави нова дискусија </p>
          </div>
        </div>
      </div>
      </a>


      <div class="row">
      <div class="col-12 shadow bg-white mx-auto rounded mx-lg-0 mt-5 h-100">
      <div class="row border-0 p-3">
        <div class="col">
          <h5 class="text-center text-md-left">
            <div class="d-inline d-sm-block d-md-inline text-sm-center text-md-left"><img src="svg/fiat.svg" class="mr-3 mr-sm-0 mr-md-3"></div>
            <div class="d-inline d-sm-block d-md-inline mt-sm-2 mt-md-0">Fiat</div>
          </h5>

          <div class="row mt-4">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Авто Делови</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">32</span></div>
          </div>

          <div class="row mt-2">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Сервиси</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">32</span></div>
          </div>

          <div class="row mt-2">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Галантерија</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">21</span></div>
          </div>

          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 shadow bg-white mx-auto rounded mx-lg-0 mt-5 h-100">
      <div class="row border-0 p-3">
        <div class="col">
          <h5 class="text-center text-md-left">
            <div class="d-inline d-sm-block d-md-inline text-sm-center text-md-left"><img src="svg/bmw.svg" class="mr-3 mr-sm-0 mr-md-3"></div>
            <div class="d-inline d-sm-block d-md-inline mt-sm-2 mt-md-0">BMW</div>
          </h5>

          <div class="row mt-4">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Авто Делови</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">32</span></div>
          </div>

          <div class="row mt-2">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Сервиси</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">32</span></div>
          </div>

          <div class="row mt-2">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Галантерија</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">21</span></div>
          </div>

          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 shadow bg-white mx-auto rounded mx-lg-0 mt-5 h-100">
      <div class="row border-0 p-3">
        <div class="col">
          <h5 class="text-center text-md-left">
            <div class="d-inline d-sm-block d-md-inline text-sm-center text-md-left"><img src="svg/vw.svg" class="mr-3 mr-sm-0 mr-md-3"></div>
            <div class="d-inline d-sm-block d-md-inline mt-sm-2 mt-md-0">Volkswagen</div>
          </h5>

          <div class="row mt-4">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Авто Делови</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">32</span></div>
          </div>

          <div class="row mt-2">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Сервиси</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">32</span></div>
          </div>

          <div class="row mt-2">
            <div class="col-6"><a href="#"> <p class="card-text card-link"><i class="fas fa-angle-right"></i> Галантерија</p> </a></div>
            <div class="col-6 float-right text-right"><img src="svg/chat.svg"><span class="text-secondary discussions-number d-inline-block ml-1">21</span></div>
          </div>

          </div>
        </div>
      </div>
    </div>


    </div>
  </div>
</div>

<div class="py-5"></div>

<?php
include 'inc/common/subscribe.php';
include 'inc/common/footer.php';
?>