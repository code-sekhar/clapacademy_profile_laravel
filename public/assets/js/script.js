document.addEventListener('DOMContentLoaded', function () {
  const image = document.getElementById('report-image');
  const zoomSlider = document.getElementById('zoom-slider');
  const zoomValue = document.getElementById('zoom-value');
  const zoomIn = document.getElementById('zoom-in');
  const zoomOut = document.getElementById('zoom-out');

  // Function to update zoom level
  function updateZoom(zoomLevel) {
    zoomSlider.value = zoomLevel;
    image.style.transform = `scale(${zoomLevel / 100})`;
    zoomValue.textContent = `${zoomLevel}%`;
  }

  // Handle slider change
  zoomSlider.addEventListener('input', function () {
    const zoomLevel = parseInt(zoomSlider.value, 10);
    updateZoom(zoomLevel);
  });

  // Handle Zoom In button
  zoomIn.addEventListener('click', function () {
    let zoomLevel = parseInt(zoomSlider.value, 10);
    if (zoomLevel < 200) {
      zoomLevel += 10;
      updateZoom(zoomLevel);
    }
  });

  // Handle Zoom Out button
  zoomOut.addEventListener('click', function () {
    let zoomLevel = parseInt(zoomSlider.value, 10);
    if (zoomLevel > 50) {
      zoomLevel -= 10;
      updateZoom(zoomLevel);
    }
  });
});
  
  /*profile faq pages*/

  document.addEventListener("DOMContentLoaded", () => {
    const faqItems = document.querySelectorAll(".faq_item");
  
    faqItems.forEach((item) => {
      const heading = item.querySelector(".faq_heading");
      const content = item.querySelector(".faq_content");
      const icon = heading.querySelector("i");
  
      heading.addEventListener("click", () => {
        // Toggle the display of the content
        const isVisible = content.style.display === "block";
        content.style.display = isVisible ? "none" : "block";
  
        // Toggle the Font Awesome icon class
        icon.classList.toggle("fa-angle-down", isVisible);
        icon.classList.toggle("fa-angle-up", !isVisible);
      });
    });
  });