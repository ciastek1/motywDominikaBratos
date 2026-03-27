// Rozwijane menu
const toggleBtn = document.querySelector('.nav-toggle');
const navList = document.querySelector('.nav-list');

if (toggleBtn && navList) {
  toggleBtn.addEventListener('click', () => {
    const expanded = toggleBtn.getAttribute('aria-expanded') === 'true';
    toggleBtn.setAttribute('aria-expanded', String(!expanded));
    navList.classList.toggle('show');
  });
  navList.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth <= 768) {  
        navList.classList.remove('show');
        toggleBtn.setAttribute('aria-expanded', 'false');
      }
    });
  });
}

//formularz
const form = document.getElementById('contactForm');
const feedback = document.getElementById('formFeedback');

if (form) {
  form.addEventListener('submit', e => {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const emailInput = document.getElementById('email');
    const message = document.getElementById('message').value.trim();

    //sprawdzenie pustych pól
    if (!name || !emailInput.value.trim() || !message) {
      feedback.textContent = 'Wypełnij wszystkie pola!';
      feedback.className = 'form-message error';
      return;
    }

    //sprawdzenie poprawności e-mail
    if (!emailInput.validity.valid) {
      feedback.textContent = 'Podaj poprawny adres e-mail.';
      feedback.className = 'form-message error';
      return;
    }

    feedback.textContent = 'Twoja wiadomość została wysłana.';
    feedback.className = 'form-message success';
    form.reset();

    //komentarz znika po 3 sekundach
    setTimeout(() => {
      feedback.style.display = 'none';
    }, 3000);
  });
}