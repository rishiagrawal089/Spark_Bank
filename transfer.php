<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transfer Money</title>
        <link href="css/transaction.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(function(){
                $('#topbar').load('navbar.html');
            })
        </script>
    </head>
    <body>
        <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
       <div id="topbar"></div>
       <h1>View and Transfer</h1>
            <table>
                <thead>
                    <tr>
                    <th scope="col" class="py-2">Id</th>
                    <th scope="col" class="py-2">Name</th>
                    <th scope="col" class="py-2">E-Mail</th>
                    <th scope="col" class="py-2">Balance</th>
                    <th scope="col" class="py-2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduser.php?id= <?php echo $rows['id'] ;?>"> <button type="button">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
       <footer>
        <p>&copy 2021. Made by <b>RISHI AGRAWAL</b> <br> Rishi Agrawal Foundation</p>
      </footer>
    </body>
</html>
  