<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Blog</h1>
    <h2>Lista de los blogs</h2>
    <form action="/search" method="POST">
        <input type="text" name="nombre">
        <input type="submit" value="Buscar blog" name="buscar">
    </form>
    <br/>
    <table border="1">

        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Blog</th>
            <th>Imagen</th>
            <th>Tags</th>
        </tr>

        <?php
        foreach ($data['data'] as $blogs) {
            // 'data' tiene que ser el mismo que en el blogController el metodo showBlogsAction que devuelve un data
        ?>
            <tr>
                <td><?php echo $blogs->title ?></td>
                <td><?php echo $blogs->author ?></td>
                <td><?php echo $blogs->blog ?></td>
                <td><?php echo $blogs->image ?></td>
                <td><?php echo $blogs->tags ?></td>
            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>