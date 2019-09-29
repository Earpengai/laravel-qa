@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="align-items-center">
                        <h2>Update Question</h2>
                    </div>
                    <div class="ml-auto">
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Question</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="post">
                        {{ method_field('PUT') }}
                        @include('questions._form', ['buttonText' => "Update Question"])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
