<?php
require 'authentification.php';
forcer_utilisateur_connecte();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    



<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      session_start();
        require("bdd.php");
        $sql = "SELECT * FROM contact";
        foreach ($pdo->query($sql) as $row) {
          echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
          echo "</tr>";
        }
        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>





    <form action="" method="post">
    <div class="form-group">
        <h4>HTML & CSS</h4>
        <input class="form-control"  type="number" name="htmlcss" placeholder="Entrer la valeur">
    </div>
    <div class="form-group">
          <h4>JAVASCRIPT</h4>
        <input  class="form-control" type="number" name="javascript" placeholder="Entrer la valeur">

    </div>
       <div class="form-group">
             <h4>ALGO</h4>
        <input  class="form-control" type="number" name="algo" placeholder="Entrer la valeur">

    </div>
       <div class="form-group">
           <h4>LANGUAGE C</h4>
        <input  class="form-control" type="number" name="c" placeholder="Entrer la valeur">

    </div>
<button type="submit" class="btn btn-primary">Actualiser</button>


</form>

<?php
session_start();
require("bdd.php");

$html = $_POST['htmlcss'];
$javascript = $_POST['javascript'];
$algo = $_POST['algo'];
$c = $_POST['c'];


if(isset($html)){
    try{
        $sql = $pdo->prepare("UPDATE competences SET value = $html WHERE name = 'htmlcss'");
        $sql->execute();
    } catch (PDOException $e){
        echo $e->getCode() . "<br/>";
        echo $e->getMessage() . "<br/>";
    }
  header("location:../index.php");
}

if(isset($javascript)){
    try{
        $sql = $pdo->prepare("UPDATE competences SET value = $javascript WHERE name = 'javascript'");
        $sql->execute();
    } catch (PDOException $e){
        echo $e->getCode() . "<br/>";
        echo $e->getMessage() . "<br/>";
    }
  header("location:../admin.php");
}
if(isset($algo)){
    try{
        $sql = $pdo->prepare("UPDATE competences SET value = $algo WHERE name = 'algo'");
        $sql->execute();
    } catch (PDOException $e){
        echo $e->getCode() . "<br/>";
        echo $e->getMessage() . "<br/>";
    }
  header("location:../admin.php");
}
if(isset($c)){
    try{
        $sql = $pdo->prepare("UPDATE competences SET value = $c WHERE name = 'c'");
        $sql->execute();
    } catch (PDOException $e){
        echo $e->getCode() . "<br/>";
        echo $e->getMessage() . "<br/>";
    }
  header("location:../admin.php");
}

?>




<div>
<div class="container">
  <h2>HTML CSS <span class="float-right"><?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='htmlcss'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?> </span></h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='htmlcss'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?>">
     
    </div>
  </div>
</div>

<div class="container">
  <h2>JAVASCRIPT<span class="float-right"><?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='javascript'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?> </span></h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='javascript'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?>">
   
    </div>
  </div>
</div>

<div class="container">
  <h2>ALGO<span class="float-right"><?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='algo'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?> </span></h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='algo'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?>">
     
    </div>
  </div>
</div>


<div class="container">
  <h2>LANGUAGE C<span class="float-right"><?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='c'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?> </span></h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                                                              $sql = $pdo->prepare("SELECT value FROM competences WHERE name='c'");
                                                                                              $sql->execute();
                                                                                              $data = $sql->fetch(PDO::FETCH_NUM);
                                                                                            foreach($data as $val){
                                                                                                echo "$val" . "%";
                                                                                            }?>">
     
    </div>
  </div>
</div>



</body>
</html>


