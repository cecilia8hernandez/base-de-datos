<form class="form" action="/SistemaClientes/index?clase=controladorprestamo&metodo=AltaPrestamo" method="POST">
    <h2>REGISTRO DE PRESTAMOS</h2>
    
    <div class="form-group">
      <label for="prestamo">Cantidad del Prestamo:</label>
      <input type="text" id="prestamo" name="txtPrestamo" required>
    </div>

    <div class="form-group">
      <label for="idcliente">Id del Cliente:</label>
      <input type="text" id="idcliente" name="txtIdCliente" required>
    </div>

    <div class="form-group">
      <label for="fecha">Fecha del Prestamo:</label>
      <input type="text" id="fecha" name="txtFecha" required>
    </div>

    <div class="form-group">
      <button type="submit">Guardar</button>
    </div>

</form>