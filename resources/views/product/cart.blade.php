@extends('app')

@section('content')
  @foreach ($products as $item)  
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title">
                {{ $item->name }} {{ $item->price }}
            </div>
            <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name }}</h6>
            <div class="card-text">{{ $item->description }}</div>
        </div>
    </div>
  @endforeach   

@endsection