{{-- <div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $historia->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnostico') }}
            {{ Form::text('Diagnostico', $historia->Diagnostico, ['class' => 'form-control' . ($errors->has('Diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico']) }}
            {!! $errors->first('Diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento') }}
            {{ Form::text('Tratamiento', $historia->Tratamiento, ['class' => 'form-control' . ($errors->has('Tratamiento') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento']) }}
            {!! $errors->first('Tratamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Medicamentos') }}
            {{ Form::text('Medicamentos', $historia->Medicamentos, ['class' => 'form-control' . ($errors->has('Medicamentos') ? ' is-invalid' : ''), 'placeholder' => 'Medicamentos']) }}
            {!! $errors->first('Medicamentos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motivo de consulta') }}
            {{ Form::text('Motivo de consulta', $historia->Motivo de consulta, ['class' => 'form-control' . ($errors->has('Motivo de consulta') ? ' is-invalid' : ''), 'placeholder' => 'Motivo De Consulta']) }}
            {!! $errors->first('Motivo de consulta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dieta') }}
            {{ Form::text('Dieta', $historia->Dieta, ['class' => 'form-control' . ($errors->has('Dieta') ? ' is-invalid' : ''), 'placeholder' => 'Dieta']) }}
            {!! $errors->first('Dieta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vacunacion') }}
            {{ Form::text('Vacunacion', $historia->Vacunacion, ['class' => 'form-control' . ($errors->has('Vacunacion') ? ' is-invalid' : ''), 'placeholder' => 'Vacunacion']) }}
            {!! $errors->first('Vacunacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Desparacitacion') }}
            {{ Form::text('Desparacitacion', $historia->Desparacitacion, ['class' => 'form-control' . ($errors->has('Desparacitacion') ? ' is-invalid' : ''), 'placeholder' => 'Desparacitacion']) }}
            {!! $errors->first('Desparacitacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado Reproductivo') }}
            {{ Form::text('Estado Reproductivo', $historia->Estado Reproductivo, ['class' => 'form-control' . ($errors->has('Estado Reproductivo') ? ' is-invalid' : ''), 'placeholder' => 'Estado Reproductivo']) }}
            {!! $errors->first('Estado Reproductivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peso') }}
            {{ Form::text('Peso', $historia->Peso, ['class' => 'form-control' . ($errors->has('Peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('Peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Mucosas') }}
            {{ Form::text('Mucosas', $historia->Mucosas, ['class' => 'form-control' . ($errors->has('Mucosas') ? ' is-invalid' : ''), 'placeholder' => 'Mucosas']) }}
            {!! $errors->first('Mucosas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Turgencia') }}
            {{ Form::text('Turgencia', $historia->Turgencia, ['class' => 'form-control' . ($errors->has('Turgencia') ? ' is-invalid' : ''), 'placeholder' => 'Turgencia']) }}
            {!! $errors->first('Turgencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pulso') }}
            {{ Form::text('Pulso', $historia->Pulso, ['class' => 'form-control' . ($errors->has('Pulso') ? ' is-invalid' : ''), 'placeholder' => 'Pulso']) }}
            {!! $errors->first('Pulso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Otros') }}
            {{ Form::text('Otros', $historia->Otros, ['class' => 'form-control' . ($errors->has('Otros') ? ' is-invalid' : ''), 'placeholder' => 'Otros']) }}
            {!! $errors->first('Otros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anamnesis') }}
            {{ Form::text('Anamnesis', $historia->Anamnesis, ['class' => 'form-control' . ($errors->has('Anamnesis') ? ' is-invalid' : ''), 'placeholder' => 'Anamnesis']) }}
            {!! $errors->first('Anamnesis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Enfermedades o procedimientos anteriores') }}
            {{ Form::text('Enfermedades o procedimientos anteriores', $historia->Enfermedades o procedimientos anteriores, ['class' => 'form-control' . ($errors->has('Enfermedades o procedimientos anteriores') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedades O Procedimientos Anteriores']) }}
            {!! $errors->first('Enfermedades o procedimientos anteriores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lista Problemas') }}
            {{ Form::text('Lista Problemas', $historia->Lista Problemas, ['class' => 'form-control' . ($errors->has('Lista Problemas') ? ' is-invalid' : ''), 'placeholder' => 'Lista Problemas']) }}
            {!! $errors->first('Lista Problemas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnosticos diferenciales') }}
            {{ Form::text('Diagnosticos diferenciales', $historia->Diagnosticos diferenciales, ['class' => 'form-control' . ($errors->has('Diagnosticos diferenciales') ? ' is-invalid' : ''), 'placeholder' => 'Diagnosticos Diferenciales']) }}
            {!! $errors->first('Diagnosticos diferenciales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan diagnostico') }}
            {{ Form::text('Plan diagnostico', $historia->Plan diagnostico, ['class' => 'form-control' . ($errors->has('Plan diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Plan Diagnostico']) }}
            {!! $errors->first('Plan diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnostico presuntivo') }}
            {{ Form::text('Diagnostico presuntivo', $historia->Diagnostico presuntivo, ['class' => 'form-control' . ($errors->has('Diagnostico presuntivo') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico Presuntivo']) }}
            {!! $errors->first('Diagnostico presuntivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnostico definitivo') }}
            {{ Form::text('Diagnostico definitivo', $historia->Diagnostico definitivo, ['class' => 'form-control' . ($errors->has('Diagnostico definitivo') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico Definitivo']) }}
            {!! $errors->first('Diagnostico definitivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pronostico') }}
            {{ Form::text('Pronostico', $historia->Pronostico, ['class' => 'form-control' . ($errors->has('Pronostico') ? ' is-invalid' : ''), 'placeholder' => 'Pronostico']) }}
            {!! $errors->first('Pronostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan terapeutico') }}
            {{ Form::text('Plan terapeutico', $historia->Plan terapeutico, ['class' => 'form-control' . ($errors->has('Plan terapeutico') ? ' is-invalid' : ''), 'placeholder' => 'Plan Terapeutico']) }}
            {!! $errors->first('Plan terapeutico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('Observaciones', $historia->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento al diagnostico') }}
            {{ Form::text('Tratamiento al diagnostico', $historia->Tratamiento al diagnostico, ['class' => 'form-control' . ($errors->has('Tratamiento al diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento Al Diagnostico']) }}
            {!! $errors->first('Tratamiento al diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $historia->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actitud') }}
            {{ Form::text('Actitud', $historia->Actitud, ['class' => 'form-control' . ($errors->has('Actitud') ? ' is-invalid' : ''), 'placeholder' => 'Actitud']) }}
            {!! $errors->first('Actitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hidratacion') }}
            {{ Form::text('Hidratacion', $historia->Hidratacion, ['class' => 'form-control' . ($errors->has('Hidratacion') ? ' is-invalid' : ''), 'placeholder' => 'Hidratacion']) }}
            {!! $errors->first('Hidratacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado nutricional') }}
            {{ Form::text('Estado nutricional', $historia->Estado nutricional, ['class' => 'form-control' . ($errors->has('Estado nutricional') ? ' is-invalid' : ''), 'placeholder' => 'Estado Nutricional']) }}
            {!! $errors->first('Estado nutricional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modulos superficiales') }}
            {{ Form::text('Modulos superficiales', $historia->Modulos superficiales, ['class' => 'form-control' . ($errors->has('Modulos superficiales') ? ' is-invalid' : ''), 'placeholder' => 'Modulos Superficiales']) }}
            {!! $errors->first('Modulos superficiales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema cardiovascular') }}
            {{ Form::text('Sistema cardiovascular', $historia->Sistema cardiovascular, ['class' => 'form-control' . ($errors->has('Sistema cardiovascular') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Cardiovascular']) }}
            {!! $errors->first('Sistema cardiovascular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema respiratorio') }}
            {{ Form::text('Sistema respiratorio', $historia->Sistema respiratorio, ['class' => 'form-control' . ($errors->has('Sistema respiratorio') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Respiratorio']) }}
            {!! $errors->first('Sistema respiratorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema digestivo') }}
            {{ Form::text('Sistema digestivo', $historia->Sistema digestivo, ['class' => 'form-control' . ($errors->has('Sistema digestivo') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Digestivo']) }}
            {!! $errors->first('Sistema digestivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema reproductivo') }}
            {{ Form::text('Sistema reproductivo', $historia->Sistema reproductivo, ['class' => 'form-control' . ($errors->has('Sistema reproductivo') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Reproductivo']) }}
            {!! $errors->first('Sistema reproductivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema urinario') }}
            {{ Form::text('Sistema urinario', $historia->Sistema urinario, ['class' => 'form-control' . ($errors->has('Sistema urinario') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Urinario']) }}
            {!! $errors->first('Sistema urinario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema nervioso') }}
            {{ Form::text('Sistema nervioso', $historia->Sistema nervioso, ['class' => 'form-control' . ($errors->has('Sistema nervioso') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Nervioso']) }}
            {!! $errors->first('Sistema nervioso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema musculo-esqueletico') }}
            {{ Form::text('Sistema musculo-esqueletico', $historia->Sistema musculo-esqueletico, ['class' => 'form-control' . ($errors->has('Sistema musculo-esqueletico') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Musculo-Esqueletico']) }}
            {!! $errors->first('Sistema musculo-esqueletico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ojos') }}
            {{ Form::text('Ojos', $historia->Ojos, ['class' => 'form-control' . ($errors->has('Ojos') ? ' is-invalid' : ''), 'placeholder' => 'Ojos']) }}
            {!! $errors->first('Ojos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Piel y Anexos') }}
            {{ Form::text('Piel y Anexos', $historia->Piel y Anexos, ['class' => 'form-control' . ($errors->has('Piel y Anexos') ? ' is-invalid' : ''), 'placeholder' => 'Piel Y Anexos']) }}
            {!! $errors->first('Piel y Anexos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mascota_id') }}
            {{ Form::text('mascota_id', $historia->mascota_id, ['class' => 'form-control' . ($errors->has('mascota_id') ? ' is-invalid' : ''), 'placeholder' => 'Mascota Id']) }}
            {!! $errors->first('mascota_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $historia->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div> --}}