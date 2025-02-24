import './bootstrap';

// modo oscuro del sistema
    document.addEventListener('DOMContentLoaded', function () {
        const html = document.documentElement;
        const darkMode = localStorage.getItem('dark');

        if (darkMode === 'true') {
            html.classList.add('dark');
        }

        document.getElementById('toggleDarkMode').addEventListener('click', function () {
            html.classList.toggle('dark');
            localStorage.setItem('dark', html.classList.contains('dark'));
        });
    });

