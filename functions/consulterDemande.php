<?php
include "connection.php";
$req = "SELECT * FROM request where isValid=0";
$res = mysqli_query($idcon, $req);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>

<body>
    <link href="../assets/css/style.css" rel="stylesheet">
  
    <h1>Requests</h1>

    <table id="customers" class="styled-table">
        <tr>
            <th>Request Title</th>
            <th>Note</th>
            <th>Volume</th>
            <th>Category</th>
            <th>Location</th>
            <th>Validation</th>
        </tr>
        <?php

        while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <tr>
                <td><?php echo $row["req-title"] ?></td>
                <td><?php echo $row["note"] ?></td>
                <td><?php echo $row["volume"] ?></td>
                <td><?php echo $row["categorie"] ?></td>
                <td><?php echo $row["location"] ?></td>
                <td><form method="POST"><input type="checkbox" name="validation" value="<?php echo $row["id"] ?>"></td>

            </tr>
        <?php } ?>

    </table>
    <button type="submit" name="submit" class="button button1">Save when you validate a request</button>
        
        </form>
</body>

</html>
<?php
if(isset($_POST['submit'])){
if(!empty($_POST['validation'])){
     foreach((array)$_POST['validation'] as $value){
        //echo "value : ".$value.'<br/>';
        $req = "update request set isValid=1 where id='$value'";
        $res = mysqli_query($idcon, $req);

     }
   }
}
?>