<div>
    <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white p-6 rounded-lg shadow-lg col-span-1">
        <h2 class="text-2xl font-bold">EPPs mas solicitados</h2>
        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Los epp mas solicitados (Solicitudes vs cantidad)</p>

        @foreach ($eppcount as $index => $count)
        <div class="flex items-center justify-between p-3 bg-gray-100 dark:bg-gray-700 rounded-lg mb-2">
            <div class="flex items-center">
                <div>
                    <p class="font-semibold">{{$count->epp->name}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        {{$count->epp->description}}
                    </p>
                </div>
            </div>

            <span class="px-4 py-2 text-sm font-semibold text-blue-800 dark:text-blue-300 flex items-center gap-2">
                <span id="countTotal_{{$index}}" class="bg-blue-500 text-white px-2 py-1 rounded text-xs dark:bg-blue-700">
                    0
                </span>
                <span class="text-gray-600 dark:text-gray-400">→</span>
                <span id="countCantidad_{{$index}}" class="bg-green-500 text-white px-2 py-1 rounded text-xs dark:bg-green-700">
                    0
                </span>
            </span>
        </div>
        @endforeach

    </div>
    <script type="module">
        import { CountUp } from 'https://cdn.jsdelivr.net/npm/countup.js@2.0.7/dist/countUp.min.js';

        document.addEventListener("DOMContentLoaded", function() {
    // Get data from PHP to JS
    const eppCounts = @json($eppcount);

    // Initialize CountUp for each item
    eppCounts.forEach((item, index) => {
        const countTotal = new CountUp(`countTotal_${index}`, item.total, { duration: 4 });
        const countCantidad = new CountUp(`countCantidad_${index}`, item.total_cantidad, { duration: 4 });

        // Start animations
        if (!countTotal.error) countTotal.start();
        if (!countCantidad.error) countCantidad.start();
    });
});
    </script>
</div>
