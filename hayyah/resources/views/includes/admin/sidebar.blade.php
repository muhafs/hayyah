        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>

                        <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>

                            Dashboard
                        </a>

                        <a class="nav-link {{ Route::is('travel-package*') ? 'active' : '' }}"
                            href="{{ route('travel-package.index') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-tents"></i>
                            </div>

                            Paket Travel
                        </a>

                        <a class="nav-link {{ Route::is('gallery*') ? 'active' : '' }}"
                            href="{{ route('gallery.index') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-images"></i>
                            </div>

                            Galari Travel
                        </a>

                        <a class="nav-link {{ Route::is('transaction*') ? 'active' : '' }}"
                            href="{{ route('transaction.index') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-cash-register"></i>
                            </div>

                            Transaksi
                        </a>
                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>

                    {{ auth()->user()->name }}
                </div>
            </nav>
        </div>
