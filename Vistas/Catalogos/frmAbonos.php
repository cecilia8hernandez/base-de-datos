<form class="form" action="/SistemaClientes/index?clase=controladorabonos&metodo=AltaAbonos" method="POST">
    <h2>REGISTRO DE ABONOS</h2>
    
    <div class="form-group">
      <label for="idCliente">Id del Cliente:</label>
      <input type="text" id="idCliente" name="txtidCliente" required>
    </div>
   <div class="form-group">
      <label for="idPrestamo">Id del Prestamo:</label>
      <input type="text" id="idPrestamo" name="txtidPrestamo" required>
    </div>
    <div class="form-group">
      <label for="Abono">Cantidad a Abonar:</label>
      <input type="text" id="Abono" name="txtAbono" required>
    </div>
    <div class="form-group">
      <label for="Fecha">Fecha en que se realizo el Abono:</label>
      <input type="text" id="Fecha" name="txtFecha" required>
    </div>
    <div class="form-group">
      <button type="submit">Guardar</button>
    </div>
</form>