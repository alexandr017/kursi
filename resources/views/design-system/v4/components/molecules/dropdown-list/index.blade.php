<?php
includeComponent('components/molecules/dropdown-list');
?>
<div class="container">
    <div class="row" style="padding: 50px; background: #f5f6f7;">
        <ul class="dropdown-list">
            <li class="option selected" data-type="up" data-field="km5">Популярные</li>
            <li class="option" data-type="down" data-field="percent_min">Высокий рейтинг</li>
            <li class="option disabled" data-type="up" data-field="sum_max">Сначала дешевые</li>
            <li class="option" data-type="up" data-field="sum_max">Сначала дорогие</li>
            <li class="option" data-type="up" data-field="sum_max">По размеру скидки</li>
        </ul>
    </div>
</div>
