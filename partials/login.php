<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
?>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>


<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="/assets/img/ovochi-18929.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; height: 250px;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form class="px-md-2">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" required/>
                <label class="form-label" for="form3Example1q">Name</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="form3Example1q" class="form-control" required />
                <label class="form-label" for="form3Example1q">Password</label>
              </div>

              <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me Or <a href="/partials/register.php"> Registration</a>
                    </label>
                </div>

              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>