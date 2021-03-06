@extends('admin.master')
@section('content')

<style>
.card {
    background-color: #fff;
    border-radius: 10px;
    border: 2px solid;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 10px 10px 10px #d1d9e6, -10px -10px 10px #f9f9f9;
}
.l-bg-cherry {
    background: linear-gradient(to right, #01c7b8, #f3e7a4) !important;
    /*background: linear-gradient(to right, #493240, #f09) !important;*/
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #f3e7a4 , #01c7b8) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fa {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: 4px;
    top: 20px;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}
</style>

<div class="card">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>USDT</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($withdraws) && $withdraws->count() > 0)
                @foreach ($withdraws as $withdraw)
                    <tr>
                        <td>{{$withdraw->id}}</td>
                        <td>{{$withdraw->user_id}}</td>
                        <td>{{$withdraw->user->usdt}}</td>
                        <td>{{$withdraw->amount}}</td>
                        <td>
                            <form action="{{route('withdraws.update',['withdraw'=>$withdraw])}}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="approved">
                                <button type="submit" class="btn">
                                    {{$withdraw->status}}
                                </button>
                            </form>
                        </td>
                        <td>{{$withdraw->created_at}}</td>
                        <td>{{$withdraw->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
