<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Консалтинг нового поколения</title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='16' y='2' width='19.8' height='19.8' transform='rotate(45 16 2)' stroke='white' stroke-width='2'/%3E%3Cpath d='M16 8V24' stroke='white' stroke-width='1.5' stroke-linecap='round'/%3E%3Cpath d='M8 16H24' stroke='white' stroke-width='1.5' stroke-linecap='round'/%3E%3Ccircle cx='16' cy='16' r='3' fill='white'/%3E%3C/svg%3E" type="image/svg+xml">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script> 
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#about" class="nav__link">О нас</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline">Связаться</a>
                <button class="burger" id="burger-menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="subtitle" data-aos="fade-down">Legal Documents</span>
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text" data-aos="fade-up" data-aos-delay="100">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
                <p data-aos="fade-up">
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                    или смартфоне), когда вы его посещаете. Это позволяет платформе 
                    <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                    (например, язык, настройки региона Франция и другие параметры) 
                    в течение определенного времени.
                </p>

                <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
                <p data-aos="fade-up">
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="legal-list" data-aos="fade-up">
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong> и обеспечивают безопасность.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт для улучшения структуры консалтинг-блога.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках работы с нашими стратегиями.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для доставки объявлений, соответствующих вашим интересам и актуальных для рынка ЕС.
                    </li>
                </ul>

                <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Обеспечение стабильной и безопасной работы платформы.</li>
                    <li>Анализ пользовательского поведения для оптимизации стратегий роста.</li>
                    <li>Персонализация контента для пользователей в Европе.</li>
                    <li>Предоставление релевантных аналитических материалов.</li>
                </ul>

                <h2 data-aos="fade-up">Ваш выбор и управление</h2>
                <p data-aos="fade-up">
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере. Однако, обратите
                    внимание: отключение строго необходимых cookie может привести к
                    некорректной работе некоторых функций сайта.
                </p>

                <h2 data-aos="fade-up">Файлы cookie третьих сторон</h2>
                <p data-aos="fade-up">
                    На некоторых страницах мы используем внешние сервисы, такие как библиотеки визуализации или аналитические инструменты. Мы рекомендуем ознакомиться с их политиками конфиденциальности.
                </p>

                <div class="contact-info-block" data-aos="fade-up">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-white">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+33189480971" class="text-white">+33189480971</a></li>
                        <li><strong>Адрес:</strong> 15 Rue de la Paix, 75002 Paris, France</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__col">
                <div class="logo footer__logo">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </div>
                <p class="footer__description">
                    Решения, которые меняют правила игры в мире стратегического консалтинга.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#expertise">Экспертиза</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#insights">Инсайты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-info">
                    <li><i class="fa-solid fa-phone"></i> +33189480971</li>
                    <li><i class="fa-solid fa-envelope"></i> hello@<?= $fullDomain ?></li>
                    <li><i class="fa-solid fa-location-dot"></i> 15 Rue de la Paix, 75002 Paris, France</li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy; <?= date('Y') ?> <?= $domainTitle ?>. Все права защищены.</p>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn--outline btn--small">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>