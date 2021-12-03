<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('names') }}
            {{ Form::text('names', $student->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => 'Names']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastnames') }}
            {{ Form::text('lastnames', $student->lastnames, ['class' => 'form-control' . ($errors->has('lastnames') ? ' is-invalid' : ''), 'placeholder' => 'Lastnames']) }}
            {!! $errors->first('lastnames', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birthdate') }}
            {{ Form::text('birthdate', $student->birthdate, ['class' => 'form-control' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Birthdate']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $student->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>