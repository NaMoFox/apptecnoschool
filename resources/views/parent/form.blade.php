<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fullname_mother') }}
            {{ Form::text('fullname_mother', $parent->fullname_mother, ['class' => 'form-control' . ($errors->has('fullname_mother') ? ' is-invalid' : ''), 'placeholder' => 'Fullname Mother']) }}
            {!! $errors->first('fullname_mother', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_mother') }}
            {{ Form::text('phone_mother', $parent->phone_mother, ['class' => 'form-control' . ($errors->has('phone_mother') ? ' is-invalid' : ''), 'placeholder' => 'Phone Mother']) }}
            {!! $errors->first('phone_mother', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fullname_father') }}
            {{ Form::text('fullname_father', $parent->fullname_father, ['class' => 'form-control' . ($errors->has('fullname_father') ? ' is-invalid' : ''), 'placeholder' => 'Fullname Father']) }}
            {!! $errors->first('fullname_father', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_father') }}
            {{ Form::text('phone_father', $parent->phone_father, ['class' => 'form-control' . ($errors->has('phone_father') ? ' is-invalid' : ''), 'placeholder' => 'Phone Father']) }}
            {!! $errors->first('phone_father', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fullname_tuthor') }}
            {{ Form::text('fullname_tuthor', $parent->fullname_tuthor, ['class' => 'form-control' . ($errors->has('fullname_tuthor') ? ' is-invalid' : ''), 'placeholder' => 'Fullname Tuthor']) }}
            {!! $errors->first('fullname_tuthor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_tuthor') }}
            {{ Form::text('phone_tuthor', $parent->phone_tuthor, ['class' => 'form-control' . ($errors->has('phone_tuthor') ? ' is-invalid' : ''), 'placeholder' => 'Phone Tuthor']) }}
            {!! $errors->first('phone_tuthor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $parent->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>