<?php

include "./connection/db.php";
require "./connection/authorize.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/stylesheet.css?572347597">
    <title>System</title>
</head>

<body>

    <div id="dash">

        <div class="header">

            <h4>Olá, <?php echo $_SESSION["user"]; ?>!</h4>

        </div>
        <div class="line"></div>

        <div id="buttons">

            <div class="button">

                <a onclick="showDiv('1')">Alunos</a>

            </div>
            <div class="line"></div>
            <div class="button">

                <a onclick="showDiv('2')">Turmas</a>

            </div>
            <div class="line"></div>
            <div class="button">

                <a onclick="showDiv('3')">Área do aluno</a>

            </div>
            <div class="line"></div>

        </div>

    </div>
    <div id="main">
        <div id="students" style="display: none;">
            <header>

                <p>Name:</p>
                <hr class="divider" />
                <p>Email:</p>
                <hr class="divider" />
                <p>Phone:</p>
                <hr class="divider" />
                <p>Book:</p>

            </header>
        </div>
        <div id="classes" style="display: none;">2</div>
        <div id="student_area" style="display: none;">3</div>
    </div>

</body>
<script>
    function showDiv(index) {

        var div1 = document.getElementById("students");
        var div2 = document.getElementById("classes");
        var div3 = document.getElementById("student_area");

        if (index == "1") {
            div1.style.display = "block";
            div2.style.display = "none";
            div3.style.display = "none";
        } else if (index == "2") {
            div1.style.display = "none";
            div2.style.display = "block";
            div3.style.display = "none";
        } else if (index == "3") {
            div1.style.display = "none";
            div2.style.display = "none";
            div3.style.display = "block";
        }
    }
</script>

</html>