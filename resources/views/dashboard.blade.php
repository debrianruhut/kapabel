@extends('layouts.app')

@section('title', 'Dashboard | Kapabel Indonesia')

@section('content')
    <div class="container" style="padding-top: 120px; padding-bottom: 80px; min-height: 60vh;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                        <h4 class="mb-0 fw-bold text-dark">{{ __('Dashboard') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                            <div>
                                {{ __("You're logged in!") }}
                            </div>
                    </div>
                </div>

                <!-- Manajemen User -->
                <div class="card shadow-sm border-0 rounded-4 mt-4">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold text-dark"><i class="bi bi-people me-2"></i>{{ __('Manajemen User') }}</h5>
                        <!-- Optionally you can add a create button here if needed in the future -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Joined') }}</th>
                                        <th>{{ __('Aksi') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users ?? [] as $user)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                                    </div>
                                                    <span class="fw-medium">{{ $user->name }}</span>
                                                </div>
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at ? $user->created_at->format('d M Y') : '-' }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-secondary" disabled>Edit</button>
                                                <button class="btn btn-sm btn-outline-danger" disabled>Hapus</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-4">{{ __('Tidak ada user.') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection