@extends('template.base')

@section('title', 'Verify import')

@section('content')

    <div class="row mt-4">
        <div class="col">
            <div class="card p-4">
                <p>Verify if the urls are displayed correctly and hit "Import".</p>
                <table class="table table-stripped">
                    @foreach($urls as $url)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $url->url }}
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col col-sm-2">
                        <form action="/url/import_process" method="post">
                            <button type="submit" class="btn btn-primary">Import</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection