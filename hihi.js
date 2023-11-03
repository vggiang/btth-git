document.addEventListener('DOMContentLoaded', function() {
  const loginContainer = document.querySelector('.backdrop--sFK2n');
  const registerContainer = document.querySelector('.backdrop--RoWSz');
  const forgotPasswordContainer = document.querySelector('.backdrop--6flEt.backdrop--RoWSz');

  function hideAllContainers() {
    loginContainer.style.display = 'none';
    registerContainer.style.display = 'none';
    forgotPasswordContainer.style.display = 'none';
  }

  function showContainer(container) {
    container.style.display = 'block';
  }

  document.querySelector('.handle--Fre2O.active--uN0XS').addEventListener('click', function() {
    hideAllContainers();
    showContainer(loginContainer);
  });

  document.querySelector('.handle--Fre2O').addEventListener('click', function() {
    hideAllContainers();
    showContainer(registerContainer);
  });

  document.querySelector('.forgotButton--hh+ai').addEventListener('click', function() {
    hideAllContainers();
    showContainer(forgotPasswordContainer);
  });

  document.querySelector('.closeButton--iH9l-').addEventListener('click', function() {
    hideAllContainers();
  });
});