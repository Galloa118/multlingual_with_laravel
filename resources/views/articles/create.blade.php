@extends('layouts.bootstrap')

@section('title', 'Articles Create')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
            @include('_validation')
            <form method="POST" action="{{ route('articles.store') }}">
                {{ csrf_field() }}
                @foreach(config('translatable.locales') as $locale)
                    <div class="form-group">
                        <label for="translation[{{$locale}}][title]">Title ({{$locale}})</label>
                        <input type="text" class="form-control" name="translation[{{$locale}}][title]">
                    </div>
                    <div class="form-group">
                        <label for="translation[{{$locale}}][content]">Content ({{$locale}})</label>
                        <textarea class="form-control" name="translation[{{$locale}}][content]"></textarea>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-default">Create</button>
            </form>
        </div>
    </div>
</div>

@stop
