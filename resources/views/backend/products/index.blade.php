@extends('backend.admin')
@yield('title')


@include('backend.partials.header')

@include('backend.partials.sidebar')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <!-- <form action="/search" method="get" style="margin-bottom:20px;" class="form-inline">
  <div class="form-group" >
    <input type="text" class="form-control" name="search" placeholder="Tên sản phẩm..." value="">
  
  </div>
  
  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> </button>
  <option></option>
</form> -->


    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách sản phẩm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="{{ asset('products/create') }}" class="btn btn-primary">Thêm
                                sản phẩm</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Ảnh sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Nổi bật</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <td>{{ $product->name }}</td>
                                            <td><img width="80px"
                                                    src="{{ url('upload') }}/{{ $product->images }}"
                                                    class="thumbnail"></td>
                                            <td>{{ $product->price }}</td>
                                            <td><a href="{{ route('backend.products.index',['hot',$product->id]) }}"
                                                    class="label {{ $product->getHot($product->vip)['class'] }}">{{ $product->getHot($product->vip)['name'] }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('backend.products.index',['active',$product->id]) }}"
                                                    class="label {{ $product->getStatus($product->active)['class'] }}">{{ $product->getStatus($product->active)['name'] }}</a>
                                            </td>
                                            <td><?php $categories = App\Category::find($product->categories_id) ?>
                                                {{ $categories->name }}
                                            </td>

                                            <td> <a class=""
                                                    href="{{ route('products.edit', $product->id) }}"><i
                                                        class="fa fa-edit"></i></a>

                                                <form class="delete" style="margin-left: 35px; margin-top: -22px;"
                                                    action="{{ route('products.destroy', $product->id) }}"
                                                    method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button style="border: none;" class="">X</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        </div>



                    </div>

                    <div class="clearfix"></div>
                </div>

            </div>

        </div>

    </div>

    <!--/.row-->
</div>
