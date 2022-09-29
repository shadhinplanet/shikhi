@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Course</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Course</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="card">
        <div class="card-body">


            <!-- Striped Rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 30px">#</th>
                        <th scope="col" style="width: 80px" class="text-center">Thumbnail</th>
                        <th scope="col">Name</th>
                        <th scope="col"  class="text-center">Lessons</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($courses as $key => $course)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td class="text-center">
                                <img src="{{ getAssetUrl($course->thumbnail, 'uploads/course') }}"
                                    class="avatar-xs rounded-circle" alt="{{ $course->name }}">
                            </td>
                            <td>
                                {{ $course->name }}
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary position-relative p-0 avatar-xs rounded">
                                    <span class="avatar-title bg-transparent">
                                       34
                                    </span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                </button>
                            </td>
                            <td class="text-capitalize">
                                {{ $course->status }}
                            </td>
                            <td>
                                <div class="hstack gap-3 fs-15">
                                    <a href="javascript:void(0);" class="link-primary"><i
                                            class="ri-settings-4-line"></i></a>
                                    <a href="javascript:void(0);" class="link-danger"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>


        </div>
    </div>


@endsection
