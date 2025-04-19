<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de alumnos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Presentismo</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Agustin</td>
                            <td>Beloso</td>
                            <td>Presente</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ignacio</td>
                            <td>Porto</td>
                            <td>Presente</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ana</td>
                            <td>Valle</td>
                            <td>Ausente</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-end">Total</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>