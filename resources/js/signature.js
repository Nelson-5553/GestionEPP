document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");

   // Función para ajustar tamaño
const resizeCanvas = () => {
    canvas.width = canvas.offsetWidth; // Ajusta el tamaño real del dibujo
    canvas.height = canvas.offsetHeight;
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
        saveState();
    };

    const stopDrawing = () => (painting = false);

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
