@extends('layouts.v_main')
@section('title', 'Form Tambah Data User')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Isi Form</h3>
    </div>
    <form action="{{ route('store.user') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputEmailUser">Nama User</label>
                <input type="text" class="form-control" id="inputNamaUser" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="inputEmailUser">Email</label>
                <input type="email" class="form-control" id="inputEmailUser" rows="3" name="email" placeholder="Enter Email"></input>
            </div>
            <div class="form-group">
                <label for="role_id">Example select</label>
                <select class="form-control" id="role_id" name="role_id">
                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                    <option value="3">General Manager</option>
                    <option value="4">Perwakilan Kantor Cabang</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputPasswordUser">Password</label>
                <input type="password" class="form-control" id="inputPasswordUser" rows="3" name="password" placeholder="Enter Password">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success swalDefaultSuccess">Submit</button>
            <a href="/user" type="button" class="btn btn-outline-danger float-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
                Back
            </a>
            <button type="reset" class="btn btn-danger float-right mr-2">Reset</button>
        </div>
    </form>
</div>
@endsection
