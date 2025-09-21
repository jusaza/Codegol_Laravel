  const items = document.querySelectorAll('.galeria .item');
  const modal = document.querySelector('.modal');
  const modalImg = document.getElementById('modal-img');
  const modalDesc = document.getElementById('modal-desc');
  const modalClose = document.querySelector('.modal-close');
  const modalPrev = document.querySelector('.modal-prev');
  const modalNext = document.querySelector('.modal-next');
  let currentImages = [], currentIndex = 0;

  items.forEach(item => {
    item.addEventListener('click', () => {
      currentImages = item.dataset.imgs.split(',').map(img => img.trim());
      currentIndex = 0;
      showImage();
      modalDesc.textContent = item.dataset.text;
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  function showImage() {
    modalImg.src = currentImages[currentIndex];
    modalImg.alt = modalDesc.textContent + ' ' + (currentIndex + 1);
  }

  modalPrev.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      showImage();
    }
  });

  modalNext.addEventListener('click', () => {
    if (currentIndex < currentImages.length - 1) {
      currentIndex++;
      showImage();
    }
  });

  modalClose.addEventListener('click', closeModal);
  modal.addEventListener('click', e => {
    if (e.target === modal) closeModal();
  });

  window.addEventListener('keydown', e => {
    if (e.key === 'Escape' && modal.classList.contains('active')) closeModal();
  });

  function closeModal() {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }