<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
?>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<section>
  <div class="container">
    <div class="table">
    <img src="/assets/img/ovochi-18929.jpg">
    <h3 class="mb">Registration Info</h3>
        <form class="register" action="">
          <label class="form-label" for="form3Example1q">Login:</label>
          <input type="text" id="form3Example1q" class="form-control" placeholder="Write your Login" required />
          
          <label class="form-label" for="form3Example1q">Password:</label>
          <input type="password" id="form3Example1q" class="form-control" placeholder="Write your Password" required />
          

          
          <label class="form-check-label" for="form2Example3">
           Remember me  <input class="form-check-input" type="checkbox" value="" id="form2Example3c"/>  Or <a href="/partials/register.php">  Registration</a>
          </label>

          <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
        </form>
    </div>
  </div>
</section>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>