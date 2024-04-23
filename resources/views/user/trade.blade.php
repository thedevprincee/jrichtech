@extends('user.layout')
@section('title')
    <title>{{__('user.Trade')}}</title>
@endsection
@section('user-content')
<div class="row">
    <div class="col-lg-6">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        {{-- <h3 class="m-0">Basic Form</h3> --}}
                    </div>
            </div>
        </div>
        <div class="white_card_body">
            <h6 class="card-subtitle mb-2">Fill the form below to place your order.
                Select the type of transaction and desired asset/currency.
            </h6>
            <form action="{{ route('user.trade_add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Trade Type</label>
                    <select name="type" class="form-select">
                        <option selected>Choose...</option>
                        <option value="buy">BUY</option>
                        <option value="sell">SELL</option>
                    </select>
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Asset</label>
                    
                    <select name="asset" class="form-select">
                        <option selected>Choose...</option>
                        @foreach($assets as $asset)
                            <option value="{{ $asset->code }}">{{ $asset->name }}</option>
                        @endforeach
                    </select>
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Amount (USD)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Amount (USD)">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Proceed</button>
            </form>
        </div>
    </div>
</div>
        
</div>
<script>
   const myfunc = (arr)=>{

       console.log(arr);
    }

</script>

@endsection

