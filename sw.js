const CACHE_NAME = "mi-app-cache-v1";
const urlsToCache = [
  "./",
  "./index.html",
  "./styles.css",
];

// Instalación del Service Worker y guardado en caché
self.addEventListener("install", event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      console.log("Archivos cacheados ✅");
      return cache.addAll(urlsToCache);
    })
  );
});

// Activación y limpieza de cachés viejos
self.addEventListener("activate", event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== CACHE_NAME) {
            console.log("Borrando caché viejo:", cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Interceptar peticiones y responder desde caché
self.addEventListener("fetch", event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    })
  );
});
