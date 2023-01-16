@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.entity.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.entities.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.entity.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="sub_category_id">{{ trans('cruds.entity.fields.sub_category') }}</label>
                <select class="form-control select2 {{ $errors->has('sub_category') ? 'is-invalid' : '' }}" name="sub_category_id" id="sub_category_id" required>
                    @foreach($sub_categories as $id => $entry)
                        <option value="{{ $id }}" {{ old('sub_category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('sub_category'))
                    <span class="text-danger">{{ $errors->first('sub_category') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.sub_category_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection