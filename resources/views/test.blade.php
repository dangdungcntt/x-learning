{{--  {{var_dump($params)}}  --}}
@foreach($params as $key => $value)
    {{$key}} => {{$value}}
@endforeach