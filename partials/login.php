<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
?>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<?php 
if(!empty($_POST)) {
  // пошук по полям
  $sql = "SELECT * FROM `users` WHERE `Email`='"
   . $_POST['email'] . "' AND `Password`='" . $_POST['password'] . "'"; 

  $result = mysqli_query($conn, $sql);// готуємо запрос
  $user = $result->fetch_assoc(); 

  if($user) {
    if(isset($_POST['remember'])){
      setcookie('user_id', $user['id'], time()+60*60*24*30, '/');  
      echo "<h2>" . $_COOKIE['user_id'] . "</h2>";
    }else{
      $_SESSION['user_id'] = $user['id'];
    }
      header("Location: /index.php");
  } else{
    $_SESSION['user_id'] = NULL;
    setcookie('user_id', '', 0, '/');
  }
}


?>

<section>
  <div class="container">
    <div class="table">
    <img src="/assets/img/ovochi-18929.jpg">
    <h3 class="mb">Registration Info</h3>
        <form class="register" action="" method="POST">
        <label class="form-label" for="form3Example1q">Email:</label>
          <input type="email" id="form3Example1q" name="email" class="form-control" placeholder="Write your Email" required />
          
          <label class="form-label" for="form3Example1q">Password:</label>
          <input type="password" id="form3Example1q" name="password" class="form-control" placeholder="Write your Password" required />
          
          <label class="form-check-label" for="form2Example3" name="remember">
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