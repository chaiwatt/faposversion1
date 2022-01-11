<div>
    <!-- Content Header (Page header) -->
    <x-loading-indicator/>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">หมวดหมู่</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">แดชบอร์ด</a></li>
                <li class="breadcrumb-item active">หมวดหมู่</li>
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
              <button wire:click.prevent="addNew" class="btn btn-primary mb-2"><i class="fa fa-plus-circle mr-1"></i> เพิ่มหมวดหมู่</button>
              <div class="card">
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                        <th>หมวดหมู่</th>
                        <th>สินค้าคงคลัง</th>
                        <th>เพิ่มเติม</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->products->count() }}</td>
                                <td>
                                    <a href=""><i class="fa fa-eye text-info mr-1"></i> </a>
                                    <a wire:click.prevent="edit({{ $category->id }})" href=""><i class="fa fa-edit"></i> </a>
                                    <a wire:click.prevent="delete({{ $category->id }})" href=""><i class="fa fa-trash text-danger"></i> </a>
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
        {{-- Modal Here --}}
        <livewire:product.category.category-create-update >
      </div>
</div>