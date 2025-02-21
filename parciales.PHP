<!DOCTYPE html>
<html>
<head>
    <title> Parciales</title>
    <style>
        body {            
            background-color:rgb(238, 241, 239);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10;
            font-family: Arial, sans-serif;

            
        }
        .formulario {
            background-color:rgb(14, 142, 228);
            padding: 40px;
            border-radius: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 80px auto;
        }
       
        h2 {
            color: #333333;
        }
        label {
            color: #555555;
        }
        input[type="text"] {
            width: 50%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solidrgb(220, 11, 11);
            border-radius: 5px;
            
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: black;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color:rgb(225, 14, 14);
        }
    </style> 
    <script>
        function calcularNotaFinal() {
            var parcial1 = parseFloat(document.getElementById("parcial1").value);
            var parcial2 = parseFloat(document.getElementById("parcial2").value);
            var parcial3 = parseFloat(document.getElementById("parcial3").value);
            var examenFinal = parseFloat(document.getElementById("examenFinal").value);
            var trabajoFinal = parseFloat(document.getElementById("trabajoFinal").value);

            var promedioParciales = (parcial1 + parcial2 + parcial3) / 3;
            var notaFinal = (promedioParciales * 0.35) + (examenFinal * 0.35) + (trabajoFinal * 0.30);
            
            var mensaje = notaFinal >= 3 ? "Aprobó" : "No aprobó";
            
            document.getElementById("resultado").innerText = "La nota final es: " + notaFinal.toFixed(2) + ". " + mensaje;
        }
    </script>
    
    <form onsubmit="calcularNotaFinal(); return false;">
    <script>
        
        
<html>
<head>      
           
        
    </script>
    </head>
   
    <body>

    <div class="formulario">
        <h2>Formulario de Parciales</h2>
        <form action="procesar_formulario.php" method="post">
    
        <form onsubmit="calcularNotaFinal(); return false;">
        
        <label for="parcial1"><strong> Parcial 1:</strong></label>
        <input type="text" id="parcial1" required><br><br>
       

        <label for="parcial2"><strong> Parcial 2:</strong> </label>
        <input type="text" id="parcial2" required><br><br>

        <label for="parcial3">Parcial 3:</label>
        <input type="text" id="parcial3" required><br><br>

        <label for="examenFinal">Examen Final:</label>
        <input type="text" id="examenFinal" required><br><br>

        <label for="trabajoFinal">Trabajo Final:</label>
        <input type="text" id="trabajoFinal" required><br><br>

        <input type="submit" value="enviar"><br><br>
    </form>
    </div>
    <p id="resultado"></p>   
        

</body>
</html>
