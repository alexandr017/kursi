
@include('admin.v2.includes.seo-fields')


<div class="form-group">
    <label for="content"><i class="red"></i> Контент</label>
    <?php
    $content = old('content')
        ? old('content')
        : (isset($item) ? $item->content : '');
    ?>
    <textarea class="form-control" name="content" id="content">{{$content}}</textarea>
</div>


<div class="form-group">
    <label for="status"><i class="red ">*</i> Статус</label>
    <select name="status" id="status" class="form-control" required>
        <option value="1">Включен</option>
        <option value="0">Отключен</option>
    </select>
</div>
