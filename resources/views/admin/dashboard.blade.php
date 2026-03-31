@extends('layouts.admin')

@section('content')
<div class="page-header">
    <div class="page-title">Dashboard Overview</div>
    <div class="breadcrumb">
        <i class="fa-solid fa-gauge"></i> Home / Dashboard
    </div>
</div>

<div class="container-fluid">
    <!-- Stats widgets -->
    <div class="row">
        <div class="col-3">
            <div class="stat-card">
                <div class="stat-icon bg-blue">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-label">Total Users</div>
                    <div class="stat-value">{{ $totalUsers }}</div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="stat-card">
                <div class="stat-icon bg-green">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-label">New Today</div>
                    <div class="stat-value">0</div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="stat-card">
                <div class="stat-icon bg-orange">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-label">Active Roles</div>
                    <div class="stat-value">1</div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="stat-card">
                <div class="stat-icon bg-purple">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-label">System Uptime</div>
                    <div class="stat-value">99.9%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Dashboard Row -->
    <div class="row">
        <!-- Recent Users Section -->
        <div class="col-6">
            <div class="card">
                <div class="card-header" style="justify-content: space-between;">
                    <h3 style="margin: 0; font-size: 16px;">Recent Users</h3>
                    <a href="{{ route('users.index') }}" class="btn btn-outline" style="text-decoration:none; padding: 4px 10px;">View All</a>
                </div>
                <div style="overflow-x: auto;">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($latestUsers as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Another Widget (Placeholder) -->
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 style="margin:0; font-size: 16px;">Analytics</h3>
                </div>
                <div style="padding: 20px; text-align: center; color: #888;">
                    <i class="fa-solid fa-chart-area" style="font-size: 48px; display: block; margin-bottom: 20px;"></i>
                    <p>Sample analytics chart view placeholder.</p>
                    <div style="height: 150px; background: #f8f9fa; border: 1px dashed #ddd; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        [Chart Visualization]
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
