@extends('master')

@section('content')
<div class="table-responsive">
    <table id="dataTable" class="table table-hover slot-table">
        <thead>
            <tr>
                <th class="width_8">Name</th>
                <th class="width_6">Email</th>
                <th class="width_6">Address</th>
                <th class="width_6">Currency</th>
                <th class="width_6">Total Amount</th>                
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->fname}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->currency}}</td>
                <td>{{$order->amount}}</td>                
            </tr>        
        @endforeach
        </tbody>
    </table>
</div>

@endsection
