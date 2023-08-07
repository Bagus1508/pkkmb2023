@extends('layouts.dashboard.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="px-20">
                <img src="{{ $qrcode }}" alt="" id="qrcode" class="w-50 h-50 items-center mx-auto">
            </div>
        </div>
    </div>
</div>
@endsection