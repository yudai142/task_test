
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    インデックスです
                    <button class="btn btn-primary">
                        <a href="{{ route('contact.create')}}" style="color: #fff;">新規登録</a>
                    </button>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
