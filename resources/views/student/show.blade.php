@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? 'Show Student' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $student->names }}
                        </div>
                        <div class="form-group">
                            <strong>Lastnames:</strong>
                            {{ $student->lastnames }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $student->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $student->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
