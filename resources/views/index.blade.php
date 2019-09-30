@extends('template.base')

@section('title', 'Redirects Manager')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Old url</th>
                                <th>New url</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($urls as $url)

                            <tr>
                                <td>{{ $url->id }}</td>
                                <td>{{ $url->old_url }}</td>
                                <td>{{ $url->new_url }}</td>
                                <td>{{ $url->created_at }}</td>
                                <td>{{ $url->updated_at }}</td>
                                <td><a href="/url/{{ $url->id }}/edit">edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $urls->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection