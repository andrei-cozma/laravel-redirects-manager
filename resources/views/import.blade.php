@extends('template.base')

@section('title', 'Import urls form')

@section('content')

    <div class="row mt-4">
        <div class="col">
            <div class="card p-4">
                <form action="/import_parse" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="file">Select CSV</label>
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
                <p>* csv file must contain only one column (urls) without header</p>
            </div>
        </div>
    </div>

@endsection