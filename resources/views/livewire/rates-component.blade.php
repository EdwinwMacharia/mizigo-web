<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Drivers</li>
      </ol>
    </nav>
 
    <!-- chatting -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 chart-grid mb-4">
          <div class="card card_border p-4">
            <div class="card-header chart-grid__header pl-0 pt-0">
              All Rates
              <div class="col-md-6 pull-right">
                 <a href="{{route('superadmin.addrates')}}" class="btn btn-success">Add New Rates</a>
                     </div>
            </div>
            <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
                <thead>
                  
                  <tr>
                    <th>ID</th>
                    <th>Route</th>
                    <th>Rates</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($rates as $rate)
                  <tr>
                    <td> {{$rate->id}}</td>
                    <td>{{$rate->route}}</td>
                    <td>{{$rate->rate}}</td>
                    <td>
                    <a href="{{route('superadmin.editrate',['rate_id'=>$rate->id])}}"><i class="fa fa-eye"></i></a>
                    <a href="" wire:click.prevent="deleteRate({{$rate->id}})" onclick="confirm('Are you sure, You want to delete Coupon?') || event.stopImediatePropagation()"><i class="fa fa-trash"></i></a>
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
        </div>
      </div>
    </div>
    <!-- //chatting -->

    <!-- accordions -->
    
    <!-- //accordions -->

    <!-- modals -->
   
    <!-- //modals -->

  </div>
  <!-- //content -->
</div>

