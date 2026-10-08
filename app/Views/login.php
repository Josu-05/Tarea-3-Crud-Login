<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            border-top: 5px solid #d62828;
        }

        h2{
            color: #d62828;
            text-align: center;
        }

        label{
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        button{
            width: 100%;
            padding: 10px;
            background-color: #d62828;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
        }

        button:hover{
            background-color: #d563;
        }

        input{
            width: 100%;
            width: 320px;
        }
    </style>
</head>

<body>
    <div class="container">
    <h2>Iniciar Sesión</h2>

    <form action= "/login" method="post">

        <label>Usuario:</label>
        <input type="text" name="usuario">

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="password">

        <br><br>

        <button type="submit">
            Ingresar
        </button>

    </form>
    </div>
</body>
</html>