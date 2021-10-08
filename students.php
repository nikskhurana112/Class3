 <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "school";
    $mysqli = new mysqli($hostname, $username, $password, $database);
    $result =  $mysqli->query("SELECT * FROM students ORDER BY id DESC");
    if ($result == null) {
        echo $mysqli->error;
        exit;
    }
    // print_r($result);
    ?>

 <table border="1" width="50%">
     <tr>
         <th>ID</th>
         <th>NAME</th>
         <th>CITY</th>
         <th>Edit</th>
     </tr>

     <?php
        $length = $result->num_rows;
        for ($i = 0; $i < $length; $i++) {
            $row = $result->fetch_assoc();
        ?>

         <tr>
             <td> <?= $row['id']; ?> </td>
             <td> <?= $row['name']; ?> </td>
             <td> <?= $row['city']; ?> </td>
             <td> <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> </td>
         </tr>

     <?php
        }
        ?>

 </table>