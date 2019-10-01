@extends('template.base')

@section('title', 'Generate Redirects File')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <p>Copy and paste the text bellow in your .htaccess file</p>
                    <textarea onclick="this.focus();this.select();" cols="30" rows="10" class="form-control">{{ $result }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection