<div>
    Откуда: {{ @$request->from }}
</div>
<div>
    Куда: {{ @$request->to }}
</div>
<div>
    Дата: {{ mb_strimwidth(@$request->date, 0, 10) }}
</div>
<div>
    Пассажиры: {{ @$request->passengers }}
</div>
