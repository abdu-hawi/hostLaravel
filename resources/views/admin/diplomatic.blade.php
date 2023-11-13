@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert alert-success fade in alert-dismissible" style="margin-top: 18px;
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6;
                opacity: 1;
                text-align: center;
                padding: 0.5rem;">
                    <strong>{{ Session::get('success') }}</strong>
                </div>
            @endif
            @if(count($errors) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button class="btn btn-primary mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Add new Diplomatic
            </button>
            <div class="collapse @if(count($errors) > 0 ) show @endif" id="collapseExample">
                <div class="card card-body">
                    <form action="{{ route('admin.diplomatic') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" value="{{ old('name') ?? '' }}" class="form-control" name="name" id="exampleFormControlInput1" required placeholder="Full name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput2" class="form-label">Email address</label>
                                <input type="email" class="form-control" value="{{ old('email') ?? '' }}" name="email" required id="exampleFormControlInput2" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput3" class="form-label">Embassy</label>
                                <input type="text" class="form-control" value="{{ old('embassy') ?? '' }}" name="embassy" required id="exampleFormControlInput3" placeholder="Embassy">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput4" class="form-label">Communicatoin</label>
                                <input type="text" class="form-control" value="{{ old('communicatoin') ?? '' }}" id="exampleFormControlInput4" name="communicatoin" placeholder="Communicatoin">
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-success col-md-3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header">Diplomatic register</div>

                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                          <tr class="table-primary">
                            <th scope="col">Name</th>
                            <th scope="col">Embassy</th>
                            <th scope="col">Communicatoin</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (count($clients) > 0)
                                @foreach ($clients as $client)
                                    <tr>
                                        <th>{{ $client->first_name }}</th>
                                        <td>{{ $client->company_name }}</td>
                                        <td>{{ $client->mobile }}</td>
                                        <td>{{ $client->email }}</td>
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
