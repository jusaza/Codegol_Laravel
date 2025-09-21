<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registrarse - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="../css/style_forms.css">
</head>
<body>

  <header>
    <a href="../registropag.html" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="../imagenes/logo.jpg" alt="Logo Escuela de Fútbol Pinze" />
    </a>
    <a href="../registropag.html" class="volver">Volver</a>
  </header>

  <div class="login-box" role="main" aria-label="Formulario de registro">
    <h1>Actualización de datos </h1>

    <form action="../registropag.html" method="GET">

      <div class="Formgrupo">
        <label for="correo">Correo</label>
        <input type="email" name="correo" placeholder="Ingrese su correo" required>
      </div>

      <div class="Formgrupo">
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" placeholder="Ingrese su contraseña" required>
      </div>

      <div class="Formgrupo">
        <label for="nombre_completo">Nombre completo</label>
        <input type="text" name="nombre_completo" placeholder="Ingrese su nombre completo" required>
      </div>

      <div class="Formgrupo">
        <label for="num_identificacion">Número de identificación</label>
        <input type="number" name="num_identificacion" placeholder="Ingrese su número de identificación" readonly>
      </div>

      <div class="Formgrupo">
        <label for="tipo_documento">Tipo de documento</label>
        <select name="tipo_documento" required>
          <option value="">Seleccione</option>
          <option value="1">Cédula</option>
          <option value="0">Tarjeta de identidad</option>
        </select>
      </div>

      <div class="Formgrupo">
        <label for="telefono_1">Teléfono 1</label>
        <input type="number" name="telefono_1" placeholder="Ingrese su teléfono principal" required>
      </div>

      <div class="Formgrupo">
        <label for="telefono_2">Teléfono 2</label>
        <input type="number" name="telefono_2" placeholder="Ingrese su teléfono secundario">
      </div>

      <div class="Formgrupo">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" placeholder="Ingrese su dirección" required>
      </div>

      <div class="Formgrupo">
        <label for="genero">Género</label>
        <select name="genero" required>
          <option value="">Seleccione</option>
          <option value="1">Femenino</option>
          <option value="0">Masculino</option>
        </select>
      </div>

      <div class="Formgrupo">
        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" required>
      </div>

      <div class="Formgrupo">
        <label for="lugar_nacimiento">Lugar de nacimiento</label>
        <input type="text" name="lugar_nacimiento" placeholder="Ingrese su lugar de nacimiento" required>
      </div>

      <div class="Formgrupo">
        <label for="grupo_sanguineo">Grupo sanguíneo</label>
        <input type="text" name="grupo_sanguineo" placeholder="Ejemplo: O+, A-, AB+" required>
      </div>

      <div class="Formgrupo">
        <label for="foto_perfil">Foto de perfil</label>
        <input type="file" name="foto_perfil" accept="image/*" required>
      </div>

      <div class="Formgrupo">
        <label for="estado">Estado</label>
        <select name="estado" required>
          <option value="">Seleccione estado</option>
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>

      <div class="Formgrupo">
        <label for="registrado_por"></label>
        <input type="hidden" name="registrado_por" placeholder="ID del registrador" readonly>
      </div>

      <div class="Formgrupo">
        <label for="id_responsable"></label>
        <input type="hidden" name="id_responsable" placeholder="ID del responsable" readonly>
      </div>

      <button type="submit">Actualizar</button>
    </form>

  </div>

</body>
</html>
