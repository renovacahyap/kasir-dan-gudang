<div class="sidebar">
    <div class="sidebar-box container p-0" id="sidebar-box">
        <div class="logo rounded-circle mt-md-3 mt-lg-3 ms-3">
            <!-- ini isinya logo brand -->
            <img width="56px" height="56px" src="logo.jpg" alt="">
        </div>
        <ul class="mt-md-5 mt-lg-4">

            @can('admin')
            <li><a href="/">Dashboard</a></li>

            
            <li><a href="/personal">Personal</a></li>
            <li><a href="/toko">Toko</a></li>
            <li><a href="/position">Posisi</a></li>
            <li><a href="/user">Akun</a></li>
            <li><a href="/gudang">Gudang</a></li>
            @endcan

            @can('gudang')
            <li><a href="/">Dashboard</a></li>
            <li><a href="/gudang">Gudang</a></li>
            @endcan
        </ul>
    </div>
</div>