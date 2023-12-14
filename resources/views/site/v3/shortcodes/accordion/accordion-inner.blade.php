<?php $accordionID = rand(1,10000); ?>
<div class="accordion_item">
    <input type="checkbox" name="" value="" id="accordion_item_{{$accordionID}}">
    <label class="accordion_item-title" for="accordion_item_{{$accordionID}}">
        <div class="text"><h3>{{$title}}</h3></div>
        <p class="arrow"></p>
    </label>
    <div class="accordion_item-text">
        {!! $content !!}
    </div>
</div>
