@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit Client</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('clients-update', $client)}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $client->name) }}">
                            <div class="form-text">Please add client name here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Surname</label>
                            <input type="text" class="form-control" name="surname"  value="{{ old('surname', $client->surname) }}">
                            <div class="form-text">Please add client surname here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Personal ID</label>
                            <input type="text" class="form-control" name="pid" value={{old('pid', $client->pid)}}>
                            <div class="form-text">Please add ID here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client IBAN</label>
                            <input type="text" class="form-control" name="iban" value={{old('iban', $client->iban)}}>
                            <div class="form-text">Please add IBAN</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Funds</label>
                            <input type="text" class="form-control" name="funds" value={{old('funds', $client->funds)}}>
                            <div class="form-text">Please add Funds</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection