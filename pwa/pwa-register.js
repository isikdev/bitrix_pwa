if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('/local/templates/new/pwa/service-worker.js')
            .then(function (registration) {
                console.log('ServiceWorker зарегистрирован успешно: ', registration.scope);
            })
            .catch(function (error) {
                console.log('Ошибка при регистрации ServiceWorker: ', error);
            });
    });
} 