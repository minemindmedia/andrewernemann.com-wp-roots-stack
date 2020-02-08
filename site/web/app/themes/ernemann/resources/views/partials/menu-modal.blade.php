<!--Modal-->
<div id="main-menu" class="modal-window">
    <div>
        <div class="header h-10 mr-10 ml-10 mt-10">
            <img src="{{ $header->logo }}" class="block w-32 mr-auto float-left">
            <a href="#" class="modal-close"><img src="{{ $header->close }}" class="modal-close block w-16 mr-auto float-right cursor-pointer"></a>
        </div>
        <div class="modal-content container mx-auto h-auto text-left p-4">
            <div class="menu uppercase leading-loose text-3xl mt-16">
                @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'text-center']) !!}
                @endif
            </div>  
        </div>
    </div>
</div>