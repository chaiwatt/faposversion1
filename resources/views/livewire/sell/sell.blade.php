<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h1>{{ $productCode }}</h1>
</div>

@push('js')
    <script>
        $(document).ready(function(){
            try{
                // Initialize with options
                onScan.attachTo(document, {
                    suffixKeyCodes: [13], 
                    reactToPaste: true, 
                    onScan: function(sCode, iQty) { // Alternative to document.addEventListener('scan')
                        Livewire.emit('scanResult',sCode);
                    },
                    onKeyDetect: function(iKeyCode){
                        // console.log('Pressed: ' + iKeyCode);
                    }
                });
            }catch(e){
                console.log(e);
            }
        });
    </script>
@endpush
