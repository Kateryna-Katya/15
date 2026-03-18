document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 50
    });

    // 2. Хедер при скролле
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // 3. Мобильное меню
    const burger = document.getElementById('burger-menu');
    const nav = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav__link');

    const toggleMenu = () => {
        nav.classList.toggle('nav--active');
        burger.classList.toggle('burger--active'); // Если захотите анимировать иконку
        document.body.style.overflow = nav.classList.contains('nav--active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    navLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 4. Параллакс на Hero
    document.addEventListener('mousemove', (e) => {
        const visual = document.querySelector('.hero__image-wrapper');
        if (visual) {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
            visual.style.transform = `translate(${moveX}px, ${moveY}px)`;
        }
    });

    // 5. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phone-input');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    // 6. Математическая капча
    const captchaLabel = document.getElementById('captcha-label');
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    const correctAnswer = num1 + num2;
    captchaLabel.textContent = `Сколько будет ${num1} + ${num2}?`;

    // 7. Обработка формы (AJAX имитация)
    const contactForm = document.getElementById('contact-form');
    const successMsg = document.getElementById('form-success');

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const captchaInput = document.getElementById('captcha-input').value;

        if (parseInt(captchaInput) !== correctAnswer) {
            alert('Неверный ответ на защитный вопрос');
            return;
        }

        const submitBtn = contactForm.querySelector('button');
        submitBtn.textContent = 'Отправка...';
        submitBtn.disabled = true;

        // Имитация задержки сервера
        setTimeout(() => {
            successMsg.style.display = 'flex';
            contactForm.reset();
        }, 1500);
    });

    // 8. Cookie Popup
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('cookie-popup--active');
    });
});