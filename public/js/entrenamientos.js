document.addEventListener("DOMContentLoaded", function () {
    let tableBody = document.querySelector("#detalles-utiliza-table tbody");
    let addBtn = document.getElementById("add-detalle");

    // 🔹 Recuperar inventarios desde <script id="inventarios-data"> en tu Blade
    let inventarios = JSON.parse(document.getElementById("inventarios-data").textContent);

    let rowIndex = tableBody.querySelectorAll("tr").length; // continuar el índice si hay old() o edición

    addBtn.addEventListener("click", function () {
        let row = document.createElement("tr");
        row.innerHTML = `
            <td>
                <select name="detalles[${rowIndex}][id_inventario]" class="form-select" required>
                    <option value="" disabled selected>Seleccione</option>
                    ${inventarios.map(inv => `<option value="${inv.id_inventario}">${inv.nombre_articulo}</option>`).join("")}
                </select>
            </td>
            <td>
                <input type="number" name="detalles[${rowIndex}][cantidad_usada]" class="form-control" min="1" value="1" required>
            </td>
            <td>
                <input type="text" name="detalles[${rowIndex}][observaciones]" class="form-control">
            </td>
            <td>
                <input type="checkbox" name="detalles[${rowIndex}][devuelto]" value="1">
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm eliminar">X</button>
            </td>
        `;
        tableBody.appendChild(row);
        rowIndex++;
        actualizarEventos();
    });

    function actualizarEventos() {
        document.querySelectorAll(".eliminar").forEach(btn => {
            btn.onclick = function () {
                this.closest("tr").remove();
            };
        });
    }

    actualizarEventos(); // para filas que ya estén cargadas desde el backend
});

