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

            <h2>Custom Invite</h2>
            <div class="card card-body">
                <form action="{{ route('admin.invite') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                <span style="color: #e70c0c">*</span>
                                {{ __('header.First name') }}
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="{{ __('header.First name') }}"
                                value="{{ old('first_name') ?? '' }}" type="text"
                                name="first_name" required
                                @error('first_name') style="border-color: #e70c0c;" @enderror />
                            @error('first_name')
                            <span style="color: #e70c0c">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput2" class="form-label">
                                <span style="color: #e70c0c">*</span>
                                {{ __('header.Last name') }}
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="{{ __('header.Last name') }}"
                                value="{{ old('last_name') ?? '' }}" type="text"
                                name="last_name" required
                                @error('last_name') style="border-color: #e70c0c;" @enderror />
                            @error('last_name')
                            <span style="color: #e70c0c">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                <span style="color: #e70c0c">*</span>
                                {{ __('header.Job title') }}
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="{{ __('header.Job title') }}"
                                value="{{ old('job_title') ?? '' }}" type="text"
                                name="job_title" required
                                @error('job_title') style="border-color: #e70c0c;" @enderror />
                            @error('job_title')
                            <span style="color: #e70c0c">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput2" class="form-label">
                                <span style="color: #e70c0c">*</span>
                                {{ __('header.Company name') }}
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="{{ __('header.Company name') }}"
                                value="{{ old('company_name') ?? '' }}" type="text"
                                name="company_name" required
                                @error('company_name') style="border-color: #e70c0c;" @enderror />
                            @error('company_name')
                            <span style="color: #e70c0c">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">
                                <span style="color: #e70c0c">*</span>
                                {{ __('header.Mobile number') }}
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="{{ __('header.Mobile number') }}"
                                value="{{ old('mobile') ?? '' }}" type="text"
                                name="mobile" required
                                @error('mobile') style="border-color: #e70c0c;" @enderror />
                            @error('mobile')
                            <span style="color: #e70c0c">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput2" class="form-label">
                                <span style="color: #e70c0c">*</span>
                                {{ __('header.Email') }}
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="{{ __('header.Email') }}"
                                value="{{ old('email') ?? '' }}" type="email"
                                name="email" required
                                @error('email') style="border-color: #e70c0c;" @enderror />
                            @error('email')
                            <span style="color: #e70c0c">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <button class="btn btn-success col-md-3">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
