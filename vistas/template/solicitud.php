<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <div class="shadow-sm p-3 mb-5 bg-body rounded">
        <div class="text-center">
            <h3 class="h3">Solicitudes</h3>
        </div>
        <form action="#">
            <select class="form-select m-2" aria-label="Default">
                <option selected>Seleccione el producto</option>
                <option value="copias">copias</option>
                <option value="cables">cables</option>
                <option value="proyector">proyector</option>
            </select>
            <hr>
            <div class="row input-group">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="cantidad">
                        <label for="floatingInput">Ingrese la cantidad a pedir</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="salon">
                        <label for="floatingInput">Ingrese el salon</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" disabled class="form-control" id="floatingInput" placeholder="Profesor">
                        <label for="floatingInput">Kexy Rodriguez</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" disabled class="form-control" id="floatingInput" placeholder="correo">
                        <label for="floatingInput">kexy.rodriguez@utp.ac.pa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" disabled class="form-control" id="floatingInput"
                            placeholder="Fecha solicitado">
                        <label for="floatingInput">Fecha de solicitud</label>
                    </div>
                </div>
            </div>
            <div class="m-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Ingrese el archivo</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="text-center d-grid gap-2 mt-2">
                <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
            </div>
        </form>
    </div>
</body>

</html>