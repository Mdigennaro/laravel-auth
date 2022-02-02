@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <h1>Posts</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Contenuto</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>xxx</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection