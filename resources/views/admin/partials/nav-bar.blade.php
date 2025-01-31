<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Dashboard</a></li>
          @if (Request::route()->getName() == 'getAllAttornys' || Request::route()->getName() == 'addAttornyView')
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">ATTORNEYS</li>
          @elseif (Request::route()->getName() == 'getAllBlogs')
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">BLOGS</li>
          @elseif (Request::route()->getName() == 'getAllNews')
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">NEWS</li>
          @elseif (Request::route()->getName() == 'getAllParacticeAreas')
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">PRACTICE AREAS</li>
          @elseif (Request::route()->getName() == 'getAllGeneralLinks')
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">GENERAL LINKS</li>
          @endif
        </ol>

      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <a href="{{route('logout')}}">
               <h6 class="font-weight-bolder text-white mb-0">Log out</h6>
            </a>
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">

        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
</nav>
