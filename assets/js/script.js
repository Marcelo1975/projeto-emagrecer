//Verifica e solicita se o usuario tem permissão para utilizar notificações do chrome
document.addEventListener('DOMContentLoadded', function(){
    if(!Notification) {
        alert('Desktop notification not available in your browser. try Chromium.');
        return;
    }

    if(Notification.permission !== "granted") {
        Notification.requestPermission();
    }
});
function minhaNotificacao(){
    if(Notification.permission !== "granted"){
        Notification.requestPermission();
    }else{
        var notificacao = new Notification("Novidades do Blog",{
            icon:'http://localhost/projeto_emagrecer/assets/images/ico/icon.png',
            body: 'Veja todas as novidades do nosso blog para você hoje, dica que vam lhe propocionar saúde e bem está'
        });

        notificacao.onclick = function(){
            window.open('http://simonecassemiro34.com/wp/');
        }
    }
}