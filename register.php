<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-6">
                <div class="box">
                          <h2 class="text-uppercase">New account</h2>
                          <p class="lead">Not our registered customer yet?</p>
                          <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                          <p class="text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>
                          <hr>
                          <form action="my-account.php" method="get">
                            <div class="form-group">
                              <label for="name-login">Name</label>
                              <input id="name-login" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="email-login">Email</label>
                              <input id="email-login" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="password-login">Password</label>
                              <input id="password-login" type="password" class="form-control">
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                          </form>
                </div>
            </div>
            <div class="col-lg-6">
                        <div class="box">
                          <h2 class="text-uppercase">Login</h2>
                          <p class="lead">Already our customer?</p>
                          <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                          <hr>
                          <form action="my-account.php" method="get">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input id="email" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input id="password" type="password" class="form-control">
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                          </form>
                        </div>
            </div>
        </div>
    </div>
</div>

<?php include'footer.php';?>