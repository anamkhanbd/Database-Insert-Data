@extends('layout.main')
@push('title')
<title>Data Form </title>
@endpush
@section('main-section')
    <div class="container">
        <form action="{{url('/')}}/Pages/store" method="post">
            @csrf
            <div class="form-group">
              <label for="" class="mt-2">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Mobile Number </label>
              <input type="number" name="number" id="">
            </div>
            <div class="form-group">
                <label for="">Date Of Birth</label>
              <input type="date" name="dob" id="">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="">
            </div>
            <div class="btn btn-primary "type="submit" >submit</div>
        </form>
    </div>
@endsection