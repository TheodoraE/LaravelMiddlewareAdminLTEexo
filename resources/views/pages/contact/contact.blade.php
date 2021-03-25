@extends('adminlte::page')


@section('content')
    <div>
        <h1 class="mb-2">Les emails</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Sender</th>
                <th scope="col">Subject</th>
                <th scope="col">Content</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mails as $mail)
                <tr>
                    <th scope="row">{{$mail->id}}</th>
                    <td>{{$mail->email}}</td>
                    <td>{{$mail->subject}}</td>
                    <td>{{$mail->contenu}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection