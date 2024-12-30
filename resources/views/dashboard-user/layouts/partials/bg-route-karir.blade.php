<div class="bg-route">
   <img src="/img/dashboard-user/karir.jpg" alt="Image">
</div>
@php
$trading = \App\Models\Trading::latest()->first();
@endphp

@if($trading)
    {!! $trading->trading_view !!}
@endif