@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>Laratter</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <form action="/messages/create" method="post">
            {{ csrf_field() }}
            <div class="form-group @if ($errors->has('message')) has-danger @endif">
                <input class="form-control" name="message" placeholder="Que estás pensando?">
                @if ($errors->has('message'))
                    @foreach ($errors->get('message') as $error)
                        <div class="form-control-feedback">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
    <div class="row">
        @forelse ($messages as $message)
            <div class="col-6">
                <img class="img-thumbnail" src="{{ $message->image }}">
                <p class="card-text">{{ $message->content }}
                    <a href="/messages/{{ $message->id }}">Leer más</a>
                </p>
            </div>
        @empty
            <p>No hay mensajes destacados</p>
        @endforelse
        @if (count($messages))
        <div class="mt-2 mx-auto">
            {{ $messages->links('pagination::bootstrap-4') }}
        </div>
        @endif
    </div>
@stop