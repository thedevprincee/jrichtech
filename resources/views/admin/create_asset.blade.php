@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Assets')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Create Asset')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item active"><a href="{{ route('admin.assets') }}">{{__('admin.Assets')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Create Asset')}}</div>
            </div>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.assets') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.Assets')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.store_asset') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Asset Name')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  name="name">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Asset Code')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="slug" class="form-control"  name="code">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Buy Price')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="buy" class="form-control"  name="buy">
                                </div>
                               
                                <div class="form-group col-12">
                                    <label>{{__('admin.Sell Price')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="Sell" class="form-control"  name="sell">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Buy Minimum')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="buy_min" class="form-control"  name="buy_min">
                                </div>
                               
                                <div class="form-group col-12">
                                    <label>{{__('admin.Buy Maximum')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="buy_max" class="form-control"  name="buy_max">
                                </div>
                                
                                <div class="form-group col-12">
                                    <label>{{__('admin.Sell Minimum')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="sell_min" class="form-control"  name="sell_min">
                                </div>
                               
                                <div class="form-group col-12">
                                    <label>{{__('admin.Sell Maximum')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="sell_max" class="form-control"  name="sell_max">
                                </div>
                               
                              
                                
                                <div class="form-group col-12">
                                    <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1">{{__('admin.Active')}}</option>
                                        <option value="0">{{__('admin.Inactive')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">{{__('admin.Add')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

@endsection
