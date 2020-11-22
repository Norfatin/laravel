@extends('layouts.main')
@section ('content')
<div class="text-center my-5" >
    <h1> Read Page </h1>

    <div class="container">
        <table class="table">
            <thead class="black white-text">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone_no }}</td>
                    <td>Edit || Delete</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection