<!--Modal-->
<div class="buy-modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-black opacity-90"></div>
    <div class="modal-container fixed w-full h-full z-50 overflow-y-auto ">
        <div class="header h-10 mr-10 ml-10 mt-10">
            <img src="{{ $header->logo }}" class="block w-32 mr-auto float-left">
            <img src="{{ $header->close }}" class="modal-close block w-16 mr-auto float-right cursor-pointer">
        </div>
        <div class="modal-content container mx-auto h-auto text-left p-4">
            <div class="menu uppercase leading-loose text-3xl mt-16">

            </div>  
        </div>
    </div>
</div>