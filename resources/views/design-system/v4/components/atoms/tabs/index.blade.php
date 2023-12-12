<?php
includeComponent('components/atoms/button');
includeComponent('components/atoms/tabs');
?>
<div class="container">
    <div class="row" style="padding: 20px; gap:8px; background-color:#F5F6F7;">
        <button class="btn tab-label selected light" >Все</button>
        <button class="btn tab-label light" >Для детей</button>
        <button class="btn tab-label light" >Text</button>
        <button class="btn tab-label light" >Other text</button>
    </div>
    <div class="row" style="padding: 20px; gap:8px">
        <button class="btn tab-label selected dark" >Все</button>
        <button class="btn tab-label dark" >Для детей</button>
        <button class="btn tab-label dark" >Text</button>
        <button class="btn tab-label dark" >Other text</button>
    </div>
</div>
