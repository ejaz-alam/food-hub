@extends('admin.layouts.master')
@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{__('Sliders')}}</h1>
        </div>
        {{-- content starts here --}}
        <div class="card card-primary">
            <div class="card-header">
                <h4>Home Page Sliders</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-primary">
                        {{__('Create New Slider')}}
                    </a>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script type="text/javascript" src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
