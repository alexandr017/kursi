
<div class="form-group">
    <label for="name"><i class="red">*</i> Название</label>
    <input type="text" class="form-control" name="name" id="name" required
           @if(old('name'))
               value="{{old('name')}}"
           @else
               @if(isset($item))
                   value="{{$item->name}}"
        @endif
        @endif
    >
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
    <label for="logo"><i class="red">*</i> Превью</label>
    <input type="text" class="form-control" name="logo" id="logo" required
           @if(old('logo'))
               value="{{old('logo')}}"
           @else
               @if(isset($item))
                   value="{{$item->logo}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email"
           @if(old('email'))
               value="{{old('email')}}"
           @else
               @if(isset($item))
                   value="{{$item->email}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="hotline">Горячая линия</label>
    <input type="text" class="form-control" name="hotline" id="hotline"
           @if(old('hotline'))
               value="{{old('hotline')}}"
           @else
               @if(isset($item))
                   value="{{$item->hotline}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="hotline">Ссылка на сайт</label>
    <input type="url" class="form-control" name="link" id="link"
           @if(old('link'))
               value="{{old('link')}}"
           @else
               @if(isset($item))
                   value="{{$item->link}}"
        @endif
        @endif
    >
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
