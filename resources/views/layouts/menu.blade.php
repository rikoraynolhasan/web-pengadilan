<!-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>User</span></a>
</li> -->

<li class="{{ Request::is('anggotas*') ? 'active' : '' }}">
    <a href="{{ route('anggotas.index') }}"><i class="fa fa-edit"></i><span>Anggota</span></a>
</li>

<li class="{{ Request::is('bukus*') ? 'active' : '' }}">
    <a href="{{ route('bukus.index') }}"><i class="fa fa-edit"></i><span>Buku</span></a>
</li>

<li class="{{ Request::is('transaksis*') ? 'active' : '' }}">
    <a href="{{ route('transaksis.index') }}"><i class="fa fa-edit"></i><span>Transaksi</span></a>
</li>

<!-- <li class="{{ Request::is('bukus*') ? 'active' : '' }}">
    <a href="{{ route('bukus.index') }}"><i class="fa fa-edit"></i><span>Bukus</span></a>
</li> -->


