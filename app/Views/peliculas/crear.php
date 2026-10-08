<!DOCTYPE html>
<html>
<head>
    <title>Agregar Película</title>
</head>
<body>
    <div class="container">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            width: 350px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            border-top: 8px solid #d545;
            box-shadow: 0 0 20px rgba(0, 0, 0, .15);
        }

        h1{
            text-align: center;
            color: #5f0404d3;
        }

        input{
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing:border-box;
        }

        button{
            width: 100%;
            padding: 15px;
            background: rgba(228, 38, 38, 0.6);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
        }

        button:hover{
            background:#a82020;
        }
    </style>

<h1>Agregar Película</h1>

<form action="/peliculas/guardar" method="post">

    <input type="text" name="titulo" placeholder="Título">

    <br><br>

    <input type="text" name="genero" placeholder="Género">

    <br><br>

    <input type="number" name="anio" placeholder="Año">

    <br><br>

    <button type="submit">
        Guardar
    </button>

</form>
</div>
</body>
</html>