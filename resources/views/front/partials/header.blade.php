<!-- Navigation
  ================================================== -->
<div class="navigation-wrap cbp-af-header header-dark header-transparent">
    <div class="padding-on-scroll">
        <div class="section-1400">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-xl navbar-light">

                            <a class="navbar-brand animsition-link" href="{{ route('home') }}"><img
                                    src="{{ asset($site_settings->getLogoPathAttribute()) }}" alt="logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto pt-4 pt-xl-0 mr-xl-4">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" aria-haspopup="true" aria-expanded="false"
                                            href="./project-4.html">Product 1</a>
                                    </li>
                                    <li class="nav-item dropdown mega-menu-dropdown-link">
                                        <a class="nav-link" aria-haspopup="true" aria-expanded="false"
                                            href="./project-4.html">Product 2</a>
                                    </li>
                                    <li class="nav-item dropdown mega-menu-dropdown-link">
                                        <a class="nav-link" aria-haspopup="true" aria-expanded="false"
                                            href="./project-4.html">Product 3</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-icon-transparent btn-44 mt-4 mt-xl-0" data-toggle="modal"
                                    data-target="#modalSearch">
                                    <i class="uil uil-search size-20"></i>
                                </a>
                                <div class="pb-3 pb-xl-0"></div>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Search -->

<div class="modal fade modal-search" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="modalSearch"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark-blue">
            <div class="modal-body z-bigger d-flex justify-content-center align-items-center">
                <div class="container-fluid">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                    </button>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input type="text" class="form-style search" placeholder="Search..." autocomplete="off">
                            </div>
                            <p class="mb-0 mt-4 text-center color-gray-dark font-weight-500">Start typing &
                                press "Enter" or "ESC" to close</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
