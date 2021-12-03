@extends('layouts.app')

@section('template_title')
    {{ $administrator->name ?? 'Show Administrator' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Administrator</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administrators.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $administrator->names }}
                        </div>
                        <div class="form-group">
                            <strong>Lastnames:</strong>
                            {{ $administrator->lastnames }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $administrator->birthdate }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
