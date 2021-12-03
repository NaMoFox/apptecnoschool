@extends('layouts.app')

@section('template_title')
    {{ $teacher->name ?? 'Show Teacher' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $teacher->names }}
                        </div>
                        <div class="form-group">
                            <strong>Lastnames:</strong>
                            {{ $teacher->lastnames }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $teacher->birthdate }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
