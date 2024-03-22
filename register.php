<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Preview</title>
</head>

<body>
    <h1>Preview</h1>
    </br>
    <?php
    if (!empty ($_POST["name"])) {
        echo $_POST["name"];
    } else {
        echo "name: Not provided.";
    }
    echo "<br/>";
    if (!empty ($_POST["username"])) {
        echo $_POST["username"];
    } else {
        echo "username: Not provided.";
    }
    echo "</br>";
    if (!empty ($_POST["password"])) {
        echo $_POST["password"];
    } else {
        echo "password: Not provided.";
    }
    echo "</br>";

    if (!empty ($_POST["address"])) {
        echo $_POST["address"];
    } else {
        echo "address: Not provided.";
    }
    echo "</br>";
    if (!empty ($_POST["country"])) {
        echo $_POST["country"];
    } else {
        echo "country: Not provided.";
    }
    echo "</br>";

    if (!empty ($_POST["zipcode"])) {
        echo $_POST["zipcode"];
    } else {
        echo "zipcode: Not provided.";
    }
    echo "</br>";
    if (!empty ($_POST["email"])) {
        echo $_POST["email"];
    } else {
        echo "email: Not provided.";
    }
    echo "</br>";
    if (!empty ($_POST["sex"])) {
        echo $_POST["sex"];
    } else {
        echo "sex: Not provided.";
    }
    echo "</br>";
    if (!empty ($_POST["language"])) {



        for ($i = 0; $i < sizeof($_POST["language"]); $i++) {
            echo $_POST["language"][$i] . "</br>";
        }
    } else {
        echo "language: Not provided.";
    }
    echo "</br>";
    if (!empty ($_POST["about"])) {
        echo $_POST["about"];
    } else {
        echo "about: Not provided.";
    }
    ?>



</body>

</html>