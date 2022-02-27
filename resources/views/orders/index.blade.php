@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ordens') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Descripction')}}</th>
                                <th scope="col">{{__('Amount')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th scope="col">{{__('Created At')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <th scope="row">{{$order->id}}</th>
                                        <td>{{$order->description}}</td>
                                        <td>{{$order->amount}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
