@extends('layouts.app')
@section('content')
<main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">スレット作成</div>

                <div class="card-body">
                    <form method="POST" action="{{ action('ThreadController@create')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">タイトル</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="title">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">本文</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control " name="body"></textarea>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    作成
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
@endsection