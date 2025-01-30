@props(['groupedMenu'])


    @foreach($groupedMenu as $type => $categories)
        @foreach($categories as $category => $items)   
        <div id="menu-wrapper">
            <h2>{{ $category }}</h2>
                
                    @foreach($items as $item)
                    <div class="breakfast menu-restaurant">
                            <span class="clearfix">
                                <a class="menu-title" href="#">{{ $item->title_ua }} ({{ $item->title_en }})</a>
                                <span style="left:166px;right:44px;" class="menu-line"></span>              
                        @if($item->variants->isNotEmpty())                             
                                @foreach($item->variants as $variant)
                                    <span class="menu-price">{{ $variant->output }} {{ $variant->volume }} - {{ $variant->price }} {{ $variant->currency }}</span>
                                @endforeach
                            
                        @else
                            <span class="menu-price">Ціна: {{ $item->price ?? 'Немає даних' }}</span>
                        @endif
                            </span>
                        <span class="menu-subtitle">{{ $item->description_ua }}</span>                    
                    </div> 
                        @endforeach          
        </div>
        @endforeach
    @endforeach

