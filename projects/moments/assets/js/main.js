

// Modal Gallery show

function galleryOpen(e){
  const src = e.target.getAttribute("src");
  const modalImg = document.querySelector(".img-modal");
  modalImg.src = src;
  const myModal = new bootstrap.Modal(document.getElementById("galleryModal"));

  myModal.show();
}