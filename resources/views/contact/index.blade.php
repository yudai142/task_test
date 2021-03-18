
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button class="btn btn-primary">
                        <a href="{{ route('contact.create')}}" style="color: #fff;">新規登録</a>
                    </button>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">氏名</th>
                          <th scope="col">件名</th>
                          <th scope="col">登録日時</th>
                          <th scope="col">詳細</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contacts as $contacts)
                        <tr>
                          <th scope="row">{{ $contacts->id }}</th>
                          <td>{{ $contacts->your_name }}</td>
                          <td>{{ $contacts->title }}</td>
                          <td>{{ $contacts->created_at }}</td>
                          <td><a href="{{ route('contact.show', ['id' => $contacts->id]) }}">詳細を見る</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
