<?php
includeComponent('components/molecules/filter-select');
includeComponent('components/atoms/subnavigation');

includeComponent("components/organisms/filter");
?>
<div style="background: #EAECEE; padding: 50px 0;">
    <div class="container">
        <button class="btn btn-icon btn-filter hidden">
            <svg class="bi bi-filter" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.7533 13.3193C12.7533 12.8196 12.9483 12.3403 13.2953 11.9869C13.6424 11.6335 14.1131 11.435 14.6039 11.435C15.0948 11.435 15.5655 11.6335 15.9125 11.9869C16.2596 12.3403 16.4546 12.8196 16.4546 13.3193C16.4546 13.8191 16.2596 14.2983 15.9125 14.6517C15.5655 15.0051 15.0948 15.2036 14.6039 15.2036C14.1131 15.2036 13.6424 15.0051 13.2953 14.6517C12.9483 14.2983 12.7533 13.8191 12.7533 13.3193ZM12.7533 13.3193C9.13965 13.3193 3.5 13.3193 3.5 13.3193M7.24673 6.68095C7.24673 7.1807 7.05175 7.65998 6.70468 8.01336C6.35762 8.36673 5.8869 8.56525 5.39607 8.56525C4.90525 8.56525 4.43453 8.36673 4.08747 8.01336C3.7404 7.65998 3.54542 7.1807 3.54542 6.68095C3.54542 6.1812 3.7404 5.70192 4.08747 5.34855C4.43453 4.99517 4.90525 4.79665 5.39607 4.79665C5.8869 4.79665 6.35762 4.99517 6.70468 5.34855C7.05175 5.70192 7.24673 6.1812 7.24673 6.68095ZM7.24673 6.68095C10.8604 6.68095 16.5 6.68095 16.5 6.68095" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Фильтры</span>
            <span class="counter"></span>
        </button>
        <div class="filter-list">
            <div class="filter-mobile-header" >
                <span class="filter-header-title">Фильтры</span>
                <svg class="filter-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </div>

            <details class="list-controls" data-filter-category="price">
                <summary class="list-controls-header" tabindex="0">
                    <span class="list-controls-title">Стоимость</span>
                    <svg class="list-controls-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 12.75L10 7.25L4.5 12.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </summary>
                <div class="list-controls-content">
                    <label class="checkbox-label" >
                        <input type="checkbox" data-price="10000" >
                        <span>Меньше 10 000 ₽</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-price="20000" >
                        <span>10 000 – 20 000 ₽</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-price="50000" >
                        <span>20 000 – 50 000 ₽</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-price="100000" >
                        <span>50 000 – 100 000 ₽</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-price="1000000" >
                        <span>Больше 100 000 ₽</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-price="0">
                        <span>Бесплатно</span>
                    </label>
                </div>
            </details>

            <details class="list-controls" data-filter-category="duration">
                <summary class="list-controls-header" tabindex="0">
                    <span class="list-controls-title">Длительность</span>
                    <svg class="list-controls-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 12.75L10 7.25L4.5 12.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </summary>
                <div class="list-controls-content">
                    <label class="checkbox-label">
                        <input type="checkbox" data-duration="0" value="min">
                        <span>Меньше месяца</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-duration="3" value="3">
                        <span>1 – 3 месяца</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-duration="6" value="6">
                        <span>3 – 6 месяцев</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-duration="12" value="12">
                        <span>6 – 12 месяцев</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-duration="100" value="max">
                        <span>от 12 месяцев</span>
                    </label>
                </div>
            </details>

            <details class="list-controls" data-filter-category="difficulty">
                <summary class="list-controls-header" tabindex="0">
                    <span class="list-controls-title">Сложность</span>
                    <svg class="list-controls-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 12.75L10 7.25L4.5 12.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </summary>
                <div class="list-controls-content">
                    <label class="radio-label">
                        <input type="radio" name="difficulty" data-difficulty="all" value="all" checked>
                        <span>Любая</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="difficulty" data-difficulty="beginner" value="beginner">
                        <span>Начинающим</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="difficulty" data-difficulty="pro" value="pro">
                        <span>Продвинутым</span>
                    </label>
                </div>
            </details>

            <details class="list-controls" data-filter-category="training">
                <summary class="list-controls-header" tabindex="0">
                    <span class="list-controls-title">Тип обучения</span>
                    <svg class="list-controls-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 12.75L10 7.25L4.5 12.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </summary>
                <div class="list-controls-content">
                    <label class="checkbox-label" >
                        <input type="checkbox" data-training="webinar" value="webinar">
                        <span>Вебинар</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-training="course" value="course">
                        <span>Курс</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-training="profession" value="profession">
                        <span>Профессия</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-training="training" value="training">
                        <span>Повышение квалификации</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-training="retraining" value="retraining">
                        <span>Профпереподготовка</span>
                    </label>
                </div>
            </details>

            <details class="list-controls" data-filter-category="format">
                <summary class="list-controls-header" tabindex="0">
                    <span class="list-controls-title">Формат</span>
                    <svg class="list-controls-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 12.75L10 7.25L4.5 12.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </summary>
                <div class="list-controls-content">
                    <label class="checkbox-label" >
                        <input type="checkbox" data-format="record" value="record">
                        <span>В записи</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-format="online" value="online">
                        <span>Онлайн</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" data-format="offline" value="offline">
                        <span>Офлайн</span>
                    </label>
                </div>
            </details>

            <details class="list-controls" data-filter-category="schedule">
                <summary class="list-controls-header" tabindex="0">
                    <span class="list-controls-title">График</span>
                    <svg class="list-controls-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 12.75L10 7.25L4.5 12.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </summary>
                <div class="list-controls-content">
                    <label class="radio-label">
                        <input type="radio" name="schedule" data-schedule="all" value="all" checked>
                        <span>Любой</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="schedule" data-schedule="schedule" value="schedule">
                        <span>Есть расписание</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="schedule" data-schedule="free" value="free">
                        <span>Свободный график</span>
                    </label>
                </div>
            </details>

            <div class="filter-common-list">
                <div class="list-controls-header">Прочее</div>
                <label class="checkbox-label">
                    <input type="checkbox" data-filter-category="installment" data-installment="1" value="1">
                    <span>Рассрочка</span>
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" data-filter-category="online" data-online="1" value="1">
                    <span>Пробный период</span>
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" data-filter-category="certificate" data-certificate="1" value="1">
                    <span>Сертификат или диплом</span>
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" data-filter-category="employment" data-employment="1" value="1">
                    <span>Трудоустройство</span>
                </label>
            </div>
            <div class="filter-btn-wrapper">
                <button class="btn btn-primary btn-wide btn-show-courses hidden">Показать <span>&nbsp;XX курсов</span></button>
                <button type="reset" class="btn btn-secondary-dark btn-md btn-wide btn-reset-courses hidden">Очистить фильтры</button>
            </div>
        </div>
    </div>
</div>
