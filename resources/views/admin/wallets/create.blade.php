@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.wallet.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.wallets.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.wallet.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.wallet.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="play_id">{{ trans('cruds.wallet.fields.play') }}</label>
                <select class="form-control select2 {{ $errors->has('play') ? 'is-invalid' : '' }}" name="play_id" id="play_id" required>
                    @foreach($plays as $id => $entry)
                        <option value="{{ $id }}" {{ old('play_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('play'))
                    <span class="text-danger">{{ $errors->first('play') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.wallet.fields.play_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('transferred') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="transferred" value="0">
                    <input class="form-check-input" type="checkbox" name="transferred" id="transferred" value="1" {{ old('transferred', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="transferred">{{ trans('cruds.wallet.fields.transferred') }}</label>
                </div>
                @if($errors->has('transferred'))
                    <span class="text-danger">{{ $errors->first('transferred') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.wallet.fields.transferred_helper') }}</span>
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