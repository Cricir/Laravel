<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        #resultado {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<button id="ajaxButton">Realizar llamada Ajax</button>

<div id="resultado"></div>

<script>
    $(document).ready(function(){
        $("#ajaxButton").click(function(){
            // Realizar la llamada Ajax
            $.ajax({
                url: 'http://127.0.0.1:8000/DameAnimales',
                type: "GET",
                dataType: 'json',
                success: function(response) {
                    // Manipular la respuesta obtenida
                    //let datosFormatted = JSON.parse(response.datos);
                    console.log(response.datos);
                    $('#resultado').text('Respuesta del Servidor: ' +  response.datos);
                },
                error: function(error) {
                    console.log("Error: ", error);
                }
            });
        });
    });
</script>

</body>
</html>
