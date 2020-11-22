@extends('layouts.main')
@section ('content')
<div class="container text-center my-5 " >
    <h1> Create Page </h1>

    <!-- Default form register -->
    <div class="container">

    @if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning" role="alert">
            {{ $error }}
        </div>
    @endforeach
    @endif
    
        <form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">

        {{ csrf_field() }}

            <p class="h4 mb-4">Add New Student</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" name="firstname" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="defaultRegisterFormLastName" name="lastname" class="form-control" placeholder="Last name">
                </div>
            </div>

            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

            <!-- Phone number -->
            <input type="text" id="defaultRegisterPhonePassword" name="phoneno" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Create Record</button>

        </form>
    </div>
<!-- Default form register -->

</div>
@endsection
