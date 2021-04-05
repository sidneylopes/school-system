<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <form onsubmit="return ajaxCall()" action="login.php" method="POST">

        <input type="text" placeholder="name" id="name" name="name">
        <input type="text" placeholder="password" id="password" name="password">
        <button type="submit">Submit</button>

    </form>

</body>
<script>
    var nameEle = document.getElementById("name");
    var passwordEle = document.getElementById("password");

    function ajaxCall() {

        var result = new XMLHttpRequest();
        result.open("POST", "login.php", true);
        result.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        result.send("name=" + nameEle.value + "&password=" + passwordEle.value);

        result.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == true) {
                    window.location.assign("cpanel.php");
                } else if (this.responseText == false) {
                    alert("Senha ou usuário incorreto");
                }
            }
        }

        return false;

    }
</script>

</html>