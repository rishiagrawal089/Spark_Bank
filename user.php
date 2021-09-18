<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Create User</title>
      <link rel="stylesheet" href="css/user.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(function(){
                $('#topbar').load('navbar.html');
            })
        </script>
    </head>
    <body>
       <div id="topbar"></div>
       <h1>Create User</h1>
       <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Successful!!!  User created');
                               window.location='home.php';
                     </script>";
                    
    }
  }
?>
       <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-header">  </div>
            <div class="screen-body">
              <div class="screen-body-item left">
                <img src="Image/user1.png" style="border: none; border-radius: 50%;">
              </div>
              <div class="screen-body-item">
                <form   action="" class="app-form" method="post">
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                  </div><br>
                  <div class="app-form-group button">
                    <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                    <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <p>&copy 2021. Made by <b>RISHI AGRAWAL</b> <br> Rishi Agrawal Foundation</p>
      </footer>
    </body>
</html>