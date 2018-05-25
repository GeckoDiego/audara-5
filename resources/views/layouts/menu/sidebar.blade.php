<!-- Links -->
<ul class="sidenav-inner py-1">
    <!-- Dashboards -->
    @foreach ($dmenu as $datamenu) 
        <li class="sidenav-item">
            <a class="sidenav-link sidenav-toggle linkable" data-srv="" href="#">
                <!--<img src="{{ asset('assets/img/icons/sidebar/'.$datamenu['name'].'.svg') }}" width="18" alt="">-->
                <i class="sidenav-icon ion ion-md-speedometer"></i>
                <div>{{ __('main/layout.'.$datamenu['name'].'') }}</div>
            </a>
            <!-- se recorre el contenido del item-->
            @if (count($datamenu['data']) > 0)
                <ul class="sidenav-menu">
                    @for ($i = 1; $i < count($datamenu['data']); $i++) 
                        <li class="sidenav-item">
                            @if ($datamenu['data'][$i]['permission'] == 'WRITE')
                                <a class="sidenav-link linkable" href="#" data-srv="aws/{{str_replace('/', '_', @openssl_encrypt($datamenu['data'][$i]['alias'], 'aes128', 'gecko2018'))}}">
                                    <div>{{ $datamenu['data'][$i]['name'] }}</div>
                                </a> 
                            @else
                                <a class="sidenav-link" data-srv="">
                                    <div>{{ $datamenu['data'][$i]['name'] }}</div>
                                </a> 
                            @endif                                    
                        </li>
                    @endfor           
                </ul> 
            @endif
        </li> 
    @endforeach    
</ul>