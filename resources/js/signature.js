document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const clearBtn = document.getElementById('clear'); // Botón de borrar
    let painting = false;

    function startPosition(e) {
        painting = true;
        ctx.beginPath();
        draw(e);
    }

    function endPosition() {
        painting = false;
        ctx.beginPath();
    }

    function draw(e) {
        if (!painting) return;
        ctx.lineWidth = document.getElementById('size').value;
        ctx.lineCap = 'round';
        ctx.strokeStyle = document.getElementById('color').value;

        let x = e.offsetX;
        let y = e.offsetY;

        ctx.lineTo(x, y);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(x, y);
    }

    function clearCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    // Asignar evento al botón de borrar
    clearBtn.addEventListener('click', clearCanvas);

    // Eventos del mouse
    canvas.addEventListener('mousedown', startPosition);
    canvas.addEventListener('mouseup', endPosition);
    canvas.addEventListener('mousemove', draw);

    // Eventos táctiles para móviles
    canvas.addEventListener('touchstart', (e) => {
        e.preventDefault();
        startPosition(e.touches[0]);
    });
    canvas.addEventListener('touchend', endPosition);
    canvas.addEventListener('touchmove', (e) => {
        e.preventDefault();
        draw(e.touches[0]);
    });
});
