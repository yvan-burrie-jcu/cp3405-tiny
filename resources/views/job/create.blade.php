@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center"><span
                    class="card-title">Post New Job</span></div>
            <form action="/job" enctype="multipart/form-data" method="post">
                @csrf

                <div class="row">
                    <div class="col-8 offset-2 pt-5">

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label-lg">{{ __('Title') }}</label>

                            <input id="title"
                                   type="text"
                                   class="form-control @error('title') is-invalid @enderror"
                                   name="title"
                                   value="{{ old('title') }}" required
                                   autocomplete="title" autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label-lg">Description</label>

                            <textarea id="description"
                                      type="text"
                                      class="form-control @error('description') is-invalid @enderror"
                                      name="description" required
                                      autocomplete="description" autofocus></textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label-lg">Type</label>

                            <input id="type"
                                   type="text"
                                   class="form-control @error('type') is-invalid @enderror"
                                   name="type"
                                   value="{{ old('type') }}" required
                                   autocomplete="type" autofocus>

                            @error('type')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label-lg">Location</label>

                            <input id="location"
                                   type="text"
                                   class="form-control @error('location') is-invalid @enderror"
                                   name="location"
                                   value="{{ old('location') }}" required
                                   autocomplete="location" autofocus>

                            @error('location')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label-lg">Categories</label>
                                <select id="category_id" class="custom-select form-control @error('category_id') is-invalid @enderror"
                                        name="category_id" required>
                                    @foreach (\App\JobCategory::all() as $category)
                                        <option
                                            value="{{ $category->id }}">{{ htmlspecialchars($category->title) }}</option>
                                    @endforeach
                                </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="salary" class="col-md-4 col-form-label-lg">Salary</label>

                            <input id="salary"
                                   type="number"
                                   min="-8388608"
                                   max="8388607"
                                   class="form-control @error('salary') is-invalid @enderror"
                                   name="salary"
                                   value="{{ old('salary') }}" required
                                   autocomplete="salary" autofocus>

                            @error('salary')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="row p-5 justify-content-end">
                            <button class="btn btn-primary btn-lg">Add Job</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
