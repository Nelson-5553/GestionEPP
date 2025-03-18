document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    // Función para ajustar tamaño
    const resizeCanvas = () => {
        canvas.width = canvas.offsetWidth; // Ajusta el tamaño real del dibujo
        canvas.height = canvas.width * 0.5; // Proporcional para firmas
    };

    // Ajustar al cargar la página y al redimensionar
    window.addEventListener("load", resizeCanvas);
    window.addEventListener("resize", resizeCanvas);

    let painting = false;
    let history = [], step = -1;

    const saveState = () => {
        if (step < history.length - 1) history.length = step + 1;
        history.push(canvas.toDataURL());
        step++;
    };

    const startDrawing = (e) => {
        painting = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    };

    const draw = (e) => {
        if (!painting) return;
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.strokeStyle = document.getElementById("color").value;
        ctx.lineWidth = document.getElementById("size").value;
        ctx.lineCap = "round";
        ctx.stroke();
    };

    const stopDrawing = () => {
        if (painting) {
            painting = false;
            saveState();
        }
    };

    document.getElementById("color").addEventListener("input", (e) => e.target.value);
    document.getElementById("size").addEventListener("input", (e) => e.target.value);

    document.getElementById("clear").addEventListener("click", () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        saveState();
    });

    document.getElementById("undo").addEventListener("click", () => {
        if (step > 0) {
            step--;
            let img = new Image();
            img.src = history[step];
            img.onload = () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(img, 0, 0);
            };
        }
    });

    document.getElementById("redo").addEventListener("click", () => {
        if (step < history.length - 1) {
            step++;
            let img = new Image();
            img.src = history[step];
            img.onload = () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(img, 0, 0);
            };
        }
    });

    document.getElementById("save").addEventListener("click", () => {
        const link = document.createElement("a");
        link.download = "firma.png";
        link.href = canvas.toDataURL();
        link.click();
    });

    // Botón para guardar en Laravel
    document.querySelector(".whitespace-nowrap").addEventListener("click", saveToLaravel);

    function saveToLaravel() {
        // Verificar que haya contenido para guardar
        const imageData = canvas.toDataURL('image/png');

        // Generar nombre único para el archivo
        const fileName = 'firma_' + Date.now() + '.png';

        // Obtener el ID del usuario actual
        // Puedes obtenerlo de algún elemento hidden en tu formulario o de una variable global
        const userId = document.querySelector('input[name="user_id"]')?.value ||
                      window.userId; // Asegúrate de que esta variable está definida en tu vista

        if (!userId) {
            alert('No se pudo identificar al usuario');
            return;
        }

        // Crear objeto FormData para enviar al servidor
        const formData = new FormData();
        formData.append('signature', imageData);
        formData.append('fileName', fileName);

        // Opcional: Agregar token CSRF si lo usas en Laravel
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        // Enviar al servidor mediante fetch
        fetch(`/update-signature/${userId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken || '',
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al guardar la firma');
            }
            return response.json();
        })
        .then(data => {
            // Mostrar mensaje de éxito
            alert('Firma guardada correctamente');
            console.log('Firma guardada:', data);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al guardar la firma: ' + error.message);
        });
    }

    canvas.addEventListener("mousedown", startDrawing);
    canvas.addEventListener("mousemove", draw);
    canvas.addEventListener("mouseup", stopDrawing);
    canvas.addEventListener("mouseleave", stopDrawing);

    canvas.addEventListener("pointerdown", startDrawing);
    canvas.addEventListener("pointermove", draw);
    canvas.addEventListener("pointerup", stopDrawing);
    canvas.addEventListener("pointerleave", stopDrawing);

    saveState();
});
