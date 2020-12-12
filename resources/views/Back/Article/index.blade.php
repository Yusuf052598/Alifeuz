@extends('Back.layouts.layout')
@section('content')
    <div class="am-pagetitle">
        <h5 class="am-title">Dashboard</h5>
        <form id="searchBar" class="search-bar" action="#">
            <div class="form-control-wrapper">
                <input type="search" class="form-control bd-0" placeholder="Search...">
            </div><!-- form-control-wrapper -->
            <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
        </form><!-- search-bar -->
    </div><!-- am-pagetitle -->
    <div class="am-pagebody">
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card card-body-title py-3 px-2">
                    @if(session()->get('success'))
                        <div class="alert alert-success text-dark">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Article DataTable</h6>
            <div class="table-wrapper text-center">
                <table id="datatable1" class=" table display  table-hover table-bordered  responsive">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Telegram nick</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($db))
                        @foreach($db as $model )
                            <tr>
                                <td class="text-dark">{{$model->id}}</td>
                                <td class="text-dark">{{$model->name}}</td>
                                <td class="text-dark">{{$model->username}}</td>
                                <td class="text-dark">{{$model->phone}}</td>
                                <td class="text-dark">{{$model->email}}</td>
                                <td class="text-dark">{{$model->tg_nick}}</td>
                                <td><i class="fa fa-eye text-dark" style="font-size: 3vh"></i></td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-pencil text-primary" style="font-size: 3vh"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('articles.delete',$model->id)}}">
                                        <i class=" fa fa-trash text-danger" style="font-size: 3vh"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                {{$db->links()}}
            </div><!-- table-wrapper -->
        </div><!-- card -->
    </div>
@endsection

