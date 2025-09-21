<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rendimiento - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="css/style_pag_prin.css" />
  <link rel="stylesheet" href="css/stylepag.css" />
</head>
<body>
  <aside class="menu">
    <a href="./pagina_original" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="./imagenes/logo.jpg" alt="Logo Escuela de Fútbol Pinze" />
    </a>
    <h2>⚽ Menú ⚽</h2>
    <ul>
      <li><a href="./registropag">Usuarios</a></li>
      <li><a href="./entrenopag">Entrenamiento</a></li>
      <li><a href="./inventariopag">Inventario</a></li>
      <li><a href="./rendimientopag">Rendimiento</a></li>
      <li><a href="./matriculapag">Matrícula</a></li>
      <li><a href="./pagopag">Pago</a></li>
    </ul>
    <a href="./index.html" class="cerrar-sesion">Cerrar sesión</a>
  </aside>

  <div class="contenido">
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar rendimiento..." />
      </div>
      <a href="./formularios/rendimiento" class="boton-registrar">Registrar rendimiento</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Fecha</th>
          <th>Posición</th>
          <th>Velocidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2025-06-15</td>
          <td>Delantero</td>
          <td>80</td>
          <td class="acciones">
            <button class="ver-mas" data-id="1">Ver más</button>
            <button class="actualizar" onclick="location.href='./formularios_actualizacion/rendimiento_actualizar'">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Ventana flotante con gráfica radar -->
  <div class="ventana-flotante" id="detalle-usuario-1">
    <ul>
      <li><strong>ID Rendimiento:</strong> 1</li>
      <li><strong>Fecha Evaluación:</strong> 2025-06-15</li>
      <li><strong>Posición:</strong> Delantero</li>
      <li><strong>Velocidad:</strong> 80</li>
      <li><strong>Potencia Tiro:</strong> 75</li>
      <li><strong>Defensa:</strong> 70</li>
      <li><strong>Regate:</strong> 65</li>
      <li><strong>Pase:</strong> 85</li>
      <li><strong>Técnica:</strong> 90</li>
      <li><strong>Promedio:</strong> 77.5</li>
      <li><strong>Observaciones:</strong> Buen rendimiento general</li>
      <li><strong>Estado:</strong> Activo</li>
    </ul>
    <canvas id="graficaRadarDetalle"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctxDetalle = document.getElementById('graficaRadarDetalle').getContext('2d');
    let radarChartDetalle = new Chart(ctxDetalle, {
      type: 'radar',
      data: {
        labels: ['Velocidad', 'Potencia Tiro', 'Defensa', 'Regate', 'Pase', 'Técnica'],
        datasets: [{
          label: 'Rendimiento',
          data: [80, 75, 70, 65, 85, 90], // estos valores corresponden al ejemplo de la tabla
          backgroundColor: 'rgba(15, 88, 151, 0.2)',
          borderColor: '#0f5897',
          borderWidth: 2,
          pointBackgroundColor: '#0f5897'
        }]
      },
      options: {
        responsive: true,
        scales: {
          r: {
            min: 0,
            max: 100,
            ticks: { stepSize: 20 }
          }
        }
      }
    });

    // Botón ver más
    const btnVerMas = document.querySelectorAll('.ver-mas');
    btnVerMas.forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.id;
        const ventana = document.getElementById('detalle-usuario-' + id);
        ventana.classList.add('active');

        // Puedes actualizar los valores dinámicamente si los sacas de LocalStorage o backend
        radarChartDetalle.data.datasets[0].data = [80, 75, 70, 65, 85, 90]; // Actualiza si hace falta
        radarChartDetalle.update();
      });
    });

    // Cerrar ventana al hacer clic fuera
    window.addEventListener('click', function(e) {
      if (!e.target.classList.contains('ver-mas') && !e.target.closest('.ventana-flotante')) {
        document.querySelectorAll('.ventana-flotante').forEach(ventana => {
          ventana.classList.remove('active');
        });
      }
    });
  </script>
</body>
</html>
