@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{__('Sliders')}}</h1>
        </div>
        {{-- content starts here --}}
        <div class="card card-primary">
            <form action="{{ route('admin.slider.create.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <h4>Home Page Sliders</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.slider.create.new') }}" class="btn btn-primary">
                            {{__('Delete')}}
                        </a>
                        <a href="{{ route('admin.slider') }}" class="btn btn-primary">
                            {{__('Back')}}
                        </a>
                        <a href="{{ route('admin.slider.create.new') }}" class="btn btn-primary">
                            {{__('Save and Edit')}}
                        </a>
                        <button class="btn btn-primary">
                            {{__('Save')}}
                        </button>
                    </div>
                </div>
                <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Offer</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="offer_tag" value="{{ old('offer_tag')}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Title</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="sub_title" value="{{ old('sub_title')}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sort Order</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="sort_order" value="{{ old('sort_order')}}">
                                <div class="form-text text-muted">The lower the value the higher it will appear</div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slider Image</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Description</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" required="" name="short_description" value="{{ old('short_description')}}"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Redirection Link</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="redirection_link" value="{{ old('redirection_link') }}">
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </section>
@endsection
