<div>
    <!-- Content Header (Page header) -->
    <x-loading-indicator/>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">สินค้า</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">แดชบอร์ด</a></li>
                <li class="breadcrumb-item active">สินค้า</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <a href="{{ route('dashboard.product.create') }}">
                <button class="btn btn-primary mb-2"><i class="fa fa-plus-circle mr-1"></i> เพิ่มสินค้า</button>
              </a>
              <div class="card">
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                        <th>สินค้า</th>
                        <th>หมวด</th>
                        <th>คงคลัง</th>
                        <th>ราคาขาย</th>
                        <th>เพิ่มเติม</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->total }}</td>
                                <td>{{ $product->sale_price }}</td>
                                <td>
                                    <a href=""><i class="fa fa-eye text-info mr-1"></i> </a>
                                    <a  href="{{ route('dashboard.product.edit', $product) }}"><i class="fa fa-edit mr-1"></i> </a>
                                    <a  href=""><i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>