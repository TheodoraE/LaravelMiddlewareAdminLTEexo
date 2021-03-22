@extends('template.main')

@section('content')
    <div>
        <h1>Les articles</h1>
        <a href="/articles/create" class="btn btn-info">Ajouter un article</a>

        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th scope="col">Author</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->text}}</td>
                    <td>{{$item->users->name}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection