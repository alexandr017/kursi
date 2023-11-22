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
        @foreach($listings as $id => $name)
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="listings[]" value="{{$id}}" @if(isset($item) && $item->listings->pluck('id')->contains($id)) checked @endif>
                    {{$name}}
                </label>
            </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function() {
        // Add an event listener for the input field
        $('#searchListings').on('input', function() {
            var searchTerm = $(this).val().toLowerCase();

            // Loop through checkboxes and hide/show based on the search term
            $('.checkbox-container .checkbox').each(function() {
                var listingName = $(this).text().toLowerCase();
                if (listingName.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

<div class="form-group">
external_id ?
</div>

<div class="form-group">
    <label for="statistics_link"><i class="red">*</i> statistics_link</label>
    <input type="text" class="form-control" name="statistics_link" id="statistics_link" required
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
    <label for="affiliate_link"><i class="red">*</i> affiliate_link</label>
    <input type="text" class="form-control" name="affiliate_link" id="affiliate_link" required
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
    <label for="direct_link"><i class="red">*</i> direct_link</label>
    <input type="text" class="form-control" name="direct_link" id="direct_link" required
           @if(old('direct_link'))
               value="{{old('direct_link')}}"
           @else
               @if(isset($item))
                   value="{{$item->direct_link}}"
        @endif
        @endif
    >
</div>

<div class="form-group">
    <label for="duration"><i class="red">*</i> Продолжительность</label>
    <input type="number" class="form-control" name="duration" id="duration" required
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
    <label for="duration_type"><i class="red ">*</i> Продолжительность (еденицы измерения)</label>
    <select name="duration_type" id="duration_type" class="form-control" required>
        <option value="1" @if(isset($item) && $item->duration_type == 0) selected @endif>Кол-во уроков</option>
        <option value="0" @if(isset($item) && $item->duration_type == 1) selected @endif>Кол-во часов</option>
        <option value="0" @if(isset($item) && $item->duration_type == 2) selected @endif>Кол-во дней</option>
        <option value="0" @if(isset($item) && $item->duration_type == 3) selected @endif>Кол-во месяцев</option>
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
    <label for="sale_cost">Скидка</label>
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
    <label for="sale_value"> Значение со скидки</label> <?php // todo разобраться с полями скидок ?>
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
    <label for="status"><i class="red ">*</i> Статус</label>
    <select name="status" id="status" class="form-control" required>
        <option value="1" @if(isset($item) && $item->status == 1) selected @endif>Включен</option>
        <option value="0" @if(isset($item) && $item->status == 0) selected @endif>Отключен</option>
    </select>
</div>
