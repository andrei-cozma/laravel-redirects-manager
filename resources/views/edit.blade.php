@extends('template.base')

@section('title', 'Edit rediect')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <label>Old url</label>
                    <input type="text" class="form-control" value="{{ $url->old_url }}">
                    <iframe src="{{ $url->old_url }}" style="border: none;" class="my-2" width="100%" height="800"></iframe>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <form action="/{{ $url->id }}" method="post">
                        @method('patch')
                        @csrf
                        <label>New url</label>
                        <input type="text" name="new_url" class="form-control" value="{{ $url->new_url }}">
                        <div class="row">
                            <div class="col pt-4">
                                <button type="submit" name="action" value="save" class="btn btn-primary">Save</button>
                                @if($next)
                                    <button type="submit" name="action" value="save_and_next" class="btn btn-primary">Save & Next</button>
                                    <a href="/{{ $next }}/edit" class="btn btn-primary">Next</a>
                                @endif
                                <a href="/" class="btn btn-primary float-right">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection