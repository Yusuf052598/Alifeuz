@extends('Back.layouts.layout')
@section('content')
    <div class="am-pagetitle">
        <h5 class="am-title">Dashboard</h5>
        <form id="searchBar" class="search-bar" action="index.html">
            <div class="form-control-wrapper">
                <input type="search" class="form-control bd-0" placeholder="Search...">
            </div><!-- form-control-wrapper -->
            <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
        </form><!-- search-bar -->
    </div><!-- am-pagetitle -->
    <div class="am-pagebody">
        <div class="row row-sm">
            <div class="col-lg-4">
                <div class="card">
                    <div id="rs1" class="wd-100p ht-200"></div>
                    <div class="overlay-body pd-x-20 pd-t-20">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Today's Earnings</h6>
                                <p class="tx-12">November 21, 2017</p>
                            </div>
                            <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                        </div><!-- d-flex -->
                        <h2 class="mg-b-5 tx-inverse tx-lato">$12,212</h2>
                        <p class="tx-12 mg-b-0">Earnings before taxes.</p>
                    </div>
                </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
                <div class="card">
                    <div id="rs2" class="wd-100p ht-200"></div>
                    <div class="overlay-body pd-x-20 pd-t-20">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">This Week's Earnings</h6>
                                <p class="tx-12">November 20 - 27, 2017</p>
                            </div>
                            <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                        </div><!-- d-flex -->
                        <h2 class="mg-b-5 tx-inverse tx-lato">$28,746</h2>
                        <p class="tx-12 mg-b-0">Earnings before taxes.</p>
                    </div>
                </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
                <div class="card">
                    <div id="rs3" class="wd-100p ht-200"></div>
                    <div class="overlay-body pd-x-20 pd-t-20">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">This Month's Earnings</h6>
                                <p class="tx-12">November 1 - 30, 2017</p>
                            </div>
                            <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                        </div><!-- d-flex -->
                        <h2 class="mg-b-5 tx-inverse tx-lato">$72,118</h2>
                        <p class="tx-12 mg-b-0">Earnings before taxes.</p>
                    </div>
                </div><!-- card -->
            </div><!-- col-4 -->
        </div><!-- row -->

    </div>
<!-- am-pagebody -->
@include('Back.Block.footer')
<!-- am-mainpanel -->
@endsection
