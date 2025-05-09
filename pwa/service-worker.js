const CACHE_NAME = 'pizza-la-roma-cache-v2';
const STATIC_CACHE = 'static-cache-v2';
const DYNAMIC_CACHE = 'dynamic-cache-v2';
const OFFLINE_URL = '/local/templates/new/pwa/offline.html';

const urlsToCache = [
    '/',
    '/index.php',
    '/local/templates/new/pwa/logo.png',
    '/local/templates/new/pwa/manifest.json',
    '/local/templates/new/styles.css',
    '/local/templates/new/js/bundle.js',
    '/local/templates/new/js/myscripts.js',
    '/local/templates/new/pwa/offline.html'
];

// Установка Service Worker и предварительное кеширование важных ресурсов
self.addEventListener('install', event => {
    console.log('[Service Worker] Установка');
    event.waitUntil(
        caches.open(STATIC_CACHE)
            .then(cache => {
                console.log('[Service Worker] Предварительное кеширование статичных ресурсов');
                return cache.addAll(urlsToCache)
                    .catch(error => {
                        console.error('[Service Worker] Ошибка кеширования:', error);
                    });
            })
            .then(() => {
                console.log('[Service Worker] Пропуск ожидания');
                return self.skipWaiting();
            })
    );
});

// Активация Service Worker и удаление старых кешей
self.addEventListener('activate', event => {
    console.log('[Service Worker] Активация');
    const cacheWhitelist = [STATIC_CACHE, DYNAMIC_CACHE];

    event.waitUntil(
        caches.keys()
            .then(cacheNames => {
                return Promise.all(
                    cacheNames.map(cacheName => {
                        if (cacheWhitelist.indexOf(cacheName) === -1) {
                            console.log('[Service Worker] Удаление старого кеша:', cacheName);
                            return caches.delete(cacheName);
                        }
                    })
                );
            })
            .then(() => {
                console.log('[Service Worker] Утверждение клиента');
                return self.clients.claim();
            })
    );
});

// Обработка запросов страниц и ресурсов
self.addEventListener('fetch', event => {
    // Для навигационных запросов (HTML страниц)
    if (event.request.mode === 'navigate' ||
        (event.request.method === 'GET' &&
            event.request.headers.get('accept').includes('text/html'))) {

        console.log('[Service Worker] Перехват навигационного запроса:', event.request.url);

        event.respondWith(
            fetch(event.request)
                .catch(error => {
                    console.log('[Service Worker] Ошибка сети для навигационного запроса:', error);
                    return caches.match(OFFLINE_URL);
                })
        );
        return;
    }

    // Стратегия "Сначала кеш, затем сеть" для остальных запросов
    event.respondWith(
        caches.match(event.request)
            .then(cachedResponse => {
                if (cachedResponse) {
                    console.log('[Service Worker] Возврат из кеша:', event.request.url);
                    return cachedResponse;
                }

                console.log('[Service Worker] Запрос в сеть:', event.request.url);
                return fetch(event.request)
                    .then(response => {
                        // Если ответ не пустой, можно кешировать
                        if (!response || response.status !== 200 || response.type !== 'basic') {
                            return response;
                        }

                        // Клонируем ответ, так как его можно использовать только один раз
                        const responseToCache = response.clone();

                        caches.open(DYNAMIC_CACHE)
                            .then(cache => {
                                console.log('[Service Worker] Кеширование нового ресурса:', event.request.url);
                                cache.put(event.request, responseToCache);
                            })
                            .catch(error => {
                                console.error('[Service Worker] Ошибка при кешировании:', error);
                            });

                        return response;
                    })
                    .catch(error => {
                        console.log('[Service Worker] Ошибка сети:', error);

                        // Для изображений возвращаем пустой ответ вместо ошибки
                        if (event.request.headers.get('accept').includes('image')) {
                            return new Response('', {
                                status: 200,
                                statusText: 'OK'
                            });
                        }

                        return new Response('Произошла ошибка сети', {
                            status: 408,
                            headers: { 'Content-Type': 'text/plain' }
                        });
                    });
            })
    );
});

// Обработка push-уведомлений
self.addEventListener('push', event => {
    console.log('[Service Worker] Push-уведомление получено');

    const title = 'Pizza La Roma';
    const options = {
        body: event.data ? event.data.text() : 'Новое уведомление от Pizza La Roma',
        icon: '/local/templates/new/pwa/logo.png',
        badge: '/local/templates/new/pwa/logo.png'
    };

    event.waitUntil(
        self.registration.showNotification(title, options)
    );
});

// Обработка клика по уведомлению
self.addEventListener('notificationclick', event => {
    console.log('[Service Worker] По уведомлению был совершен клик');

    event.notification.close();

    event.waitUntil(
        clients.openWindow('/')
    );
});

// Обработка события синхронизации (для отложенных запросов)
self.addEventListener('sync', event => {
    console.log('[Service Worker] Событие фоновой синхронизации', event.tag);

    if (event.tag === 'sync-new-order') {
        console.log('[Service Worker] Синхронизация нового заказа');
        // Здесь можно добавить код для отправки отложенного заказа
    }
}); 