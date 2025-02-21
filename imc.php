<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 500px; margin: auto ; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        h1 { text-align: center; }
        label, input { display: block; width: 80%; margin-bottom: 10px; }
        button { width: 80%; padding: 10px; margin: 10px 0; background-color: #159941; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #1f8d2f; }
        .result { text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <p><div class="justify-content-end"></div></p>
        <div class="contenedor d-flex justify-content-between"></div>
        <center>
        <h1>CALCULADOR DE IMC</h1>
        </center>
        <center>
        <label for="nombre del paciente"><STRONG>NOMBRE DEL PACIENTE</STRONG></label>
        </center>
        <input type="text" id="nombre del paciente" required>
        <center>
        <label for="weight">PESO(kg):</label>
        </center>
        <input type="text" id="weight" step="0.1">
        <center>
        <label for="height">ESTATURA(m):</label>
        </center>
        <input type="text" id="height" step="0.01">
        <button onclick="calculateIMC()">Calcular IMC</button>
        <div class="result" id="result"></div>
    </div>

    <script>
        function calculateIMC() {
            const weight = parseFloat(document.getElementById('weight').value);
            const height = parseFloat(document.getElementById('height').value);

            if (isNaN(weight) || isNaN(height)) {
                document.getElementById('result').innerText = 'Por favor, ingrese valores válidos.';
                return;
            }

            const imc = weight / (height * height);
            let category = '';

            if (imc < 18.5) {
                category = 'Por debajo del peso';
            } else if (imc >= 18.5 && imc <= 24.9) {
                category = 'Saludable';
            } else if (imc >= 25 && imc <= 29.9) {
                category = 'Con sobrepeso';
            } else if (imc >= 30 && imc <= 39.9) {
                category = 'Obeso';
            } else {
                category = 'Obesidad mórbida';
            }

            document.getElementById('result').innerText = `IMC: ${imc.toFixed(2)} (${category})`;
        }
    </script>
</body>
</html>