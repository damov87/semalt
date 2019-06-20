@extends ('layout')

@section('title', 'Task 2')

@section ('content')

@foreach($bids as $bid)
    <div class="row">
        <div class="col-3">
            {{ $bid->name }}
        </div>
    </div>
@endforeach

@endsection