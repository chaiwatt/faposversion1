<div>
    <!-- Content Header (Page header) -->
    <x-loading-indicator/>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">เพิ่มสินค้า</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">แดชบอร์ด</a></li>
                <li class="breadcrumb-item active">เพิ่มสินค้า</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->
   
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="code">รหัสสินค้า (สแกนบาร์โค้ด)</label>
                                <input type="text" class="form-control" id="code" placeholder="รหัสสินค้า">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">ชื่อสินค้า</label>
                                <input type="text" class="form-control" id="name" placeholder="ชื่อสินค้า">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="category">หมวดหมู่</label>
                                <input type="text" class="form-control" id="category" placeholder="หมวดหมู่">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="unit">หน่วย</label>
                                <input type="text" class="form-control number-masked" id="unit" placeholder="หน่วย">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cost_price">ราคาต้นทุน</label>
                                <input type="text" class="form-control double-masked" id="cost_price" placeholder="ราคาต้นทุน">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="sale_price">ราคาขาย</label>
                                <input type="text" class="form-control double-masked" id="sale_price" placeholder="ราคาขาย">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="stock">ยอดยกมา</label>
                                <input type="text" class="form-control number-masked" id="stock" placeholder="ยอดยกมา">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
   </div>

   @push('js')
    <script>
        var doubleMasked = document.getElementsByClassName('double-masked');
            Array.prototype.forEach.call(doubleMasked, function(element) {
                var maskOptions = {
                    mask: Number,  // enable number mask
                    scale: 2,  // digits after point, 0 for integers
                    signed: false,  // disallow negative
                    thousandsSeparator: ',',  // any single char
                    padFractionalZeros: false,  // if true, then pads zeros at end to the length of scale
                    normalizeZeros: true,  // appends or removes zeros at ends
                    radix: '.',  // fractional delimiter
                    mapToRadix: ['.'],  // symbols to process as radix
                    // additional number interval options (e.g.)
                    min: 0,
                    max: 1000000000
                };
            var phoneMask = new IMask(element, maskOptions);
        });

        var numberMasked = document.getElementsByClassName('number-masked');
            Array.prototype.forEach.call(numberMasked, function(element) {
                var maskOptions = {
                    mask: Number,  // enable number mask
                    signed: false,  // disallow negative
                    thousandsSeparator: ',',  // any single char
                    padFractionalZeros: false,  // if true, then pads zeros at end to the length of scale
                    normalizeZeros: true,  // appends or removes zeros at ends
                    // additional number interval options (e.g.)
                    min: 0,
                    max: 1000000000
                };
            var phoneMask = new IMask(element, maskOptions);
        });
    </script>
   @endpush
   
      