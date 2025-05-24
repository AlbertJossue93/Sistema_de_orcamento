export function initSidebar(){
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');



if (!sidebar || sidebarToggle)   return;
    

sidebarToggle.addEventListener('click', ()=> {
    sidebar.classList.toggle('-translate-x-full');

     document.body.classList.toggle('sidebar-open');

});


   // Fechar sidebar ao clicar fora (opcional)
    document.addEventListener('click', (event) => {
        if (!sidebar.contains(event.target) {
            sidebar.classList.add('-translate-x-full');
            document.body.classList.remove('sidebar-open');
        }
    });
}



