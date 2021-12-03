@extends('layouts.app')

@section('template_title')
    {{ $parentz->name ?? 'Show Parentz' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Parentz</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('parentzs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fullname Mother:</strong>
                            {{ $parentz->fullname_mother }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Mother:</strong>
                            {{ $parentz->phone_mother }}
                        </div>
                        <div class="form-group">
                            <strong>Fullname Father:</strong>
                            {{ $parentz->fullname_father }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Father:</strong>
                            {{ $parentz->phone_father }}
                        </div>
                        <div class="form-group">
                            <strong>Fullname Tuthor:</strong>
                            {{ $parentz->fullname_tuthor }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Tuthor:</strong>
                            {{ $parentz->phone_tuthor }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $parentz->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
