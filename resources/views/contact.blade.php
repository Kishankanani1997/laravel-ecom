@extends('authlara')
@section('title-name')
Contact - Page
@endsection
@section('content')
<div class="container mt-3 p-5">
    <h2 class="text-center ms-5">Contact-Us Page</h2>

        <div class="col-md-10 mx-auto">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 alert alert-danger w-75" :status="session('status')" />

    <!-- validations -->

    @if ($errors->any())
    <div class="alert alert-danger col-md-10 mx-auto mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if(Session('success'))
      <div class="alert alert-success col-md-10 mx-auto">
      {{session('success')}}
     
    </div>
    @endif

    <form method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group col-md-10 mx-auto">
                                        <label>First Name</label>
                                        <input type="text" name="fname" placeholder="Enter First Name" class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" placeholder="Enter Last Name" class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>Number</label>
                                        <input type="text" name="number" placeholder="Enter Your Number" class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>City</label>
                                        <input type="text" name="city" placeholder="Enter Your City" class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Enter your Mail" class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>Message</label>
                                        <input type="text" name="message" placeholder="Enter your Message" class="form-control">
                                    </div>

                                    <div class="col-md-10 mx-auto">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success bg bg-success mt-4">
                                        <input type="reset" name="reset" value="Reset" class="btn btn-danger bg bg-danger mt-4">
                                    </div>
    </form>
</div>

</div>
</div>

@endsection