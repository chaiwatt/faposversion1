<div>
    <!-- Content Header (Page header) -->
    <x-loading-indicator/>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">เพิ่มหมวดหมู่</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">แดชบอร์ด</a></li>
                <li class="breadcrumb-item active">เพิ่มหมวดหมู่</li>
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
                                    <a wire:click.prevent="edit({{ $category }})" href=""><i class="fa fa-edit mr-1"></i> </a>
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
        <div class="modal fade" id="category-form" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
                <form wire:submit.prevent="{{ $showEditModal ? 'updateCategory' : 'createCategory'}}" autocomplete="off">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">
                                <span>{{ $showEditModal ? 'แก้ไข' : 'เพิ่มหมวดหมู่' }}</span>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">ชื่อหมวดหมู่</label>
                                <input wire:model.lazy="state.name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="ชื่อหมวดหมู่">
                                @error('name')
                                  <div class="invalid-feedback">
                                    <i class="fa fa-times-circle"></i> {{ $message }}
                                  </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> ยกเลิก</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                                <span>{{ $showEditModal ? 'แก้ไข' : 'บันทึก' }}</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
</div>