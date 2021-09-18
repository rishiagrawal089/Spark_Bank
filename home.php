<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Spark Bank</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(function(){
                $('#topbar').load('navbar.html');
            })
        </script>
    </head>
    <body>
      <!--Nabar Start-->
      <div id="topbar"></div>
      <!-- Navbar END Here-->
      <!-- Image Slider -->
    <div class="content">
      <div class="images">
        <img src="Image/3.jpg" alt="Image">
        <img src="Image/2.png" alt="Image">
        <img src="Image/1.png" alt="Image">
      </div>
      <div class="btn-slider">
        <span onclick="btn_slide(1)"></span>
        <span onclick="btn_slide(2)"></span>
        <span onclick="btn_slide(3)"></span>
      </div>
    </div>
    <script>
      var indexv=1;
      showImg(indexv);
      function btn_slide(e){
        showImg(indexv=e);
      }
      function showImg(e){
        var i;
        const img=document.querySelectorAll('img');
        const sliders=document.querySelectorAll('.btn-slider span');
        if(e> img.length){
          indexv=1;
        }
        if(e< 1){
          indexv=img.length;
        }
        for(i=0;i<3;i++){
          img[i].style.display="none";
        }
        for(i=0;i<sliders.length;i++){
          sliders[i].style.background="rgba(8,8,8, 0.1)";
        }
        img[indexv-1].style.display="block";
        sliders[indexv-1].style.background="black";
      }
    </script>
    <div>
      <h1 id="head-message">Welcome to Spark Bank</h1>
    </div>
    <!--Image Slider End Here-->
    <div class="icons-holder">
      <div class="icon-button-holder">
        <img src="Image/user.png"><br>
        <a href="user.php"><button>Create a User</button></a>
      </div>
      <div class="icon-button-holder">
        <img src="Image/transaction.jpeg"><br>
        <a href="transfer.php"><button>Make a Transaction</button></a>
      </div>
      <div class="icon-button-holder">
        <img src="Image/history.jpg"><br>
        <a href="history.php"><button>Transaction History</button></a>
      </div>
     </div>
     <footer>
      <p>&copy 2021. Made by <b>RISHI AGRAWAL</b> <br> Rishi Agrawal Foundation</p>
    </footer>
    </body>
</html>