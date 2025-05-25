export function initSidebar(){
     const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');

    // verifica se os elementos existem
    if (!sidebar || !sidebarToggle) return;

    // Controla a abertura e fchamento
    sidebarToggle.addEventListener('click', (e) => {
        e.stopPropagation(); // Evita que o clique propague
        sidebar.classList.toggle('-translate-x-full');
        document.body.classList.toggle('sidebar-open');
    });

    // Fecha ao clicar fora da sidebar (em mobile)
    document.addEventListener('click', (event) => {
        if (!sidebar.contains(event.target) && 
            event.target !== sidebarToggle &&
            !sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.add('-translate-x-full');
            document.body.classList.remove('sidebar-open');
        }
    });
}



