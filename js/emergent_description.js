function toggleDescription(button) {
  // Encuentra el contenedor de la card correspondiente
  const card = button.closest(".col");
  const description = card.querySelector(".description-window");

  // Alterna la visibilidad de la descripción
  description.classList.toggle("active");
}
