@extends('template.main')

@section('content')
    <div>
        <h1 class="mb-5">Ajouter un article</h1>

        <form action="/articles" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Text :</label> <br>
                <textarea name="text" id="text" cols="100" rows="5" class="border">Écrivez votre article</textarea>
            </div>

            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
@endsection