function mostrar()
{
    $.ajax({
        type:"POST",
        url:"model\AsistenciaModel.php",
        success:function(r){
            $('#tablaDatos').html(r);
        }
    })
}

function obtenerDatos(id)
{

}
