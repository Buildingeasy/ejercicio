<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Crédito</title>
    <style>
        body {
            font-family: cursive, sans-serif;
            background-color: #070707;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #6177d8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(245, 244, 244, 0.1);
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            color: #0d0d0d;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #0d0d0d;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #7f6ce7;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #053f79;
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid #e11616;
        }
        th, td {
            padding: 10px;
            text-align: center;
            color: #0c0c0c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabla de Credito</h1>
        <label for="nombre del vendedor">Nombre</label>
        <input type="text" id="nombre" required><br>
        <label for="cedula">cedula</label>
        <input type="text" id="cedula" required><br>
        <form onsubmit="calcularcreditoyporcentaje(); return false;">
            <label for="monto">Monto</label>
            <input type="number" id="monto" value="0" required>
            
            <label for="tasa">Tasa de interés mensual (%):</label>
            <input type="number" id="tasa" value="0" step="0.01" required>
            
            <label for="plazo">Plazo:</label>
            <input type="number" id="plazo" value="0" required>
            
            <button type="submit">Calcular</button>
        </form>
        <div class="table-container">
            <div id="tablaAmortizacion"></div>
        </div>
    </div>

    <script>
        function calcularcreditoyporcentaje() {
            var monto = parseFloat(document.getElementById("monto").value);
            var tasa = parseFloat(document.getElementById("tasa").value) / 100;
            var plazo = parseInt(document.getElementById("plazo").value);

            var cuota = monto * tasa * Math.pow(1 + tasa, plazo) / (Math.pow(1 + tasa, plazo) - 1);

            var tabla = "<table>";
            tabla += "<tr><th>No. Cuotas</th><th>Saldo Anterior</th><th>Valor Cuota Fija</th><th>Abonos Intereses</th><th>Abono Capital</th><th>Nuevo Saldo</th></tr>";

            var saldo = monto;
            for (var i = 1; i <= plazo; i++) {
                var interes = saldo * tasa;
                var abono_capital = cuota - interes;
                var nuevo_saldo = saldo - abono_capital;

                tabla += "<tr>";
                tabla += "<td>" + i + "</td>";
                tabla += "<td>" + saldo.toFixed(2) + "</td>";
                tabla += "<td>" + cuota.toFixed(2) + "</td>";
                tabla += "<td>" + interes.toFixed(2) + "</td>";
                tabla += "<td>" + abono_capital.toFixed(2) + "</td>";
                tabla += "<td>" + nuevo_saldo.toFixed(2) + "</td>";
                tabla += "</tr>";

                saldo = nuevo_saldo;
            }

            tabla += "</table>";
            document.getElementById("tablaAmortizacion").innerHTML = tabla;
        }
    </script>
</body>
</html>
