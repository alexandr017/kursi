<?php
includeComponent('components/atoms/controls');
includeComponent('components/molecules/dropdown-list1');
?>
<div style="background: #F5F6F7; padding: 50px 0;">
    <div class="container">
        <div class="dropdown-list">
            <label class="radio-label reverse" for="sort-type-1" checked >
                <input type="radio" id="sort-type-1" name="sort-type">
                <span>Популярные</span>
            </label>
            <label class="radio-label reverse" for="sort-type-2">
                <input type="radio" id="sort-type-2" name="sort-type">
                <span>Высокий рейтинг</span>
            </label>
            <label class="radio-label reverse" for="sort-type-3">
                <input type="radio" id="sort-type-3" name="sort-type">
                <span>Сначала дешевые</span>
            </label>
            <label class="radio-label reverse" for="sort-type-4">
                <input type="radio" id="sort-type-4" name="sort-type">
                <span>Сначала дорогие</span>
            </label>
            <label class="radio-label reverse" for="sort-type-5">
                <input type="radio" id="sort-type-5" name="sort-type">
                <span>По размеру скидки</span>
            </label>
        </div>
    </div>
</div>

