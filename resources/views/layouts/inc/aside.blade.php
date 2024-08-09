<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white text-dark" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0 d-flex justify-content-center" href="{{Route('home')}}">
        <img src="{{asset('assets/img/MEE-armoirie-Ministère-ENG.jpg')}}" class="navbar-brand-img h-100" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dar active bg-gradient-secondary" href="{{route('home')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="text-dark material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('produit')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#5d6c85;" class="bi bi-box2-fill"></i>
            </div>
            <span class="nav-link-text ms-1">Produits</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('inventory')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#5d6c85;" class="bi bi-box2-fill"></i>
            </div>
            <span class="nav-link-text ms-1">Marché</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('demmande')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#5d6c85;"  class="bi bi-postcard-fill"></i>
            </div>
            <span class="nav-link-text ms-1">Demmande</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('demmande.accepte')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#00cc00;"  class="bi bi-check-square-fill"></i>
            </div>
            <span class="nav-link-text ms-1">Demmande Accepté</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('demmande.refu')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#cc0000;" class="bi bi-x-circle-fill"></i>
            </div>
            <span class="nav-link-text ms-1">Demmande Refusée</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('stock')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color:#7b809a;" class="bi bi-arrow-down-right-circle-fill"></i>
            </div>
            <span class="nav-link-text ms-1">Stock</span>
          </a>
        </li>
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Account</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('profile.edit')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i style="color: #5d6c85;" class="bi bi-person-bounding-box"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{route('logout')}}">
            @csrf
            <a class="nav-link text-dark" id="in" href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit(); " role="button">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i style="color: #5d6c85;" class="bi bi-box-arrow-right"></i>
                </div>
                <span class="nav-link-text ms-1">LogOut</span>
            </a>
          </form>
        </li>
      </ul>
    </div>
  </aside>