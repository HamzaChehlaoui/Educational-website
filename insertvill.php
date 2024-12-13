<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="insertvill.php" method="POST">
        <input type="text" name="nome" placeholder="Name" required>
        <select name="City" id="">
            <option value="Capital City">Capital City</option>
            <option value="Famous City">Famous City</option>
        </select>
        <?php 
        include('conn.php');
        $pays = mysqli_query($conn, "SELECT * FROM `pays`");     
    ?>
    <?php
        $i = 0;
        $array = [];
        while ($row = mysqli_fetch_array($pays)) {
            $array[$i] = $row['name'];
            $i++;
        }
        ?>

        <select name="pays" id="">
            <?php
            for ($j = 0; $j < count($array); $j++) {
            ?>
                <option value="<?= $array[$j] ?>"><?= $array[$j] ?></option>
            <?php
            }
            ?>
        </select>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $namedata = "data_africia";
    $conn = new mysqli($servername, $username, $password, $namedata);

    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $type = $_POST['City'];
        $namepays =$POST['namepays'];
        $stmt = $conn->prepare("INSERT INTO vill (name, type) VALUES (?, ?, ?)");
        $stmt->bind_param("ss", $nome, $type, $namepays);
        if ($stmt->execute()){
            echo "New record inserted successfully!";
        } else {
            echo "Error:" . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
    ?>
</body>
</html>