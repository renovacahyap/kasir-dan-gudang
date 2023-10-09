<div class="sidebar">
    <div class="sidebar-box container p-0" id="sidebar-box">
        <div class="logo rounded-circle mt-md-3 mt-lg-3 ms-3">
            <!-- ini isinya logo brand -->
            <img width="56px" height="56px" src="logo.jpg" alt="">
        </div>
        <ul class="mt-md-5 mt-lg-4">

            @can('admin')
            {{-- {{ dd($request) }} --}}
            <li class=" {{ Request::is('/') ? 'bg-hover' : '' }} "><a href="/">Dashboard</a></li>
           
            
            <li class=" {{ Request::is('personal') || Request::is('personal/*') ? 'bg-hover' : '' }} "><a href="/personal">Personal</a></li>
            <li class=" {{ Request::is('toko') || Request::is('toko/*') ? 'bg-hover' : '' }}"><a href="/toko">Toko</a></li>
            <li class=" {{ Request::is('position') || Request::is('position/*') ? 'bg-hover' : '' }}"><a href="/position">Posisi</a></li>
            <li class=" {{ Request::is('user') || Request::is('user/*') ? 'bg-hover' : '' }}"><a href="/user">Akun</a></li>
            <li class=" {{ Request::is('gudang') || Request::is('gudang/*') ? 'bg-hover' : '' }}"><a href="/gudang">Gudang</a></li>
            @endcan

            @can('gudang')
            <li class=" {{ Request::is('/') ? 'bg-hover' : '' }} "><a href="/">Dashboard</a></li>
            <li class=" {{ Request::is('gudang') || Request::is('gudang/*') ? 'bg-hover' : '' }}"><a href="/gudang">Gudang</a></li>
            @endcan
        </ul>
    </div>
</div>