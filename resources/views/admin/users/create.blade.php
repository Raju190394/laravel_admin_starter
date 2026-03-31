@extends('layouts.admin')

@section('content')
<div class="page-header">
    <div class="page-title">Add User</div>
    <div class="breadcrumb">
        <i class="fa-solid fa-users"></i> Home / Users / Add
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 style="margin: 0; font-size: 16px;">New User Info</h3>
        </div>
        <div style="padding: 25px;">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6" style="margin-bottom: 20px;">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter full name" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-6" style="margin-bottom: 20px;">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="admin@example.com" required>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-6" style="margin-bottom: 20px;">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-6" style="margin-bottom: 25px;">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••" required>
                    </div>

                    <div class="col-12">
                        <div style="display: flex; gap: 10px; padding-top: 10px; border-top: 1px solid #f0f0f0;">
                            <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Create User</button>
                            <a href="{{ route('users.index') }}" class="btn btn-outline" style="padding: 10px 20px; text-decoration:none;">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
