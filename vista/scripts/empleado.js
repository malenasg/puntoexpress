var tabla;

function init(){
    mostrarform(false);
    listar();

    $("#formulario").on("submit",function(e)
    {
        guardaryeditar(e);	
    })
}

function limpiar()
{
    $("#nombre").val("");
    $("#apellido").val("");
    $("#tipo_documento").val("DNI");
    $("#num_documento").val("");
    $("#direccion").val("");
    $("#telefono").val("");
    $("#email").val("");
    $("#cargo").val("");
    $("#fecha_ingreso").val("");
    $("#idpersona").val("");
}

function mostrarform(flag)
{
    limpiar();

    if (flag)
    {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled",false);
        $("#btnagregar").hide();
    }
    else
    {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

function cancelarform()
{
    limpiar();
    mostrarform(false);
}

function listar()
{
    tabla=$('#tbllistado').dataTable(
    {
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [		          
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax":
        {
            url: '../../ajax/persona.php?op=listare',
            type : "get",
            dataType : "json",						
            error: function(e){
                console.log(e.responseText);	
            }
        },
        "bDestroy": true,
        "iDisplayLength": 5,
        "order": [[ 0, "desc" ]]
    }).DataTable();
}

function guardaryeditar(e)
{
    e.preventDefault();
    $("#btnGuardar").prop("disabled",true);

    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../../ajax/persona.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {                    
            bootbox.alert(datos);	          
            mostrarform(false);
            tabla.ajax.reload();
        }
    });

    limpiar();
}

function mostrar(idpersona)
{
    $.post("../../ajax/persona.php?op=mostrar",{idpersona : idpersona}, function(data, status)
    {
        data = JSON.parse(data);		
        mostrarform(true);

        $("#nombre").val(data.nombre);
        $("#apellido").val(data.apellido);
        $("#tipo_documento").val(data.tipo_documento);
        $("#num_documento").val(data.num_documento);
        $("#direccion").val(data.direccion);
        $("#telefono").val(data.telefono);
        $("#email").val(data.email);
        $("#cargo").val(data.cargo);
        $("#fecha_ingreso").val(data.fecha_ingreso);
        $("#idpersona").val(data.idpersona);
    })
}

function desactivar(idpersona)
{
    bootbox.confirm("¿Está seguro de desactivar el empleado?", function(result){
        if(result)
        {
            $.post("../../ajax/persona.php?op=desactivar", {idpersona : idpersona}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });	
        }
    })
}

function activar(idpersona)
{
    bootbox.confirm("¿Está seguro de activar el empleado?", function(result){
        if(result)
        {
            $.post("../../ajax/persona.php?op=activar", {idpersona : idpersona}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });	
        }
    })
}

init();