@extends('layouts.appuser')

@section('kontenluas')
            <div class="card">
                <div class="card-header" style="background-color: #3490dc;color:white">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->name }} are logged in!
                </div>
            </div>
@endsection
