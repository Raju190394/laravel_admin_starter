@extends('layouts.admin')

@section('content')
<div class="page-header">
    <div class="page-title">User Management</div>
    <div class="breadcrumb">
        <i class="fa-solid fa-users"></i> Home / Users
    </div>
</div>

<div class="container-fluid">
    @if(session('success'))
    <div class="alert alert-success" style="margin-bottom: 20px;">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger" style="margin-bottom: 20px;">
        {{ session('error') }}
    </div>
    @endif

    <div class="card">
        <div class="card-header" style="justify-content: space-between;">
            <h3 style="margin: 0; font-size: 16px;">User List</h3>
            <a href="{{ route('users.create') }}" class="btn btn-primary" style="text-decoration:none;">Add User</a>
        </div>
        <div style="padding: 20px;">
            <table class="admin-table" id="usersTable">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined Date</th>
                        <th width="120" class="no-sort text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('M d, Y') }}</td>
                        <td>
                            <div class="action-btns" style="display: flex; gap: 8px; justify-content: center;">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline btn-sm" title="Edit" style="padding: 4px 8px; color: var(--secondary); border-color: var(--secondary);"><i class="fa-solid fa-pen"></i></a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline btn-sm" title="Delete" style="padding: 4px 8px; color: var(--danger); border-color: var(--danger);"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#usersTable').DataTable({
            "pageLength": 10,
            "order": [[0, "asc"]],
            "columnDefs": [
                { "orderable": false, "targets": 4 }
            ],
            "language": {
                "search": "_INPUT_",
                "searchPlaceholder": "Search users...",
                "lengthMenu": "_MENU_",
                "paginate": {
                    "next": "<i class='fa-solid fa-chevron-right'></i>",
                    "previous": "<i class='fa-solid fa-chevron-left'></i>"
                }
            },
            "dom": '<"table-top"fl>rt<"table-bottom"ip><"clear">'
        });
    });
</script>
@endpush
@endsection
