@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">星占い</h2>
            <h3 class="text-center">今日の運勢</h3>
            <p class="text-center mt-4">結果：{{ $result }}</p>
        </div>
    </div>
</div>

@endsection
