<div>

    <div class="flex flex-col items-center justify-center p-4">
        <!-- Controles -->
        <div class="flex items-center gap-4 mb-4">
            <button id="pencil" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 dark:text-gray-200 font-semibold rounded hover:bg-gray-300 dark:hover:bg-gray-600">
                ✏️ Pincel
            </button>
            <button id="eraser" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 dark:text-gray-200 font-semibold rounded hover:bg-gray-300 dark:hover:bg-gray-600">
                🧹 Borrador
            </button>

            <input type="color" id="color" value="#000000" class="w-10 h-10 border rounded">

            <span class="text-lg font-semibold dark:text-gray-200">Tamaño:</span>
            <input type="range" id="size" min="1" max="30" value="12" class="w-40">

            <button id="undo" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 dark:text-gray-200 font-semibold rounded hover:bg-gray-300 dark:hover:bg-gray-600">
                ⤺
            </button>
            <button id="redo" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 dark:text-gray-200 font-semibold rounded hover:bg-gray-300 dark:hover:bg-gray-600">
                ⤻
            </button>

            <button id="clear" class="px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-700">
                🗑️
            </button>

            <button id="save" class="px-4 py-2 bg-green-500 text-white font-semibold rounded hover:bg-green-700">
                ⬇️
            </button>
        </div>

        <!-- Canvas -->
        <canvas id="canvas" width="800" height="400" class="border-2 border-black bg-white"></canvas>
    </div>
</div>
