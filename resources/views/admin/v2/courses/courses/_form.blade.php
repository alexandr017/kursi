<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="form-group">
    <label for="title"><i class="red">*</i> Название</label>
    <input type="text" class="form-control" name="title" id="title" required
           @if(old('title'))
               value="{{old('title')}}"
           @else
               @if(isset($item))
                   value="{{$item->title}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="company_id"><i class="red"></i> Школа</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach($companies as $id => $h1)
            <option value="{{$id}}" @if(isset($item) && $item->company_id == $id) selected @endif>{{$h1}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label><i class="red"></i> Листинг </label> <br>
    <input type="text" id="searchListings" placeholder="Поиск по листингам ">
    <div class="checkbox-container" style="height: 200px; overflow: auto;">
        @foreach($listings as $id => $h1)
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="listings[]" value="{{$id}}" @if(isset($item) && $item->listings->pluck('id')->contains($id)) checked @endif>
                    {{$h1}}
                </label>
            </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function() {
        // Add an event listener for the input field
        $('#searchListings').on('input', function() {
            let searchTerm = $(this).val().toLowerCase();

            // Loop through checkboxes and hide/show based on the search term
            $('.checkbox-container .checkbox').each(function() {
                let listingName = $(this).text().toLowerCase();
                if (listingName.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

<br>
<div class="form-group">
    <label> Теги </label>
    @foreach($tags as $tag)
        <div class="checkbox">
            <label>
                <input type="checkbox" name="tags[]" value="{{$tag->id}}" @if(isset($item) && $item->tags->pluck('id')->contains($tag->id)) checked @endif>
                {{$tag->name}}
            </label>
        </div>
    @endforeach
</div>

<div class="form-group">
external_id ?
</div>

<div class="form-group">
    <label for="description_course">Описание </label>
    <?php
    $description_course = old('description_course')
        ? old('description_course')
        : (isset($item) ? $item->description_course : '');
    ?>
    <textarea class="form-control" name="description_course" id="description_course">{{$description_course}}</textarea>
</div>

<div class="form-group">
    <label for="statistics_link"> Ссылка Keitaro </label>
    <input type="text" class="form-control" name="statistics_link" id="statistics_link"
           @if(old('statistics_link'))
               value="{{old('statistics_link')}}"
           @else
               @if(isset($item))
                   value="{{$item->statistics_link}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="affiliate_link"> Партнерская ссылка </label>
    <input type="text" class="form-control" name="affiliate_link" id="affiliate_link"
           @if(old('affiliate_link'))
               value="{{old('affiliate_link')}}"
           @else
               @if(isset($item))
                   value="{{$item->affiliate_link}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="link"><i class="red ">*</i> Ссылка </label>
    <input type="text" class="form-control" name="link" id="link" required
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
    <label for="link_type"><i class="red ">*</i> Тип ссылки </label>
    <select name="link_type" id="link_type" class="form-control" required>
        <option value="affiliate_link" @if((isset($item) && $item->link_type == 'affiliate_link') || !isset($item)) selected @endif>Партнерская ссылка</option>
        <option value="statistics_link" @if(isset($item) && $item->link_type == 'statistics_link') selected @endif>Ссылка Keitaro</option>
        <option value="link" @if(isset($item) && $item->link_type == 'link') selected @endif>Ссылка</option>
    </select>
</div>

{{--<div class="form-group">--}}
{{--    <label for="direct_link"><i class="red">*</i> direct_link</label>--}}
{{--    <input type="text" class="form-control" name="direct_link" id="direct_link" required--}}
{{--           @if(old('direct_link'))--}}
{{--               value="{{old('direct_link')}}"--}}
{{--           @else--}}
{{--               @if(isset($item))--}}
{{--                   value="{{$item->direct_link}}"--}}
{{--        @endif--}}
{{--        @endif--}}
{{--    >--}}
{{--</div>--}}

<div class="form-group">
    <label for="no_duration"> Нет длительности </label>
    <br>
    <label>
        <input type="checkbox" id="no_duration" name="no_duration"
               @if(isset($item) && $item->no_duration) checked @endif
        >
    </label>
</div>

<div class="form-group">
    <label for="duration"> Продолжительность </label>
    <input type="number" class="form-control" name="duration" id="duration"
           @if(old('duration'))
               value="{{old('duration')}}"
           @else
               @if(isset($item))
                   value="{{$item->duration}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="duration_month">Продолжительность в месяцах </label>
    <input type="text" class="form-control" name="duration_month" id="duration_month"
           @if(old('duration_month'))
               value="{{old('duration_month')}}"
           @else
               @if(isset($item))
                   value="{{$item->duration_month}}"
            @endif
            @endif
    >
</div>



<div class="form-group">
    <label for="duration_type"> Продолжительность (еденицы измерения)</label>
    <select name="duration_type" id="duration_type" class="form-control">
        <option value="lesson" @if(isset($item) && $item->duration_type == 'lesson') selected @endif>Кол-во уроков</option>
        <option value="clock" @if(isset($item) && $item->duration_type == 'clock') selected @endif>Кол-во часов</option>
        <option value="day" @if(isset($item) && $item->duration_type == 'day') selected @endif>Кол-во дней</option>
        <option value="mounth" @if(isset($item) && $item->duration_type == 'mounth') selected @endif>Кол-во месяцев</option>
        <option value="year" @if(isset($item) && $item->duration_type == 'year') selected @endif>Кол-во годов</option>
        <option value="week" @if(isset($item) && $item->duration_type == 'week') selected @endif>Кол-во в неделях</option>
    </select>
</div>


<div class="form-group">
    <label for="cost"><i class="red">*</i> Стоимость</label>
    <input type="text" class="form-control" name="cost" id="cost" required
           @if(old('cost'))
               value="{{old('cost')}}"
           @else
               @if(isset($item))
                   value="{{$item->cost}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="sale_value">Скидка</label>
    <input type="number" class="form-control" name="sale_value" id="sale_value"
           @if(old('sale_value'))
               value="{{old('sale_value')}}"
           @else
               @if(isset($item))
                   value="{{$item->sale_value}}"
           @else value="0"

            @endif
            @endif
    >
</div>

<div class="form-group">
    <label for="sale_cost"> Значение со скидки</label> <?php // todo разобраться с полями скидок ?>
    <input type="number" class="form-control" name="sale_cost" id="sale_cost"
           @if(old('sale_cost'))
               value="{{old('sale_cost')}}"
           @else
               @if(isset($item))
                   value="{{$item->sale_cost}}"
           @else value="0"

            @endif
            @endif
    >
</div>

<div class="form-group">
    <label for="payment_value">Стоимость платежа</label>
    <input type="text" class="form-control" name="payment_value" id="payment_value"
           @if(old('payment_value'))
               value="{{old('payment_value')}}"
           @else
               @if(isset($item))
                   value="{{$item->payment_value}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="currency"><i class="red">*</i> Валюта</label>
    <input type="text" class="form-control" name="currency" id="currency" required
           @if(old('currency'))
               value="{{old('currency')}}"
           @else
               @if(isset($item))
                   value="{{$item->currency}}"
                @else value="RUB"
            @endif
            @endif
    >
</div>



<div class="form-group">
    <label for="payment_type">Тип оплаты</label>
    <select name="payment_type" id="payment_type" class="form-control">
        <option value="1" @if(isset($item) && $item->payment_type == 1) selected @endif>Включен</option>
        <option value="0" @if((isset($item) && $item->payment_type == 0) || !isset($item)) selected @endif>Отключен</option>
    </select>
</div>

<div class="form-group">
    <label for="is_cost_by_query">Стоимость по запросу</label>
    <select name="is_cost_by_query" id="is_cost_by_query" class="form-control">
        <option value="1" @if(isset($item) && $item->is_cost_by_query == 1) selected @endif>Да</option>
        <option value="0" @if((isset($item) && $item->is_cost_by_query == 0) || !isset($item)) selected @endif>Нет</option>
    </select>
</div>


<div class="form-group">
    <label for="reviews_count"> Количество отзывов</label>
    <input type="number" class="form-control" name="reviews_count" id="reviews_count"
           @if(old('reviews_count'))
               value="{{old('reviews_count')}}"
           @else
               @if(isset($item))
                   value="{{$item->reviews_count}}"
           @else value="0"
            @endif
            @endif
    >
</div>

<div class="form-group">
    <label for="installment_period">Период рассрочки</label>
    <input type="number" class="form-control" name="installment_period" id="installment_period"
           @if(old('installment_period'))
               value="{{old('installment_period')}}"
           @else
               @if(isset($item))
                   value="{{$item->installment_period}}"
           @else value="0"
            @endif
            @endif
    >
</div>

<div class="form-group">
    <label for="installment_payment">Платеж по рассрочке</label>
    <input type="number" class="form-control" name="installment_payment" id="installment_payment"
           @if(old('installment_payment'))
               value="{{old('installment_payment')}}"
           @else
               @if(isset($item))
                   value="{{$item->installment_payment}}"
           @else value="0"

            @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="duration_in_hours"> Продолжительность в часах</label>
    <input type="number" class="form-control" name="duration_in_hours" id="duration_in_hours"
           @if(old('duration_in_hours'))
               value="{{old('duration_in_hours')}}"
           @else
               @if(isset($item))
                   value="{{$item->duration_in_hours}}"
           @else value="0"

            @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="is_popular"> Популярный</label>
    <select name="is_popular" id="is_popular" class="form-control">
        <option value="0" @if((isset($item) && $item->is_popular == 0) || !isset($item)) selected @endif>Нет</option>
        <option value="1" @if(isset($item) && $item->is_popular == 1) selected @endif>Да</option>
    </select>
</div>

<div class="form-group">
    <label for="is_best"> Лучший</label>
    <select name="is_best" id="is_best" class="form-control">
        <option value="0" @if((isset($item) && $item->is_best == 0) || !isset($item)) selected @endif>Нет</option>
        <option value="1" @if(isset($item) && $item->is_best == 1) selected @endif>Да</option>
    </select>
</div>

<div class="form-group">
    <label for="has_promotion"> Имеет продвижение</label>
    <select name="has_promotion" id="has_promotion" class="form-control">
        <option value="0" @if((isset($item) && $item->has_promotion == 0) || !isset($item)) selected @endif>Нет</option>
        <option value="1" @if(isset($item) && $item->has_promotion == 1) selected @endif>Да</option>
    </select>
</div>

<div class="form-group">
    <label for="direction">Направление</label>
    <select name="direction" id="direction" class="form-control">
        <option value="1" @if(isset($item) && $item->direction == '1') selected @endif>Администрирование</option>
        <option value="2" @if(isset($item) && $item->direction == '2') selected @endif>Аналитика</option>
        <option value="3" @if(isset($item) && $item->direction == '3') selected @endif>Дизайн</option>
        <option value="4" @if(isset($item) && $item->direction == '4') selected @endif>Иностранные языки</option>
        <option value="5" @if(isset($item) && $item->direction == '5') selected @endif>Красота и здоровье</option>
        <option value="6" @if(isset($item) && $item->direction == '6') selected @endif>Маркетинг</option>
        <option value="7" @if(isset($item) && $item->direction == '7') selected @endif>Менеджмент</option>
        <option value="8" @if(isset($item) && $item->direction == '8') selected @endif>Прикладные программы</option>
        <option value="9" @if(isset($item) && $item->direction == '9') selected @endif>Программирование</option>
        <option value="10" @if(isset($item) && $item->direction == '10') selected @endif>Рукоделие</option>
        <option value="11" @if(isset($item) && $item->direction == '11') selected @endif>Саморазвитие</option>
        <option value="12" @if(isset($item) && $item->direction == '12') selected @endif>Спорт</option>
        <option value="13" @if(isset($item) && $item->direction == '13') selected @endif>Творчество и контент</option>
        <option value="14" @if(isset($item) && $item->direction == '14') selected @endif>Финансы</option>
        <option value="15" @if(isset($item) && $item->direction == '15') selected @endif>Другое</option>
        <option value="16" @if(isset($item) && $item->direction == '16') selected @endif>Для детей </option>
        <option value="17" @if(isset($item) && $item->direction == '17') selected @endif>Бесплатные</option>
        <option value='' @if(isset($item) && $item->direction == null) selected @endif>Не определено</option>
    </select>
</div>

<div class="form-group">
    <label for="complexity">Сложность</label>
    <select name="complexity" id="complexity" class="form-control">
        <option value="1" @if(isset($item) && $item->complexity == '1') selected @endif>Не определено</option>
        <option value="2" @if(isset($item) && $item->complexity == '2') selected @endif>Начинающим</option>
        <option value="3" @if(isset($item) && $item->complexity == '3') selected @endif>Продвинутым</option>
    </select>
</div>

<div class="form-group">
    <label for="learning_type">Тип обучения</label>
    <select name="learning_type" id="learning_type" class="form-control">
        <option value="1" @if(isset($item) && $item->learning_type == '1') selected @endif>Вебинар</option>
        <option value="2" @if(isset($item) && $item->learning_type == '2') selected @endif>Курс</option>
        <option value="3" @if(isset($item) && $item->learning_type == '3') selected @endif>Профессия</option>
        <option value="4" @if(isset($item) && $item->learning_type == '4') selected @endif>Повышение квалификации</option>
        <option value="5" @if(isset($item) && $item->learning_type == '5') selected @endif>Профпереподготовка</option>
        <option value="" @if(isset($item) && $item->learning_type == null) selected @endif>Не в списке</option>
    </select>
</div>

<div class="form-group">
    <label for="format_learning_type">Формат обучения</label>
    <select name="format_learning_type" id="format_learning_type" class="form-control">
        <option value="1" @if(isset($item) && $item->format_learning_type == '1') selected @endif>В записи</option>
        <option value="2" @if(isset($item) && $item->format_learning_type == '2') selected @endif>Онлайн</option>
        <option value="3" @if(isset($item) && $item->format_learning_type == '3') selected @endif>Офлайн</option>
        <option value="" @if(isset($item) && $item->format_learning_type == null) selected @endif>Не в списке</option>
    </select>
</div>

<div class="form-group">
    <label for="chart">График</label>
    <select name="chart" id="chart" class="form-control">
        <option value="1" @if(isset($item) && $item->chart == '1') selected @endif>не определено</option>
        <option value="2" @if(isset($item) && $item->chart == '2') selected @endif>Есть расписание</option>
        <option value="3" @if(isset($item) && $item->chart == '3') selected @endif>Свободный график</option>
    </select>
</div>

<div class="form-group">
    <label for="employment">Трудоустройство</label>
    <select name="employment" id="employment" class="form-control">
        <option value="1" @if(isset($item) && $item->employment == '1') selected @endif>Нет</option>
        <option value="2" @if(isset($item) && $item->employment == '2') selected @endif>Гарантия трудоустройства</option>
        <option value="3" @if(isset($item) && $item->employment == '3') selected @endif>Помощь в трудоустройстве</option>
    </select>
</div>

<div class="form-group">
    <label for="document_type">Документ об окончание</label>
    <select name="document_type" id="document_type" class="form-control">
        <option value="1" @if(isset($item) && $item->document_type == '1') selected @endif>Нет</option>
        <option value="2" @if(isset($item) && $item->document_type == '2') selected @endif>Сертификат</option>
        <option value="3" @if(isset($item) && $item->document_type == '3') selected @endif>Диплом</option>
        <option value="4" @if(isset($item) && $item->document_type == '4') selected @endif>Диплом государственного образца</option>
        <option value="5" @if(isset($item) && $item->document_type == '5') selected @endif>Удостоверение о повышении квалификации</option>
        <option value="6" @if(isset($item) && $item->document_type == '6') selected @endif>Диплом о профессиональной переподготовке</option>
        <option value="7" @if(isset($item) && $item->document_type == '7') selected @endif>Удостоверение о повышении квалификации и диплом о прохождении курса</option>
    </select>
</div>

<div class="form-group">
    <label for="access">Доступ после прохождения</label>
    <select name="access" id="access" class="form-control">
        <option value="0" @if(isset($item) && ($item->access == '0' || $item->access == null )) selected @endif>Нет</option>
        <option value="1" @if(isset($item) && $item->access == '1') selected @endif>Есть</option>
    </select>
</div>

<div class="form-group">
    <label for="portfolio">Портфолио</label>
    <select name="portfolio" id="portfolio" class="form-control">
        <option value="0" @if(isset($item) && ($item->portfolio == '0' || $item->portfolio == null )) selected @endif>Нет</option>
        <option value="1" @if(isset($item) && $item->portfolio == '1') selected @endif>Есть</option>
    </select>
</div>


<div class="form-group">
    <label for="trial_period">Пробный период</label>
    <select name="trial_period" id="trial_period" class="form-control">
        <option value="0" @if(isset($item) && ($item->trial_period == '0' || $item->trial_period == null )) selected @endif>Нет</option>
        <option value="1" @if(isset($item) && $item->trial_period == '1') selected @endif>Есть</option>
    </select>
</div>


<div class="form-group">
    <label for="free_status">Бесплатный </label>
    <select name="free_status" id="free_status" class="form-control">
        <option value="0" @if(isset($item) && ($item->free_status == '0' || $item->trial_period == null )) selected @endif>Нет</option>
        <option value="1" @if(isset($item) && $item->free_status == '1') selected @endif>Да</option>
    </select>
</div>


<div class="form-group">
    <label for="tools"> Инструменты </label>
    <?php
    $tools = old('tools')
        ? old('tools')
        : (isset($item) ? $item->tools : '');
    ?>
    <textarea class="form-control" name="tools" id="tools">{{$tools}}</textarea>
</div>

<div class="form-group">
    <label for="portfolio_project"> Портфолио проект </label>
    <?php
    $portfolio_project = old('portfolio_project')
        ? old('portfolio_project')
        : (isset($item) ? $item->portfolio_project : '');
    ?>
    <textarea class="form-control" name="portfolio_project" id="portfolio_project">{{$portfolio_project}}</textarea>
</div>




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
        window.CKEDITOR_elements = ['tools', 'portfolio_project', 'description_course'];
    </script>
    <script src="/admin/modules/ckeditor/ckeditor.js"></script>
    <script src="/admin/modules/ckeditor/config.js"></script>
@endsection
