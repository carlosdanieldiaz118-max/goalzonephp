document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const sidebar   = document.querySelector(".sidebar");
    const overlay   = document.querySelector(".overlay");

    function openSidebar() {
        sidebar.classList.add("open");
        overlay.classList.add("show");
    }

    function closeSidebar() {
        sidebar.classList.remove("open");
        overlay.classList.remove("show");
    }

    hamburger.addEventListener("click", openSidebar);
    overlay.addEventListener("click", closeSidebar);

    document.getElementById("btn-logout").addEventListener("click", (e) => {
        e.preventDefault();
        if (confirm("¿Seguro que deseas cerrar sesión?")) {
            window.location.href = e.currentTarget.href;
        }
    });

    const toggle = document.querySelector('.nav-dropdown-toggle');
    const dropdown = document.querySelector('.nav-dropdown');

    if (toggle && dropdown) {
        toggle.addEventListener('click', () => {
            dropdown.classList.toggle('abierto');
        });
    }

    function activarTab(hash) {
        if (!hash) return;
        const tabBtn = document.querySelector(`[data-bs-target="${hash}"]`);
        if (tabBtn) {
            const tab = new bootstrap.Tab(tabBtn);
            tab.show();
        }
    }

    activarTab(window.location.hash);

    document.querySelectorAll('.nav-dropdown-menu a[href*="#"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const hash = '#' + link.getAttribute('href').split('#')[1];
            const tabBtn = document.querySelector(`[data-bs-target="${hash}"]`);
            if (tabBtn) {
                e.preventDefault();
                const tab = new bootstrap.Tab(tabBtn);
                tab.show();
                history.pushState(null, null, hash);
            }
        });
    });
});
