@extends ('layout')

@section('title', 'Task 3')

@section ('content')

@foreach($events as $event)
    <div class="row">
        <div class="col-3">
            {{ $event->caption }}
        </div>
    </div>
@endforeach

@endsection