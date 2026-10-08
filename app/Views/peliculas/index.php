<!DOCTYPE html>
<html>
<head>
    <title>CRUD Películas</title>

    <style>

    body{
    font-family: Arial, Helvetica, sans-serif;
    background: #f4f4f4;
    margin: 0;
    padding: 40px;
    }

    .container{
        background: white;
        padding: 30px;
        border-radius: 15px;
        border-top: 8px solid #d62828;
        box-shadow: 0 0 20px rgba(0,0,0,.15);
    }

    h1{
        color:#5f0404d3;
        text-align:center;
    }

    .btn{
        display:inline-block;
        padding:12px 20px;
        background:#d62828;
        color:white;
        text-decoration:none;
        border-radius:8px;
        margin-right:10px;
    }

    .btn:hover{
        background:#a82020;
    }

    table{
        width:100%;
        border-collapse:collapse;
    }

    th{
        background:#d62828;
        color:white;
        padding:12px;
    }

    td{
        padding:12px;
        border-bottom:1px solid #ddd;
    }

    tr:hover{
        background:#f9f9f9;
    }

    .editar{
        background:#0077cc;
        color:white;
        padding:8px 12px;
        text-decoration:none;
        border-radius:6px;
        margin-right: 10px;
    }

    .eliminar{
        background:#d62828;
        color:white;
        padding:8px 12px;
        text-decoration:none;
        border-radius:6px;
    }

</style>
</head>
<body>
<div class="container">

<h1>CRUD DE PELÍCULAS</h1>

<a href= "/logout" class="btn">
    Cerrar sesión
</a>

<a href= "/peliculas/crear" class="btn">
    🚀 AGREGAR PELÍCULA 🚀
</a>

<br><br>

<table>

<tr>
    <th>ID</th>
    <th>Título</th>
    <th>Género</th>
    <th>Año</th>
    <th>Acciones</th>
</tr>

<?php foreach($peliculas as $p): ?>

<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['titulo'] ?></td>
    <td><?= $p['genero'] ?></td>
    <td><?= $p['anio'] ?></td>
    <td>
        <a href="/peliculas/editar/<?= $p['id']?>" class="editar">
            Editar
        </a>

        <a href="/peliculas/eliminar/<?= $p['id']?>" class="eliminar">
            Eliminar
        </a>
    </td>
</tr>

<?php endforeach; ?>

</table>
</div>
</body>
</html>