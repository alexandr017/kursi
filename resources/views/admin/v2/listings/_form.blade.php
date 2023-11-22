
<div class="form-group">
    <label for="parent_id">ID родительского листинга</label>
    <input type="text" class="form-control" name="parent_id" id="parent_id"
           @if(old('parent_id'))
               value="{{old('parent_id')}}"
           @else
               @if(isset($item))
                   value="{{$item->parent_id}}"
        @endif
        @endif
    >
</div>

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


<div class="form-group">
    <label for="meta_title"><i class="red">*</i> Title</label>
    <input type="text" class="form-control" name="meta_title" id="meta_title" required
           @if(old('meta_title'))
               value="{{old('meta_title')}}"
           @else
               @if(isset($item))
                   value="{{$item->meta_title}}"
            @endif
            @endif
    >
</div>

<div class="form-group">
    <label for="meta_description"><i class="red">*</i> Мета описание</label>
    <?php
    $meta_description = old('meta_description')
        ? old('meta_description')
        : (isset($item) ? $item->meta_description : '');
    ?>
    <textarea class="form-control" name="meta_description" id="meta_description" required>{{$meta_description}}</textarea>
</div>

<div class="form-group">
    <label for="h1"><i class="red">*</i> h1</label>
    <input type="text" class="form-control" name="h1" id="h1" required
           @if(old('h1'))
               value="{{old('h1')}}"
           @else
               @if(isset($item))
                   value="{{$item->h1}}"
            @endif
            @endif
    >
</div>

<div class="form-group">
    <label for="breadcrumbs"><i class="red">*</i> Хлебные крошки</label>
    <?php
    $breadcrumbs = old('breadcrumbs')
        ? old('breadcrumbs')
        : (isset($item) ? $item->breadcrumbs : '');
    ?>
    <textarea class="form-control" name="breadcrumbs" id="breadcrumbs" required>{{$breadcrumbs}}</textarea>
</div>

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
    <label for="author_id"><i class="red"></i> Автор</label>
    <select name="author_id" id="author_id" class="form-control">
        @foreach($employees as $id => $name)
            <option value="{{$id}}" @if(isset($item) && $item->author_id == $id) selected @endif>{{$name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="preview"><i class="red">*</i> Превью</label>
    <input type="text" class="form-control" name="preview" id="preview" required
           @if(old('photo'))
               value="{{old('photo')}}"
           @else
               @if(isset($item))
                   value="{{$item->photo}}"
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

@include('admin.v2.includes.rating')

'rating_sum' => [],

<div class="form-group">
    <label for="status"><i class="red ">*</i> Статус</label>
    <select name="status" id="status" class="form-control" required>
        <option value="1" @if(isset($item) && $item->status == 1) selected @endif>Включен</option>
        <option value="0" @if(isset($item) && $item->status == 0) selected @endif>Отключен</option>
    </select>
</div>

@section('additional-scripts')
    @parent
    <script>
        window.CKEDITOR_elements = ['lead', 'content'];
    </script>
    <script src="/admin/modules/ckeditor/ckeditor.js"></script>
    <script src="/admin/modules/ckeditor/config.js"></script>
@endsection
