@extends('admin.admin_master')

@section('title')
    Prayer Setting
@endsection

@section('admin')


    <div class="col-md-13 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Prayer Time</h4>
            <p class="card-description"> Prayer Time in Makassar </p>
            <form class="forms-sample" method="POST" action="{{ route('prayer.update',$prayer->id) }}">
              @csrf
              
                <div class="form-group">
                <label for="exampleInputUsername1">Subuh</label>
                <input type="text" class="form-control" name="subuh" value="{{ $prayer->subuh }}">
                @error('subuh')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Dhuhur</label>
                <input type="text" class="form-control" name="dhuhur" value="{{ $prayer->dhuhur }}">
                @error('dhuhur')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Ashar</label>
                <input type="text" class="form-control" name="ashar" value="{{ $prayer->ashar }}">
                @error('ashar')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Maghrib</label>
                <input type="text" class="form-control" name="maghrib" value="{{ $prayer->maghrib }}">
                @error('maghrib')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Isya</label>
                <input type="text" class="form-control" name="isya" value="{{ $prayer->isya }}">
                @error('isya')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Jum'at</label>
                <input type="text" class="form-control" name="jumat" value="{{ $prayer->jumat }}">
                @error('jumat')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

            
              <button type="submit" class="btn btn-primary btn-rounded">Update</button>

            </form>
          </div>
        </div>
      </div>

    @endsection