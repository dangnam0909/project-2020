@EXTENDS('layout.main')

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Edit staff</h3>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="mt-2 ml-3" action="{{ route('list_staff_update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $staff->id }}"/>
            <div class="row">
                <label for="inputName" class="col-md-2">Full name</label>
                <input type="text" class="form-control col-md-4 mb-1" id="inputName" name="fullName" value="{{$staff->fullName}}" placeholder="Full Name">
            </div>
            <div class="row">
                <label for="inputBirthday" class="col-md-2">Birthday</label>
                <input type="text" class="form-control col-md-4 mb-1" id="inputBirthday" name="birthday" value="{{$staff->birthday}}" placeholder="Birthday">
            </div>
            <div class="row">
                <label for="inputGender" class="col-md-2">Gender</label>
                <input type="text" class="form-control col-md-4 mb-1" id="inputGender" name="gender" value="{{ $staff->gender }}" placeholder="Gender">
            </div>
            <div class="row">
                <label for="inputAddress" class="col-md-2">Address</label>
                <input type="text" class="form-control col-md-4 mb-1" id="inputAddress" name="address" value="{{ $staff->address }}" placeholder="Address">
            </div>
            <div class="row">
                <label for="inputPhone" class="col-md-2">Phone</label>
                <input type="text" class="form-control col-md-4 mb-1" id="inputPhone" name="phone" value="{{ $staff->phone }}" placeholder="Phone number">
            </div>
            <div class="row">
                <label for="inputEmail" class="col-md-2">Email</label>
                <input type="email" class="form-control col-md-4 mb-1" id="inputEmail" name="email" value="{{ $staff->email }}" placeholder="ex: abc@gmail.com">
            </div>
            <div class="row">
                <label for="inputPass" class="col-md-2">Password</label>
                <input type="password" class="form-control col-md-4" id="inputPass" name="password" value="{{ $staff->password }}" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Save</button>
            <button type="submit" class="btn btn-danger mt-2">Cancel</button>
        </form>
    </div>

@endsection
