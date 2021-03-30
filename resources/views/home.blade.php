@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <p>{!! Auth::user()->name !!}</p>
                    <p>Email: {!! Auth::user()->email !!}</p>

                    <a href= "{{ route('allproducts')}}" class="btn btn-primary">Main Website</a>

                    @if($userData->isAdmin())
                    <a href="{{ route('adminDisplayProducts')}}"  class="btn btn-warning">Admin Dashboard</a>
                    @else
                    <div class="btn btn-primary"> You are not an Administrator </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
