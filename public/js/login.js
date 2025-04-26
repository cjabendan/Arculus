function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
  }

  function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
    const url = new URL(window.location.href);
    url.searchParams.delete('login');
    window.history.replaceState({}, document.title, url.toString());
  }

  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }
  if (getQueryParam('login') === 'true') {
    openModal('login-modal');
  }

  function closeOnOutsideClick(event, modalId) {
    const modal = document.getElementById(modalId);
    if (event.target === modal) {
      closeModal(modalId);
    }
  }