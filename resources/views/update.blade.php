@extends('layouts.main')
@section ('content')
<div class="text-center my-5" >
    <h1> Update Page </h1>

    <!-- Default form register -->
    <div class="container">

    @if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning" role="alert">
            {{ $error }}
        </div>
    @endforeach
    @endif
    
        <form class="text-center border border-light p-5" action="{{ route('update',$student->id) }}" method="POST">

        {{ csrf_field() }}

            <p class="h4 mb-4">Edit Student Record</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" name="firstname" class="form-control" value="{{ $student->first_name }}">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="defaultRegisterFormLastName" name="lastname" class="form-control" value="{{ $student->last_name }}">
                </div>
            </div>

            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" value="{{ $student->email }}">

            <!-- Phone number -->
            <input type="text" id="defaultRegisterPhonePassword" name="phoneno" class="form-control" value="{{ $student->phone_no }}" aria-describedby="defaultRegisterFormPhoneHelpBlock">

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Update Record</button>

        </form>
    </div>
<!-- Default form register -->
</div>
@endsection