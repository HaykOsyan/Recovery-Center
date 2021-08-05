<!-- header cart modal -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cartModalLabel">Your Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="cart-product d-flex justify-content-between">
          <div class="cart-img"></div>
          <div class="cart-details">
            <div class="product-qty d-flex justify-content-between">
              <div class="left-qty">
                <h2>Product name</h2>
                <p>QTY <i class="fas fa-minus-circle"></i> 2 <i class="fas fa-plus-circle"></i></p>
              </div>
              <div class="right-qty">
                <h2><button><i class="fas fa-trash"></i></button></h2>
                <p>Price $16</p>
              </div>
            </div>
          <details>
            <summary>More Details </summary>
              <div class="more-details d-flex justify-content-between">
                <div class="details-left">
                  <p>Frame (+1$)</p>
                  <p>Signature (+1$)</p>
                  <p>Happy Anaversary </p>
                </div>
                <div class="details-right">
                  <p><i class="far fa-square"></i></p>
                  <p><i class="fas fa-pencil-alt"></i></p>
                </div>
              </div>
          </details>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="delivery d-flex w-100">
          <div class="delivery-left">
            <span><i class="fas fa-info-circle"></i></span>
          </div>
          <div class="delivery-right">
            <p>Delivery price is 2$ - 5$</p>
            <p>Choose your address in checkout</p>
          </div>
        </div>
        <button type="button" class="btn btn-primary w-100">Go To Checkout</button>
      </div>
    </div>
  </div>
</div>

<!-- Sign in modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="email" :value="__('Email')">E-mail*</label>
            <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
          </div>
          <div class="form-group">
            <label for="password" :value="__('Password')">Password*</label>
            <input class="form-control" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password">
          </div>
          <button type="submit" class="btn btn-primary w-100">Sign Ip</button>
        </form>
          <div class="text-center">
              <p>Don’t have an account?
                  <button class="btn btn-link" data-toggle="modal" data-target="#signInModal">Sign Up</button>
              </p>
          </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Sign up modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group">
            <label for="name" :value="__('Name')">Full name*</label>
            <input class="form-control" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus>
          </div>
          <div class="form-group">
            <label for="email" :value="__('Email')">E-mail*</label>
            <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
          </div>
          <div class="form-group">
            <label for="phone" :value="__('Phone')">Phone number</label>
            <input class="form-control" id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')">
          </div>
          <div class="form-group">
            <label for="password" :value="__('Password')">Password*</label>
            <input class="form-control" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password">
          </div>
          <div class="form-group">
            <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password*</label>
            <input class="form-control" id="password_confirmation"
                                type="password"
                                name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
          <div class="text-center">
              <p>Already have an account?
                  <button class="btn btn-link" data-toggle="modal" data-target="#signInModal">Log In</button>
              </p>
          </div>
      </div>
    </div>
  </div>
</div>

{{--carusel events modal--}}
<div class="modal fade" id="caruselEventsModal" tabindex="-1" role="dialog" aria-labelledby="caruselEventsModalLabel" aria-hidden="true">
    <div class="modal-dialog bg-dark" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active">
                            nkar1
                        </li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class=" w-100" src="/images/Frame%209.png" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Frame 10.png" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Frame 11.png" alt="Los Angeles">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
