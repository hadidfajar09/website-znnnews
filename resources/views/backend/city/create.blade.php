@extends('admin.admin_master')

@section('title')
    Create City
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add City</h4>
            <p class="card-description"> Multi Language City </p>
            <form class="forms-sample" method="POST" action="{{ route('store.city') }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Kota Indonesia</label>
                <input type="text" class="form-control" name="city_ind" placeholder="Kota">
                @error('city_ind')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">City English</label>
                <input type="text" class="form-control" name="city_en" placeholder="City">
                @error('city_en')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="province_id">Select Province</label>
                <select class="js-example-basic-single select2-hidden-accessible" name="province_id" id="province_id" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled="" selected=""> --Select Province  </option>

                  @foreach ($province as $row)
                    <option value="{{ $row->id }}">{{ $row->province_ind }} | {{ $row->province_en }}</option>

                  @endforeach

                </select>
              </div>
              
            
              <button type="submit" class="btn btn-primary btn-rounded">Create</button>

            </form>
          </div>
        </div>
      </div>

    @endsection