@extends('layouts.app')

@section('title', 'Crea progetto')

@section('content')
    <header class="my-5">
        <h1 class="text-center">Crea il nuovo progetto</h1>
    </header>

    <form action="">
        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo del progetto</label>
                    <input type="text" class="form-control" id="title" value="{{ old('title') }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" value="{{ old('slug') }}" disabled>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="slug" class="form-label">Linguaggio</label>
                    <input type="text" class="form-control" id="slug" value="{{ old('slug') }}">
                </div>
            </div>
        </div>
    </form>
@endsection
