<div>
    <style>
        .table-container {
    overflow: hidden;
    width: 100%;
    overflow-x: auto;
    border-radius: 8px;
    border: 1px solid #ccc;
    margin-top: 1.5rem;
}
      .dark  .table-container {
    overflow: hidden;
    width: 100%;
    overflow-x: auto;
    border-radius: 8px;
    border: 1px solid #262626;
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
    background-color: #5A6ACF;
    color: white;
    border-bottom: 2px solid #5A6ACF;
}

.table th, .table td {
    padding: 16px;
}

.table tbody tr {
    border-bottom: 1px solid #ccc;
    background-color: #ffffff
}

.dark .table tbody tr {
    border-bottom: 1px solid #262626;
    background-color: #171717;
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

.dark .table {
    color: #ccc;
}

.dark .user-name {
    color: white;
}
.dark .user-card {
    font-size: 12px;
    color: white;
}

.dark .action-link {
    color: white;
}

.ocultar {
        display: none;
    }

    </style>

    <div class="table-container">
    <table class="table dark:tabledark">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>EPP</th>
                <th>Sede/Area</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Firma</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entregas as $entrega)
            <tr>

                <td>
                    <div class="user-info">
                        <div>
                            <span class="user-name">{{$entrega->solicitud->user->name}}</span><br>
                            <span class="user-card">{{$entrega->solicitud->user->card}}</span>
                        </div>
                    </div>
                </td>
                <td>{{$entrega->solicitud->epp->name}}</td>
                <td><strong>{{$entrega->solicitud->sede->name}}</strong> <br>{{$entrega->solicitud->area->name}}</td>
                <td><strong>{{$entrega->solicitud->cantidad}}</strong></td>
                <td>
                    <span class="badge">{{$entrega->state}}</span>
                </td>
                <!-- Más datos según las columnas -->
                <td><img src="" alt="Firma" style="width:100px; height:auto;"></td>
            </tr>
            @endforeach

            <!-- Se generan más filas dinámicamente -->
        </tbody>
    </table>
</div>
</div>
