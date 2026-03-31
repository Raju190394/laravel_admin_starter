@extends('layouts.admin')

@section('content')
<div class="page-header">
    <div class="page-title">Edit User</div>
    <div class="breadcrumb">
        <i class="fa-solid fa-users"></i> Home / Users / Edit
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 style="margin: 0; font-size: 16px;">User Account: {{ $user->name }}</h3>
        </div>
        <div style="padding: 25px;">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6" style="margin-bottom: 20px;">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-6" style="margin-bottom: 20px;">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12" style="margin-bottom: 20px;">
                        <div class="alert alert-info" style="margin-bottom: 0;">
                            <i class="fa-solid fa-info-circle"></i> Leave password fields empty if you don't want to change the password.
                        </div>
                    </div>

                    <div class="col-6" style="margin-bottom: 20px;">
                        <label class="form-label">New Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-6" style="margin-bottom: 25px;">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Leave blank to keep current">
                    </div>

                    <div class="col-12">
                        <div style="display: flex; gap: 10px; padding-top: 10px; border-top: 1px solid #f0f0f0;">
                            <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Update User</button>
                            <a href="{{ route('users.index') }}" class="btn btn-outline" style="padding: 10px 20px; text-decoration:none;">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.alert-info {
    background-color: #f0f7ff;
    border: 1px solid #c9e3ff;
    color: #2e5ea0;
    padding: 10px 15px;
    border-radius: 4px;
    font-size: 13px;
}
</style>
@endsection
