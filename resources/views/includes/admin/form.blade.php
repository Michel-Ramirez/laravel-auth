<div class="d-flex justify-content-center">
    <div class="wrapper">
        <form action="" class="card p-5">

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del progetto</label>
                        <input type="text" class="form-control" id="title" name=""
                            value="{{ old('title', $project->title) }}" required autofocus>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug"
                            value="{{ old('slug', $project->slug) }}" disabled>
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
                        <input type="text" class="form-control" id="img"
                            value="{{ old('image', $project->image) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description">{{ old('description', $project->description) }}</textarea>
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
