<div>
   
    <div class="modal fade" id="category-form" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <form wire:submit.prevent="{{ $editAction ? 'updateCategory' : 'createCategory'}}" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <span>{{ $editAction ? 'แก้ไข' : 'เพิ่มหมวดหมู่' }}</span>
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
                            <span>{{ $editAction ? 'แก้ไข' : 'บันทึก' }}</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
