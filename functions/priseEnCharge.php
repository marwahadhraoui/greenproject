<?php
//AHMED AMINE HLEL
include "connection.php";
$req1 = "SELECT * FROM request";
$res1 = mysqli_query($idcon, $req1);

$req2 = "SELECT * FROM prise_en_charge";
$res2 = mysqli_query($idcon, $req2);

$result = mysqli_query($idcon,"SELECT * FROM prise_en_charge order by RAND() limit 20");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prise En Charge</title>
    <link rel="stylesheet" src="../assets/css/priseEnChargeCss.css"></link>
    <style>
        
*,
*::before,
*::after {
  box-sizing: border-box;
  margin-top:-100px ;
  padding: 0;
}

body {
  font-family: Mukta, sans-serif;
  height: 100vh;
  display: grid;
  justify-content: center;
  align-items: center;
  color: #4f546c;
  font-size: 0.9rem;
  background-color: #f9fbff;
}

table {
  border-collapse: collapse;
  box-shadow: 0 5px 10px #e1e5ee;
  background-color: white;
  text-align: left;
  overflow: hidden;
}
  thead {
    box-shadow: 0 5px 10px #e1e5ee;
  }

  th {
    padding: 1rem 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    font-size: 0.7rem;
    font-weight: 900;
  }

  td {
    padding: 1rem 2rem;
  }

  a {
    text-decoration: none;
    color: #2962ff;
  }

  .status {
    border-radius: 0.2rem;
    background-color: #c8e6c9;
    color:#388e3c;
    padding: 0.2rem 1rem;
    text-align: center;
    
  }

  .option-a {
      border-radius: 0.6rem;
      background-color: #c8e6c9;
      color: #388e3c;
      padding: 0.2rem 1rem;
      text-align: center;
    }

  .option-b {
    border-radius: 0.6rem;
      background-color: #ffcdd2;
      color: #c62828;
      padding: 0.2rem 1rem;
    text-align: center;
    }

  .amount {
    text-align: center;
  }

  tr:nth-child(even) {
    background-color: #f4f6fb;
  }

  .static-txt{
    margin-top:200;
  }

  .dynamic-txts{
    margin-top:250;
  }

  .homebutton {
  margin-top:50px; 
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width:300px;
  margin-left:250px;
  }

  .rounded-button {
    margin-top:-100px;
    width:60px;
    height:60px;
    background:#009578;
    color:#008CBA;
    display:inline-flex;
    align-items:center;
    justify-content:center; 
    cursor:pointer;
    border-radius:50%;
  }

    </style>
</head>
<body>
    <table>
        <thead>
           <tr>
            <th>Request Title</th>
            <th>Volume</th>
            <th>Category</th>
            <th>Location</th>
            <th>Status</th>
            <th>care manager</th>
            <th>care manager's function</th>
            <th>pick-up priority order</th>
           </tr>
        </thead>

        <tbody>
        <?php $i=0; while(($row1 = mysqli_fetch_assoc($res1)) && (($row2 = mysqli_fetch_assoc($res2))) && ($row3 = mysqli_fetch_array($result)) ) {?>
            <tr>
                <td><?php echo ucfirst($row1["req-title"]) ?></td>
                <td class="amount"><?php echo $row1["volume"] ?></td>
                <td><?php echo ucfirst($row1["categorie"]) ?></td>
                <td><?php echo strtoupper($row1["location"]) ?></td>
                <?php if($row1["isValid"]==0) echo "<td class='option-b'>InValid</td>" ?>
                <?php if($row1["isValid"]==1) echo "<td class='option-a'>Valid</td>" ?>
                <td class="amount">
                    <?php if($row1["isValid"]==0) echo "++++++" ?>
                    <?php if($row1["isValid"]==1) echo $row3["nom_res_priseEnCharge"] ?>
                </td>
                <td class="amount">
                    <?php if($row1["isValid"]==0) echo "******" ?>
                    <?php if($row1["isValid"]==1) echo $row3["fonction_res_priseEnCharge"] ?>
                </td>
                <td>
                    <?php if($row1["isValid"]==0) echo "-----" ?>
                    <?php if($row1["isValid"]==1) echo $row3["id_res_priseEnCharge"] ?>
                </td>
            </tr>
            <?php }  $i++;?>
<br><br><br>
            <input type="button" value="Change Priority Order" class="homebutton" id="btnOrder" onClick="change()" />
        </tbody>
    </table>

    
    <a class="rounded-button" href="http://localhost/greenproject/index.php">
    <ion-icon name="home-sharp" size="large"></ion-icon>
    </a>
    
    <script>
        function change() {
            document.location.href='http://localhost/greenproject/functions/priseEnCharge.php'

        }
    </script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
