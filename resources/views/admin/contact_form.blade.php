@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contact Forms</div>

                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                          <tr class="table-success">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col" class="text-center">Show massege</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (count($contacts) > 0)
                                @foreach ($contacts as $k=>$contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $k }}">
                                                Show massege
                                            </button>
                                        </td>
                                    </tr>

                                @endforeach
                            @else
                            <tr class="table-secondary">
                                <th class="text-center p-4" colspan="7">Table is EMPTY</th>
                            </tr>
                            @endif

                        </tbody>
                      </table>

                      @if (count($contacts) > 0)
                      {{ $contacts->links() }}
                      @foreach ($contacts as $k=>$contact)
                      <div class="modal fade" id="exampleModal{{ $k }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              {{ $contact->massege }}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('c-script')

@endpush
