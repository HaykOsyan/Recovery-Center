@include('frontend.modal')
<nav class="navbar navbar-expand-lg position-relative gradient-black-white" >
    <div id="loginRegPopup" class="position-absolute login-reg-popup">
        <div class="diagonal position-relative"></div>
        <button id="btn-login" type="button" class="btn btn-light col-lg-12 border-top-orange" data-toggle="modal" data-target="#signInModal">Log in</button>
        <button id="btn-register" type="button" class="btn btn-light col-lg-12" data-toggle="modal" data-target="#signUpModal">Register</button>
    </div>
    <div class="logo ml-70">
        <a class="navbar-brand" href="javascript:void(0)">
            <img src="images/logo.png" class="image-logo">
        </a>
    </div>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-70" id="navb">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ml-40">
          <a class="nav-link text-white" href="javascript:void(0)">Shop</a>
        </li>
        <li class="nav-item ml-40">
          <a class="nav-link text-white" href="javascript:void(0)">Projects</a>
        </li>
        <li class="nav-item ml-40">
            <a class="nav-link text-white" href="javascript:void(0)">Events</a>
        </li>
        <li class="nav-item ml-40">
            <a class="nav-link text-white" href="javascript:void(0)">Our Team</a>
        </li>
        <li class="nav-item ml-70">
            <button type="button" class="btn btn-danger">Donate</button>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
          <select class="text-light bg-none border-0">
              <option>Eng</option>
              <option>Arm</option>
            </select>
            <!-- <button type="button" class="btn text-light"> -->
            <button type="button" class="btn text-light">
              <i id="icnUser" class="fas fa-user"></i>
            </button>
            <button type="button" class="btn text-light mr-5" data-toggle="modal" data-target="#cartModal">
              <i class="fas fa-shopping-cart"></i>
            </button>
      </form>
    </div>
</nav>
