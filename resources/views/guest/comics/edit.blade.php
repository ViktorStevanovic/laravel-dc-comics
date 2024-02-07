@extends('layouts.layout')

@section('main-content')

<section class="p-5 container">
    <h1 class="text-center">Edit Comic Book</h1>
    {{-- Errors alert --}}
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <form action="{{ route('guest.comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $comic->title)  }}">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $comic->description) }}">
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $comic->price) }}">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series" value="{{ old('series', $comic->series) }}">
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ old('type', $comic->type) }}">
          </div>
          <button type="submit" class="btn btn-danger">Modifica</button>
    </form>
</section>

@endsection