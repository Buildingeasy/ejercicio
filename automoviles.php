<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Salario de Vendedor de Automoviles</title>
    <style>
        body {            
            background-color:hsl(72, 24%, 96%);
            font-family: Arial, Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin: 50;
            font-family: Arial, arial;            
        }
        .container {
            background-color:rgb(128, 99, 234);
            max-width: 500px;
            margin: center;
            padding: 50px;
            border: 1px solid #121111;
            border-radius: 10px;
        
        }
              
        h2 {
            color: #333333;
        }
        label {
            color: #555555;
        }
        input[type="text"] {
            width: 30%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solidrgb(220, 11, 11);
            border-radius: 5px;
            
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 50px 200px;
            text-align: right;
            text-decoration: black;
        
            font-size: 16px;
            border-radius: 1px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color:rgb(60, 14, 225);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Salario</h2>

        <label for="nombre del vendedor"><STRONG>NOMBRE DEL VENDEDOR</STRONG></label><br>
        <center>
        <input type="text" id="nombre del vendedor" required><br>
        </center>


        <label for="autosVendidos">CANTIDAD AUTOMOVILES VENDIDOS:</label><br>
        <center>
        <input type="text" id="autosVendidos" required><br>
        </center>
        
        <label for="valorVentas">VALOR TOTAL DE LAS VENTAS:</label><br>
        <center>
        <input type="text" id="valorVentas" required><br>
        </center>
        <center>
        <button onclick="calcularSalario()">ENVIAR</button><br>
        </center>
        <div id="resultado" class="result"></div>
    </div>

    <script>
        function calcularSalario() {
            var salarioBasico = 737000;
            var comisionPorAuto = 50000;
            var porcentajeComision = 0.05;

            var autosVendidos = parseInt(document.getElementById('autosVendidos').value);
            var valorVentas = parseFloat(document.getElementById('valorVentas').value);

            var comisionTotal = comisionPorAuto * autosVendidos;
            var comisionPorVentas = valorVentas * porcentajeComision;
            var salarioTotal = salarioBasico + comisionTotal + comisionPorVentas;

            document.getElementById('resultado').innerText = "El salario total del vendedor es: $" + salarioTotal.toFixed(2);
        }
    </script>
</body>
</html>
