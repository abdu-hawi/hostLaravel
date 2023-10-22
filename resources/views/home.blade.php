@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clients register</div>

                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                          <tr class="table-primary">
                            <th scope="col">Name</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Industry</th>
                            <th scope="col">Interested</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (count($clients) > 0)
                                @foreach ($clients as $client)
                                    <tr>
                                        <th>{{ $client->first_name }} {{ $client->last_name }}</th>
                                        <td>{{ $client->job_title }}</td>
                                        <td>{{ $client->company_name }}</td>
                                        <td>{{ $client->mobile }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->industry }}</td>
                                        <td>{{ $client->interested }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr class="table-secondary">
                                <th class="text-center p-4" colspan="7">Table is EMPTY</th>
                            </tr>
                            @endif

                        </tbody>
                      </table>

                      @if (count($clients) > 0)
                      {{ $clients->links() }}
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('c-script')

@endpush
