<?php
includeComponent('components/atoms/controls');
?>
<div class="container">
    <div class="row" style="padding-top: 20px; gap:50px">
        <input type="checkbox" >
        <input type="checkbox" checked>
        <input type="checkbox" checked disabled>
        <input class="checkbox-md" type="checkbox" >
        <input class="checkbox-md" type="checkbox" checked>
        <input class="checkbox-md" type="checkbox" checked disabled>
    </div>
    <div class="row" style="padding-top: 50px; gap:20px">
        <label class="checkbox-label" for="test-1">
            <input type="checkbox" id="test-1" name="test-1">
            <span>Текст</span>
        </label>
        <label class="checkbox-label" for="test-2">
            <input type="checkbox" id="test-2" name="test-2" checked>
            <span>Текст</span>
        </label>
        <label class="checkbox-label disabled" for="test-3">
            <input type="checkbox" id="test-3" name="test-3" checked disabled>
            <span>Текст</span>
        </label>
        <label class="checkbox-label checkbox-label-md" for="test-4">
            <input type="checkbox" id="test-4" name="test-4">
            <span>Текст</span>
        </label>
        <label class="checkbox-label checkbox-label-md" for="test-5">
            <input type="checkbox" id="test-5" name="test-5" checked>
            <span>Текст</span>
        </label>
        <label class="checkbox-label checkbox-label-md disabled" for="test-6">
            <input type="checkbox" id="test-6" name="test-6" checked disabled>
            <span>Текст</span>
        </label>
    </div>
    <div class="row" style="padding-top: 50px; gap:20px">
        <label class="checkbox-label reverse" for="test-7">
            <input type="checkbox" id="test-7" name="test-7">
            <span>Текст</span>
        </label>
        <label class="checkbox-label reverse" for="test-8">
            <input type="checkbox" id="test-8" name="test-8" checked>
            <span>Текст</span>
        </label>
        <label class="checkbox-label reverse disabled" for="test-9">
            <input type="checkbox" id="test-9" name="test-9" checked disabled>
            <span>Текст</span>
        </label>
        <label class="checkbox-label reverse checkbox-label-md" for="test-10">
            <input type="checkbox" id="test-10" name="test-10">
            <span>Текст</span>
        </label>
        <label class="checkbox-label reverse checkbox-label-md" for="test-11">
            <input type="checkbox" id="test-11" name="test-11" checked>
            <span>Текст</span>
        </label>
        <label class="checkbox-label reverse checkbox-label-md disabled" for="test-12">
            <input type="checkbox" id="test-12" name="test-12" checked disabled>
            <span>Текст</span>
        </label>
    </div>



    <div class="row" style="padding-top: 50px; gap:50px">
        <input type="radio" name="test-radio">
        <input type="radio" name="test-radio" checked>
        <input type="radio" name="test-radio-checked" checked disabled>

        <input class="radio-md" type="radio" name="test-radio-md">
        <input class="radio-md" type="radio" name="test-radio-md" checked>
        <input class="radio-md" type="radio" name="test-radio-md-check" checked disabled>
    </div>
    <div class="row" style="padding-top: 50px; gap:50px">
        <label class="radio-label" for="test-13">
            <input type="radio" id="test-13" name="test-radio-label">
            <span>Текст</span>
        </label>
        <label class="radio-label" for="test-14">
            <input type="radio" id="test-14" name="test-radio-label" checked>
            <span>Текст</span>
        </label>
        <label class="radio-label disabled" for="test-15">
            <input type="radio" id="test-15" name="test-15" checked disabled>
            <span>Текст</span>
        </label>

        <label class="radio-label radio-label-md" for="test-16">
            <input type="radio" id="test-16" name="test-radio-label-md">
            <span>Текст</span>
        </label>
        <label class="radio-label radio-label-md" for="test-17">
            <input type="radio" id="test-17" name="test-radio-label-md" checked>
            <span>Текст</span>
        </label>
        <label class="radio-label radio-label-md disabled" for="test-18">
            <input type="radio" id="test-18" name="test-radio-label-md18" checked disabled>
            <span>Текст</span>
        </label>
    </div>
    <div class="row" style="padding: 50px 0; gap:50px">
        <label class="radio-label reverse" for="test-19">
            <input type="radio" id="test-19" name="test-radio-label2">
            <span>Текст</span>
        </label>
        <label class="radio-label reverse" for="test-20">
            <input type="radio" id="test-20" name="test-radio-label2" checked>
            <span>Текст</span>
        </label>
        <label class="radio-label reverse disabled" for="test-21">
            <input type="radio" id="test-21" name="test" checked disabled>
            <span>Текст</span>
        </label>

        <label class="radio-label reverse radio-label-md" for="test-22">
            <input type="radio" id="test-22" name="test-radio-label-md2">
            <span>Текст</span>
        </label>
        <label class="radio-label reverse radio-label-md" for="test-23">
            <input type="radio" id="test-23" name="test-radio-label-md2" checked>
            <span>Текст</span>
        </label>
        <label class="radio-label reverse radio-label-md disabled" for="test-24">
            <input type="radio" id="test-24" name="test-radio-label-md3" checked disabled>
            <span>Текст</span>
        </label>
    </div>
</div>
