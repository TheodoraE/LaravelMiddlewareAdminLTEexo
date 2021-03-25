@extends('template.main')

@section('content')
    <div>
        <h1 class="mb-3">Contactez-nous</h1>

        <form action="/mails" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Your email addres :</label>
                <input type="text" name="email" class="form-control border w-50">
            </div>

            <div class="form-group">
                <label for="suject">Subject :</label>
                <select name="subject_id" id="">
                    @foreach ($emailSubjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->subject}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="contenu">Your message :</label>
                <textarea name="contenu" id="contenu" cols="100" rows="5" class="form-control border">What do you want to tell us...</textarea>
            </div>

            <button type="submit" class="btn btn-primary">SEND</button>
        </form>
    </div>
@endsection