<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="js/jquery-3.1.1.js"></script>
    <script>

        function Operaciones () {

            var dias = $("#dias").val();
            $.ajax({
                method: "POST",
                url: "operaciones.php",
                data: {dias: dias}
            })
            .done(function (msg) {
                alert("La distancia recorrida es de " + msg + " kilometros ");
            });
        }
    </script>
</head>
<body>
    <form method="POST">
        <input type="number" name="dias" id="dias">
        <input type="button" onclick="Operaciones()" value="oprima">
    </form>
</body>
</html>