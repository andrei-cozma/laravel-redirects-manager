@extends('template.base')

@section('title', 'Import urls form')

@section('content')

    <div class="row">
        <div class="col">
            <p>Upload your csv with urls. <br>
                You must have only one column 'url'.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/url/import-save" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file">Select CSV</label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Import</button>
            </form>
        </div>
    </div>

@endsection