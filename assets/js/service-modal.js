document.addEventListener('DOMContentLoaded', function () {
  // Delegated click handler for any element that carries service data attributes
  document.body.addEventListener('click', function (e) {
    const btn = e.target.closest('[data-service-title]');
    if (!btn) return;

    const title = btn.getAttribute('data-service-title') || '';
    const desc = btn.getAttribute('data-service-desc') || '';
    const modalEl = document.getElementById('serviceModal');
    if (!modalEl) return;

    const modalTitle = modalEl.querySelector('.modal-title');
    const modalBody = modalEl.querySelector('.modal-body');

    if (modalTitle) modalTitle.textContent = title;
    if (modalBody) modalBody.innerHTML = desc;

    // Show the Bootstrap 5 modal
    const bsModal = bootstrap.Modal.getOrCreateInstance(modalEl);
    bsModal.show();
  });
});