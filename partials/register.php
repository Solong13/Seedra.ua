<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])){
  if(!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){
      $login = $_POST['login'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "INSERT INTO `users` ( `user`, `Email`, `Password`) VALUES ('$login', '$email', '$password');";
    $result = $conn->query($sql);
    if($result){
      echo "Данные успешно добавлены";
      header("Location: /index.php");
    } else{
        echo "Ошибка: " . $conn->error;
    }

    mysqli_close($conn);

    } else {
    echo "Input field is empty";
  }

} 

?>

<section>
  <div class="container">
    <div class="table">
    <img src="/assets/img/ovochi-18929.jpg">
    <h3 class="mb">Registration Info</h3>

        <form class="register" action="" method="POST">
          <label class="form-label" for="form3Example1q">Login:</label>
          <input type="text" id="form3Example1q" name="login" class="form-control" placeholder="Write your Login" required />

          <label class="form-label" for="form3Example1q">Email:</label>
          <input type="email" id="form3Example1q" name="email" class="form-control" placeholder="Write your Email" required />
          
          <label class="form-label" for="form3Example1q">Password:</label>
          <input type="password" id="form3Example1q" name="password" class="form-control" placeholder="Write your Password" required />
          

          
          <label class="form-check-label" for="form2Example3">
           Remember me
            <input class="form-check-input" type="checkbox" value="" id="form2Example3c"/>
          </label>

          <button type="submit" class="btn btn-success btn-lg mb-1" >Submit</button>
        </form>
    </div>
  </div>
</section>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>