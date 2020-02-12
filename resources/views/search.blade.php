@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">検索</div>

                <div class="card-body">
                        <button type="button" class="btn btn-primary" onclick="window.location='{{ route("home") }}'">
                                {{ __('管理画面') }}
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="window.location='{{ route("index") }}'">
                                    {{ __('会員登録') }}
                        </button>
                        {{-- <button type="button" onclick="window.location='{{ route("users.index") }}'">Button</button> --}}
                        {{-- <a class="btn btn-outline-primary" type="submit" href="{{ route('signout') }}">ログアウト</a> --}}
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
