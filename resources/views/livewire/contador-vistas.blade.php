<div>
    <p>Este post tiene {{ $vistas }} vistas.</p>
</div>

<div>
    <li class="nav dropdown">
        <a class="nav" id="navbarDropdownNindeDots" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg>
        </a>
    </li>
</div>
<div>
    <li class="nav dropdown">
        <a class="nav" id="navbarDropdownNindeDots" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg>
        </a>

    </li>
</div>
<div>
    <li class="nav dropdown ni-wh">
        <a class="nav-link position-relative  rounded-circle" id="navbarDropdownNotfication" href="index.html#" style="font-size: 0.8rem; padding: 0.4em 0.6em;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
           <i class="fas fa-bell" style="font-size: 1.2rem;"> </i>
            
           @if ($unreadNotificationsCount > 0)
           <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.8rem; padding: 0.4em 0.6em;">
            {{ $unreadNotificationsCount }}
        </span>
           @endif
           
        </a>
    </li>
</div>
    <div>
        <li class="nav dropdown">
            <a class="nav" id="navbarDropdownUser" href="index.html#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar status-online p-0 m-0">
                <img style="height: 38px; width: 38px;" class="rounded-circle border border-success " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
              </div>
            </a>
        </li>
    </div>

