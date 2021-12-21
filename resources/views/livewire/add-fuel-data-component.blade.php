<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Fuel Consumptions</li>
        <div class="col-md-6">
    <a href="{{route('rates')}}" class="btn btn-success pull-right">All Fuel Consumptions</a>
</div>
      </ol>
    </nav>
  
    </div>
    <div class="card card_border py-2 mb-4">
                <div class="card-body">
                @if(Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                      @endif
                    <form wire:submit.prevent="StoreFuel">
                        
                            <div class="form-group col-md-6">
                                <label for="inputRoute4" class="input__label">Vehicle Registration No</label>
                                <select class="form-control" wire:model="vehicle_id">
                                   <option selected disabled> Select Vehicle </option>
                                    <option>KCB 339Q</option>
                                    <option>KBP 189Q-10T</option>
                                    <option>KCL 794Y-15T</option>
                                </select>
                              @error('vehicle_no') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputRate4" class="input__label">Fuel Station</label>
                                <input type="text" class="form-control input-style" id="inputPassword4"
                                    placeholder="Type Fuel Station" wire:model="fuel_station">
                                    @error('fuel_station') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputRate4" class="input__label">Litres</label>
                                <input type="number" class="form-control input-style" id="inputPassword4"
                                    placeholder="Number of Litres" wire:model="litres" >
                                    @error('litres') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputRate4" class="input__label">Fuel Cost</label>
                                <input type="number" class="form-control input-style" id="inputPassword4"
                                    placeholder="Fuel Cost" wire:model="amount">
                                    @error('amount') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                           
                        </div>
                        <button type="submit" class="btn btn-success col-md-6">Save</button>
                    </form>
                </div>
            </div>
  </div>
  <!-- //content -->
</div>

