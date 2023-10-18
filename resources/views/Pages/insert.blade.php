@extends('layout.main')
@push('title')
    <title>Insert Form </title>
@endpush

@section('main-section')
@if ($message=Session::get('success'))
    <div class="alert alert-seccess alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="" method="post" action="{{url('/')}}/Pages/insert" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name : </label>
                        <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                {{$errors -> first ('name')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="number">Number : </label>
                        <input type="number" name="number" id="" class="form-control" value="{{old('number')}}">
                        @if ($errors->has('name'))
                        <span class="text-danger">
                            {{$errors -> first ('number')}}
                        </span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label for="">Date of Birth </label>
                      <input type="date" name="dob" id="" class="form-control" placeholder="" value="{{old('dob')}}">
                      @if ($errors->has('dob'))
                      <span class="text-danger">
                          {{$errors -> first ('dob')}}
                      </span>
                  @endif
                    </div>
                    <div class="form-group">
                        <label for="">Email Address :  </label>
                        <input type="email" name="email" id="" class="form-control" placeholder="" value="{{old('email')}}" >
                        @if ($errors->has('email'))
                        <span class="text-danger">
                            {{$errors -> first ('email')}}
                        </span>
                    @endif
                      </div>
                      <div class="form-group">
                        <label for="">Upload Image</label>
                        <input type="file" name="image" id="" class="form-control" placeholder="" >
                        @if ($errors->has('image'))
                        <span class="text-danger">
                            {{$errors -> first ('image')}}
                        </span>
                    @endif
                      </div>
                      <button class="btn btn-primary mt-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection