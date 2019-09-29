@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="align-items-center">
                        <h2>All Questions</h2>
                    </div>
                    <div class="ml-auto">
                        <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">Ask Questions</a>
                    </div>
                </div>
                @include('layouts._message');
                <div class="card-body">
                    @foreach( $questions as $question )
                        <div class="media">
                            <div class="flex-colum counters">
                                <div class="stats">
                                    <div class="vote">
                                        <div class="votes">
                                            <strong>{{ $question->votes }}</strong>{{ str_plural('vote', $question->votes) }}
                                        </div>
                                    </div>
                                    <div class="status {{ $question->status }}">
                                        <strong>{{ $question->answers }}</strong>{{ str_plural('answer', $question->answers) }}
                                    </div>
                                </div>
                                <div class="view">
                                    {{ $question->views ." ". str_plural('view', $question->views) }}
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="mt-0">
                                        <a href="{{ $question->url }}">
                                            {{ $question->title }}
                                        </a>
                                    </h3>
                                    <div class="ml-auto">
                                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                                    </div>
                                </div>
                                <p class="lead">
                                    Asked by:
                                    <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                    <small class="text-muted">{{ $question->created_date }}</small>
                                </p>
                                {{ str_limit($question->body, 250) }}
                            </div>
                        </div>
                        <hr />
                    @endforeach
                    <div class="justify-content-center">
                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
