<div class="d-flex justify-content-center">
    <div class="wrapper">

        @if ($project->exists)
            <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="card p-5"
                enctype="multipart/form-data">
                @method('PUT')
            @else
                <form method="POST" action="{{ route('admin.projects.store', $project) }}" class="card p-5"
                    enctype="multipart/form-data">
        @endif
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo del progetto</label>
                    <input type="text" class="form-control @error('title') invalid @enderror" id="title"
                        name="title" value="{{ old('title', $project->title) }}"autofocus>
                    @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            @if ($project->exists)
                <div class="col-4">
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug"
                            value="{{ old('slug', $project->slug) }}" disabled>
                    </div>
                </div>
            @endif

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
                    <label for="img" class="form-label">Carica uno screenshot</label>
                    <input type="file" class="form-control" id="img" name="image">
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
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

@section('scripts')
    <script>
        const placeHolder = 'http://marcolanci.it/utils/placeholder.jpg';
        const
    </script>
@endsection
