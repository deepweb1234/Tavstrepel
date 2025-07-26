// Función para mostrar el modal y ocultar la imagen
function showModal(card) {
  var modal = card.querySelector(".modal");
  var iframe = modal.querySelector("iframe");
  var image = card.querySelector("img"); // Seleccionar la imagen

  if (iframe) {
    var src = iframe.getAttribute("src");
    iframe.setAttribute("src", src + "&autoplay=1");
  }

  if (image) {
    image.classList.add("hidden"); // Ocultar la imagen
  }

  modal.classList.add("show");
}

// Función para ocultar el modal y mostrar la imagen
function hideModal(card) {
  var modal = card.querySelector(".modal");
  var iframe = modal.querySelector("iframe");
  var image = card.querySelector("img"); // Seleccionar la imagen

  if (iframe) {
    var src = iframe.getAttribute("src").replace("&autoplay=1", "");
    iframe.setAttribute("src", src);
  }

  if (image) {
    image.classList.remove("hidden"); // Mostrar la imagen nuevamente
  }

  modal.classList.remove("show");
}

// Función para reproducir el video
function playVideo(card) {
  const video = card.querySelector("video");
  if (video) {
    video.play(); // Reproducir el video
  }
}

// Función para pausar el video
function pauseVideo(card) {
  const video = card.querySelector("video");
  if (video) {
    video.pause(); // Pausar el video
  }
}
