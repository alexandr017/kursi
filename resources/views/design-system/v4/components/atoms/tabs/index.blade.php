<?php
includeComponent('components/atoms/tabs');
?>
<div class="container">
    <div class="row" style="padding: 20px; gap:8px; background-color:#F5F6F7;">
        <button class="btn tab-label selected light" >Все</button>
        <button class="btn tab-label light" >Для детей</button>
        <button class="btn tab-label light" >Text</button>
        <button class="btn tab-label light" >Other text</button>

{{--
        <input class="tab-item" id="all" type="radio" name="all" checked>
        <label class="tab-label selected light" for="all">Все</label>

        <input class="tab-item" id="for-child" type="radio" name="for-child">
        <label class="tab-label light" for="for-child">Для детей</label>

        <input class="tab-item" id="text" type="radio" name="text">
        <label class="tab-label light" for="text">Text</label>

        <input class="tab-item" id="other-text" type="radio" name="other-text">
        <label class="tab-label light" for="other-text">Other text</label>
        --}}
    </div>
    <div class="row" style="padding: 20px; gap:8px">
        <button class="btn tab-label selected dark" >Все</button>
        <button class="btn tab-label dark" >Для детей</button>
        <button class="btn tab-label dark" >Text</button>
        <button class="btn tab-label dark" >Other text</button>

{{--
        <input class="tab-item" id="all2" type="radio" name="all2" checked>
        <label class="tab-label selected dark" for="all2">Все</label>

        <input class="tab-item" id="for-child2" type="radio" name="for-child2">
        <label class="tab-label dark" for="for-child2">Для детей</label>

        <input class="tab-item" id="text2" type="radio" name="text2">
        <label class="tab-label dark" for="text2">Text</label>

        <input class="tab-item" id="other-text2" type="radio" name="other-text2">
        <label class="tab-label dark" for="other-text2">Other text</label>
        --}}
    </div>
</div>
