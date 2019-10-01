@extends('template.base')

@section('title', 'Create url redirect')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>Create Redirect</h3>
                </div>
                <div class="card-body">
                    <form action="/" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="old_url">Old Url</label>
                            <input type="text" name="old_url" id="old_url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="new_url">New Url</label>
                            <input type="text" name="new_url" id="new_url" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection