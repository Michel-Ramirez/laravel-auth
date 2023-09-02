@extends('layouts.app')

@section('title', 'Crea progetto')

@section('content')
    <header class="my-5">
        <h1 class="text-center">Crea il nuovo progetto</h1>
    </header>
    <div class="d-flex justify-content-end m-5">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Torna indietro
        </a>
    </div>
    <div class="d-flex justify-content-center">
        <div class="wrapper">
            <form action="" class="card p-5">

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo del progetto</label>
                            <input type="text" class="form-control" id="title" name=""
                                value="{{ old('title') }}" required autofocus>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" value="{{ old('slug') }}" disabled>
                        </div>
                    </div>

                    {{-- LINGUAGGIO DI SCRITTURA DEL PROGETTO --}}

                    {{-- <div class="col-4">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Linguaggio</label>
                                <input type="text" class="form-control" id="slug" value="{{ old('slug') }}">
                            </div>
                        </div> --}}

                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="mb-3">
                            <label for="img" class="form-label">Screenshot</label>
                            <input type="text" class="form-control" id="img" value="{{ old('slug') }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea type="text" class="form-control" id="description" value="{{ old('slug') }}">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-5 d-flex justify-content-center">
                        <figure>
                            <img src="http://marcolanci.it/utils/placeholder.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col d-flex justify-content-center">
                        <button class="btn btn-warning me-3">Reset</button>
                        <button class="btn btn-success">Invia</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
