<form class="form" action="/SistemaClientes/index?clase=controladorclientes&metodo=AltaClientes" method="POST">
    <h2>REGISTRO DE CLIENTES</h2>
    
    <div class="form-group">
      <label for="nombre">Nombre del Cliente:</label>
      <input type="text" id="nombre" name="txtNombre" required>
    </div>

    <div class="form-group">
      <label for="ap">Apellido Paterno:</label>
      <input type="text" id="ap" name="txtAP" required>
    </div>

    <div class="form-group">
      <label for="am">Apellido Materno:</label>
      <input type="text" id="am" name="txtAM" required>
    </div>

    <div class="form-group">
      <label for="contraseña">Contraseña:</label>
      <input type="password" id="contraseña" name="txtcontraseña" required>
    </div>

    <div class="form-group">
        <label for="txtTipo" class="form-label">Selecciona El tipo</label>
        <select name="txtTipo" id="txtTipo" class="form-select">
        <option value="Administrador">Administrador</option>
        <option value="Cliente">Cliente</option>
        </select>
    </div>

    <div class="form-group">
      <button type="submit">Guardar</button>
    </div>

</form>