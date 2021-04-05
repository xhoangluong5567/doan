@extends('backend.admin')
@yield('title')


@include('backend.partials.header')

@include('backend.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách danh mục</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div style="margin-top:30px; margin-bottom:10px">
                                <a href="{{ route('categories.create') }}" class="btn btn-success">Thêm Danh Mục</a>
                            </div>
                            <!-- add modal -->

                        </div>
                        <table class="table table-bordered" style="margin-top:25px;">
                            <thead>
                                <tr style="font-weight: bold">
                                    <td>ID</td>
                                    <td>Thương Hiệu</td>
                                    <td>Trạng thái</td>
                                    <td>Sua</td>
                                    <td>Xoa</td>
                                    @foreach($categories as $categories)
                                <tr>
                                    <td> {{$categories->id}}</td>
                                    <td> {{$categories->name}}</td>
                                    <td>
                                    <a href="{{route('backend.categories.index',['active',$categories->id])}}" class="label {{$categories->getStatus($categories->active)['class']}}">{{$categories->getStatus($categories->active)['name']}}</a> 
                                    </td>

                                    <td> <a class="btn btn-warning" href="{{ route('categories.edit', $categories->id) }}">Edit</a> </td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $categories->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody> 
                                
                        </table>
                        <h1>VIP</h1>
                    </div>
                    

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
</div>