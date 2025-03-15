<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Tabla</title>
    <style>
        .table-container {
    overflow: hidden;
    width: 100%;
    overflow-x: auto;
    border-radius: 8px;
    border: 1px solid #ccc;
    margin-top: 1.5rem;
}

.table {
    width: 100%;
    text-align: left;
    font-size: 14px;
    color: #4a4a4a;
    border-collapse: collapse;
}

.table thead {
    background-color: #a2a2a5;
    color: black;
    border-bottom: 2px solid #a2a2a5;
}

.table th, .table td {
    padding: 16px;
}

.table tbody tr {
    border-bottom: 1px solid #ccc;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 8px;
}

.user-name {
    font-weight: bold;
    color: #000;
}

.user-card {
    font-size: 12px;
    color: #666;
}

.badge {
    display: inline-flex;
    align-items: center;
    border-radius: 4px;
    padding: 2px 6px;
    font-size: 12px;
    font-weight: 600;
}

.badge-pendiente {
    border: 1px solid #eab308;
    color: #eab308;
    background-color: rgba(234, 179, 8, 0.1);
}

.badge-entregado {
    border: 1px solid #16a34a;
    color: #16a34a;
    background-color: rgba(22, 163, 74, 0.1);
}

.badge-cancelado {
    border: 1px solid #dc2626;
    color: #dc2626;
    background-color: rgba(220, 38, 38, 0.1);
}

.action-link {
    text-decoration: none;
    font-weight: bold;
    color: black;
    padding: 4px;
    border-radius: 4px;
}

.action-link:hover {
    opacity: 0.75;
}

.dark-mode .table {
    color: #ccc;
}

.dark-mode .user-name {
    color: white;
}

.dark-mode .action-link {
    color: white;
}

    </style>
</head>
<body>
    <h2>INFORMACION DE EPP</h2>
    <p><strong>Mostrar registros:</strong> [Número de registros]</p>
    <p><strong>Fecha Inicio:</strong> [Fecha de inicio] <strong>Fecha Fin:</strong> [Fecha de fin]</p>
    <p><strong>Buscar:</strong> [Campo de búsqueda]</p>
    <div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>Columna 1</th>
                <th>Columna 2</th>
                <th>Columna 3</th>
                <th>Columna 4</th>
                <th>Columna 5</th>
                <th>Columna 6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                <div class="user-info">
                    <div>
                        <span class="user-name">Nelson</span><br>
                        <span class="user-card">1043636799</span>
                    </div>
                </div>
            </td>
                <td>Polaina</td>
                    <td><strong>Santamarta</strong> <br>Cardiologia</td>
                    <td><strong>12</strong></td>
                    <td>
                        <span class="badge">Entregado</span>
                    </td>
                <!-- Más datos según las columnas -->
                <td><img src="[URL de la firma]" alt="Firma" style="width:100px; height:auto;"></td>
            </tr>
            <tr>
                <td>Dato 1</td>
                <td>Dato 2</td>
                <td>Dato 3</td>
                <td>Dato 4</td>
                <td>Dato 5</td>

                <!-- Más datos según las columnas -->
                <td><img src="" alt="Firma" style="width:100px; height:auto;"></td>
            </tr>
            <!-- Se generan más filas dinámicamente -->
        </tbody>
    </table>
</div>
</body>
</html>
