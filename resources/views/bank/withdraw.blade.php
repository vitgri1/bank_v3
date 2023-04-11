@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Withdraw funds</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('clients-withdrawUpdate', $client)}}" method="post">
                        <div class="mb-3">
                            {{$client->name}}
                        </div>
                        <div class="mb-3">
                            {{$client->surname}}
                        </div>
                        <div class="mb-3">
                            {{$client->funds}}€
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Funds</label>
                            <input type="text" class="form-control" name="funds" value={{old('funds')}}>
                            <div class="form-text">Amount of funds to withdraw</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Withdraw funds</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection