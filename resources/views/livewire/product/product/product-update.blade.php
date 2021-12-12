<div>
 <!-- Content Header (Page header) -->
 <x-loading-indicator/>
 <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">สินค้า: {{ $state['name'] }}</h1>
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
         {{-- <div class="row">
             <div class="col-md-12">
                 <div class="form-group">
                     <input type="text" class="form-control" wire:model.defer="state.name">
                 </div>
             </div>
         </div> --}}
         <div class="row">
             <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>วันที่</th>
                            <th>รายการ</th>
                            <th>ประเภท</th>
                            <th>จำนวน</th>
                            <th>จาก</th>
                            <th>ไป</th>
                            <th>คงเหลือ</th>
                        </thead>
                        <tbody>
                            @foreach (array_reverse($state['transaction']) as $transaction)
                                <tr>
                                    <td>{{ $transaction['created_at'] }}</td>
                                    <td>{{ $transaction['code'] }}</td>
                                    <td>{{ ($transaction['transaction_type'] == 0) ? 'ปรับเข้า' : 'ขายออก' }}</td>
                                    <td>{{ $transaction['quantity'] }}</td>
                                    <td>{{ ($transaction['transaction_type'] == 0) ? '-' : 'คลังสินค้า' }}</td>
                                    <td>{{ ($transaction['transaction_type'] == 1) ? '-' : 'คลังสินค้า' }}</td>
                                    <td>{{ $transaction['total'] }}</td>
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

   