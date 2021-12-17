<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Rates</li>
        <div class="col-md-6">
    <a href="{{route('rates')}}" class="btn btn-success pull-right">All Rates</a>
</div>
      </ol>
    </nav>
  
    </div>
    <div class="card card_border py-2 mb-4">
                <div class="card-body">
                @if(Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                      @endif
                    <form wire:submit.prevent="storeRates">
                        
                            <div class="form-group col-md-6">
                                <label for="inputRoute4" class="input__label">Route Name</label>
                                <input type="text" class="form-control input-style" id="inputEmail4"
                                    placeholder="Route Charges" wire:model="route">
                                    @error('route') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputRate4" class="input__label">Rate Charges</label>
                                <input type="text" class="form-control input-style" id="inputPassword4"
                                    placeholder="Rate Charges" wire:model="rate">
                                    @error('rate') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                      
                           
                        </div>
                        <button type="submit" class="btn btn-success col-md-6">Save</button>
                    </form>
                </div>
            </div>
  </div>
  <!-- //content -->
</div>

