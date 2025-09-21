let radarChartDetalle = null;

const btnVerMas = document.querySelectorAll('.ver-mas');
btnVerMas.forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.dataset.id;
    const ventana = document.getElementById('detalle-usuario-' + id);
    ventana.classList.add('active');

    // Espera a que la ventana esté visible para obtener el canvas correctamente
    setTimeout(() => {
      const ctxDetalle = document.getElementById('graficaRadarDetalle').getContext('2d');
      // Destruye el gráfico anterior si existe
      if (radarChartDetalle) {
        radarChartDetalle.destroy();
      }
      radarChartDetalle = new Chart(ctxDetalle, {
        type: 'radar',
        data: {
          labels: ['Velocidad', 'Potencia Tiro', 'Defensa', 'Regate', 'Pase', 'Técnica'],
          datasets: [{
            label: 'Rendimiento',
            data: [80, 75, 70, 65, 85, 90], // valores de ejemplo
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
    }, 100); // pequeño delay para asegurar que el canvas es visible
  });
});

// Cerrar ventana al hacer clic fuera
window.addEventListener('click', function(e) {
  document.querySelectorAll('.ventana-flotante.active').forEach(ventana => {
    if (!ventana.contains(e.target) && !e.target.classList.contains('ver-mas')) {
      ventana.classList.remove('active');
      // Opcional: destruir el gráfico al cerrar
      if (radarChartDetalle) {
        radarChartDetalle.destroy();
        radarChartDetalle = null;
      }
    }
  });
});