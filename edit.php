<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "school";
    $mysqli = new mysqli($hostname, $username, $password, $database);
    $id = $_GET['id'];
    $result =  $mysqli->query("SELECT * FROM students WHERE id = $id");
    $row = $result->fetch_assoc();
    if ($result == null) {
        echo $mysqli->error;
        exit;
    }
    ?>

    <form action="update.php" method="POST">
        <div>
            <label for="">Your Name</label>
            <input type="text" name="username" value="<?= $row['name']  ?>" required>
        </div>
        <br>
        <div>
            <label for="">Your City</label>
            <input type="text" value="<?= $row['city']  ?>" name="city" required>
        </div>
        <div>
            <input type="hidden" value="<?= $row['id']  ?>" name="id" required>
        </div>
        <br>
        <div>
            <button>Submit</button>
        </div>
    </form>

</body>

</html>