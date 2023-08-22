
@include('admin.v2.includes.seo-fields')


<div class="form-group">
    <label for="lead"><i class="lead"></i> Лид</label>
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
    <label for="rating_value">Значение рейтинг</label>
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
