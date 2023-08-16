
<div class="form-group">
    <label for="category_id"><i class="red"></i> Категория</label>
    <select name="category_id" id="category_id" class="form-control">
        @foreach($categories as $id => $h1)
            <option value="{{$id}}" @if(isset($item) && $item->category_id == $id) selected @endif>{{$h1}}</option>
        @endforeach
    </select>
</div>

@include('admin.v2.includes.seo-fields')


<div class="form-group">
    <label for="url"><i class="red">*</i> URL (без https://kursy.ru/)</label>
    <input type="text" class="form-control" name="url" id="url" required
           @if(old('url'))
               value="{{old('url')}}"
           @else
               @if(isset($item))
                   value="{{$item->urls->url}}"
        @endif
        @endif
    >
</div>


<div class="form-group">
    <label for="preview"><i class="red">*</i> Превью</label>
    <input type="text" class="form-control" name="preview" id="preview" required
           @if(old('preview'))
               value="{{old('preview')}}"
           @else
               @if(isset($item))
                   value="{{$item->preview}}"
        @endif
        @endif
    >
</div>


<div class="form-group">
    <label for="author_id"><i class="red"></i> Автор</label>
    <select name="author_id" id="author_id" class="form-control">
    @foreach($employees as $id => $name)
            <option value="{{$id}}" @if(isset($item) && $item->author_id == $id) selected @endif>{{$name}}</option>
    @endforeach
    </select>
</div>


<div class="form-group">
    <label for="lead"><i class="red"></i> Лид</label>
    <?php
    $lead = old('lead')
        ? old('lead')
        : (isset($item) ? $item->lead : '');
    ?>
    <textarea class="form-control" name="lead" id="lead">{{$lead}}</textarea>
</div>


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
    <label for="rating_value">Рейтинг</label>
    <input type="number" class="form-control" name="rating_value" id="rating_value" step="0.1" min="3" max="5"
           @if(old('rating_value'))
               value="{{old('rating_value')}}"
           @else
               @if(isset($item))
                   value="{{$item->rating_value}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="rating_count">Количество голосов</label>
    <input type="number" class="form-control" name="rating_count" id="rating_count" step="1"
           @if(old('rating_count'))
               value="{{old('rating_count')}}"
           @else
               @if(isset($item))
                   value="{{$item->rating_count}}"
        @endif
        @endif
    >
</div>


<div class="form-group">
    <label for="status"><i class="red ">*</i> Статус</label>
    <select name="status" id="status" class="form-control" required>
        <option value="1" @if(isset($item) && $item->status == 1) selected @endif>Включен</option>
        <option value="0" @if(isset($item) && $item->status == 0) selected @endif>Отключен</option>
    </select>
</div>
