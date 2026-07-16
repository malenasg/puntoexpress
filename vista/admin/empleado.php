<?php
require '../header.php';
?>

<div class="content-wrapper">        
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">

          <div class="box-header with-border">
            <h1 class="box-title">
              Empleados 
              <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)">
                <i class="fa fa-plus-circle"></i> Agregar
              </button>
            </h1>
          </div>

          <div class="panel-body table-responsive" id="listadoregistros">
            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
              <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Fecha ingreso</th>
                <th>Estado</th>
              </thead>
              <tbody></tbody>
              <tfoot>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Fecha ingreso</th>
                <th>Estado</th>
              </tfoot>
            </table>
          </div>

          <div class="panel-body" style="height: 450px;" id="formularioregistros">
            <form name="formulario" id="formulario" method="POST">

              <input type="hidden" name="tipo_persona" id="tipo_persona" value="Empleado">
              <input type="hidden" name="idpersona" id="idpersona">

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Apellido:</label>
                <input type="text" class="form-control" name="apellido" id="apellido" maxlength="100" placeholder="Apellido" required>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Tipo de documento:</label>
                <select class="form-control" name="tipo_documento" id="tipo_documento" required>
                  <option value="DNI">DNI</option>
                  <option value="Libreta cívica">Libreta cívica</option>
                  <option value="Pasaporte">Pasaporte</option>
                  <option value="Libreta de Enrolamiento">Libreta de Enrolamiento</option>
                </select>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Número de documento:</label>
                <input type="text" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Número de documento">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" maxlength="100" placeholder="Dirección">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Teléfono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="Teléfono">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" id="email" maxlength="80" placeholder="Email">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Cargo:</label>
                <input type="text" class="form-control" name="cargo" id="cargo" maxlength="50" placeholder="Cargo">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Fecha de ingreso:</label>
                <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar">
                  <i class="fa fa-save"></i> Guardar
                </button>

                <button class="btn btn-danger" onclick="cancelarform()" type="button">
                  <i class="fa fa-arrow-circle-left"></i> Cancelar
                </button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>

<?php
require '../footer.php';
?>

<script type="text/javascript" src="../scripts/empleado.js"></script>