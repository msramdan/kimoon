@extends('layouts.app')

@section('title', __('Detail Role'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ trans('utilities/rolepermission/index.head') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail role information.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/panel">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('roles.index') }}">{{ trans('utilities/rolepermission/index.head') }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ __('Detail') }}
                    </li>
                </x-breadcrumb>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tr>
                                        <td class="fw-bold">{{ trans('utilities/rolepermission/show.name') }}</td>
                                        <td>{{ $role->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ trans('utilities/rolepermission/show.permission') }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                @foreach ($role->permissions as $permission)
                                                    <li class="list-inline-item ">• {{ $permission->name }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ trans('utilities/rolepermission/show.created_at') }}</td>
                                        <td>{{ $role->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ trans('utilities/rolepermission/show.updated_at') }}</td>
                                        <td>{{ $role->updated_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
