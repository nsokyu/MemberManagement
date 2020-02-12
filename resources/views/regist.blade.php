@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">会員情報管理</div>

                <div class="card-body">

                    <form method="POST" class="form-horizontal" action="{{ route('regist') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ __('姓名') }}</label>
                            <div class="col-md-4">
                                <label for="name_sei" class="col-form-label">{{ __('姓') }}</label>
                                <input id="name_sei" type="text" class="form-control @error('name_sei') is-invalid @enderror" name="name_sei" value="{{ old('name_sei') }}" required autocomplete="name_sei" autofocus>
                                @error('name_sei')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="name_mei" class="col-form-label">{{ __('名') }}</label>
                                <input id="name_mei" type="name_mei" class="form-control @error('name_mei') is-invalid @enderror" name="name_mei" value="{{ old('name_mei') }}" required autocomplete="name_mei" autofocus>
                                @error('name_mei')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ __('姓名カナ') }}</label>
                            <div class="col-md-4">
                                <label for="name_seikana" class="col-form-label">{{ __('姓カナ') }}</label>
                                <input id="name_seikana" type="text" class="form-control @error('name_seikana') is-invalid @enderror" name="name_seikana" value="{{ old('name_seikana') }}" required autocomplete="name_seikana" autofocus>
                                @error('name_seikana')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="name_meikana" class="col-form-label">{{ __('名カナ') }}</label>
                                <input id="name_meikana" type="name_meikana" class="form-control @error('name_meikana') is-invalid @enderror" name="name_meikana" value="{{ old('name_meikana') }}" required autocomplete="name_meikana" autofocus>
                                @error('name_meikana')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        
                        <div class="form-group row">
                            <label for="zip" class="col-md-2 col-form-label">{{ __('郵便番号') }}</label>
                            <div class="col-md-4">
                                <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" required autocomplete="zip" autofocus>
                                @error('zip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adress" class="col-md-2 col-form-label">{{ __('住所') }}</label>
                            <div class="col-md-10">
                                <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus>
                                @error('adress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ __('生年月日') }}</label>
                            <div class="col-md-3">
                                <label for="year" class="col-form-label">{{ __('年') }}</label>
                                <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                                @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="month" class="col-form-label">{{ __('月') }}</label>
                                <input id="month" type="text" class="form-control @error('month') is-invalid @enderror" name="month" value="{{ old('month') }}" required autocomplete="month" autofocus>
                                @error('month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="day" class="col-form-label">{{ __('日') }}</label>
                                <input id="day" type="text" class="form-control @error('day') is-invalid @enderror" name="day" value="{{ old('day') }}" required autocomplete="day" autofocus>
                                @error('day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" onclick="history.back()" class="btn btn-primary">
                                    {{ __('戻る') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection