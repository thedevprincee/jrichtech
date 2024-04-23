@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Assets')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Assets')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Assets')}}</div>
            </div>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.create_asset') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{__('admin.Add Asset')}}</a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>{{__('admin.SN')}}</th>
                                    <th>{{__('admin.Asset Name')}}</th>
                                    <th>{{__('admin.Asset Code')}}</th>
                                    <th>{{__('admin.Buy Price')}}</th>
                                    <th>{{__('admin.Sell Price')}}</th>
                                    <th>{{__('admin.Image')}}</th>
                                    <th>{{__('admin.Status')}}</th>
                                    <th>{{__('admin.Action')}}</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($assets as $index => $asset)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $asset->name }}</td>
                                        <td>{{ $asset->code }}</td>
                                        <td>{{ $asset->buy }}</td>
                                        <td>{{ $asset->sell }}</td>
                                        <td>
                                            <img src="{{ asset($asset->image) }}" alt="" width="80px" class="rounded-circle">                                           
                                        </td>
                                        <td>
                                            @if($asset->status == 1)
                                                <a href="javascript:;" onclick="changeAdminStatus({{ $asset->id }})">
                                                    <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.Inactive')}}" data-onstyle="success" data-offstyle="danger">
                                                </a>
                                                @else
                                                <a href="javascript:;" onclick="changeAdminStatus({{ $asset->id }})">
                                                    <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.Inactive')}}" data-onstyle="success" data-offstyle="danger">
                                                </a>
                                                @endif

                                        </td>
                                        <td>
                                                {{-- <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData({{ $asset->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
                                        </td>

                                    </tr>
                                  @endforeach
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<script>
  

    function deleteData(id){
        $("#deleteForm").attr("action",'{{ url("admin/admin/") }}'+"/"+id)
    }
    function changeAdminStatus(id){
        var isDemo = "{{ env('APP_VERSION') }}"

        if(isDemo == 0){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '{{ csrf_token() }}' },
            url:"{{url('/admin/asset-status/')}}"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){
                console.log(err);

            }
        })
    }
</script>
@endsection
