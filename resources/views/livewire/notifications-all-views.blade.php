<div>

    
<li class="nav dropdown ps-2">
    <a class="nav-link position-relative  rounded-circle" href="index.html#" style="font-size: 0.8rem; padding: 0.4em 0.6em;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
       <i class="fas fa-bell" style="font-size: 1.2rem;"> </i>
        
       @if ($unreadNotificationsCount > 0)
       <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.8rem; padding: 0.4em 0.6em;">
        {{ $unreadNotificationsCount }}
    </span>
       @endif
       
    </a>
    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
      <div class="card position-relative border-0">
        <div class="card-header p-2">
          <div class="d-flex justify-content-between">
            <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0" type="button">Mark all as read</button>
          </div>
        </div>

       <div class="card-body p-0">
          <div class="scrollbar-overlay" style="height: 20rem; width: 25rem;">
            <div class="border-300">
     
                @forelse ($notifications as $notification)
                <div class="d-flex align-items-center justify-content-between py-3 border-300 notification-card border-top {{ $notification->read_at ? 'read' : 'unread' }}">
                    <div class="d-flex">
                        <div class="avatar avatar-xl me-3">
                            <img class="rounded-circle" src="{{ $notification->data['user_id'] ?? 'https://via.placeholder.com/50' }}" alt="Avatar" />
                        </div>
                        <div class="me-3 flex-1 mt-2">
                            <h4 class="fs--1 text-black">{{ $notification->data['user_name'] ?? 'Usuario' }}</h4>
                            <p class="fs--1 text-1000">
                                <span class='me-1'>💬</span>{{ $notification->data['message'] ?? 'Tienes una nueva notificación' }}
                                <span class="fw-bold ms-2 text-600 fs--2">{{ $notification->created_at->diffForHumans() }}</span>
                            </p>
                            <p class="text-800 fs--1 mb-0">
                                <span class="me-1 fas fa-clock"></span>
                                <span class="fw-bold">{{ $notification->created_at->format('h:i A') }} </span>{{ $notification->created_at->format('F j, Y') }}
                            </p>
                        </div>
                    </div>
                    <div class="font-sans-serif">
            
                      
                      @if (Auth::user()->hasRole('Admin'))
                      <a class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" 
                         href="{{ route('admin.order_coins.show', $notification->data['order_id']) }}"
                         wire:click.prevent="markAsRead('{{ $notification->id }}')">Ver Admin</a>
                      @else
                          <a class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" 
                            href="{{ route('user_actions.order_vouchers.show', $notification->data['order_id']) }}"
                            wire:click.prevent="markAsRead('{{ $notification->id }}')">Ver</a>
                      @endif
            
                        
                    </div>
                </div>
                  @empty
                      <p>No tienes notificaciones nuevas.</p>
                  @endforelse
             
    {{--           <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                <div class="d-flex align-items-center justify-content-between position-relative">
                  <div class="d-flex">
                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                    <div class="flex-1 me-sm-3">
                      <h4 class="fs--1 text-black">Jessie Samson</h4>
                      <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                      <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                    </div>
                  </div>
                  <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="index.html#!">Mark as unread</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="border-300">
              <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                <div class="d-flex align-items-center justify-content-between position-relative">
                  <div class="d-flex">
                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/40x40/57.webp" alt="" /></div>
                    <div class="flex-1 me-sm-3">
                      <h4 class="fs--1 text-black">Kiera Anderson</h4>
                      <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                      <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                    </div>
                  </div>
                  <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="index.html#!">Mark as unread</a></div>
                  </div>
                </div>
              </div>
              <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                <div class="d-flex align-items-center justify-content-between position-relative">
                  <div class="d-flex">
                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/40x40/59.webp" alt="" /></div>
                    <div class="flex-1 me-sm-3">
                      <h4 class="fs--1 text-black">Herman Carter</h4>
                      <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                      <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                    </div>
                  </div>
                  <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="index.html#!">Mark as unread</a></div>
                  </div>
                </div>
              </div>
              <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                <div class="d-flex align-items-center justify-content-between position-relative">
                  <div class="d-flex">
                    <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/40x40/58.webp" alt="" /></div>
                    <div class="flex-1 me-sm-3">
                      <h4 class="fs--1 text-black">Benjamin Button</h4>
                      <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                      <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                    </div>
                  </div>
                  <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="index.html#!">Mark as unread</a></div>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div> 


        <div class="card-footer p-0 border-top border-0">
          <div class="my-2 text-center fw-bold  text-600"><a class="fw-bolder" href="{{ route('admin.notifications.index') }}">Notification history</a></div>
        </div>
      </div>
    </div>
  </li>
   
</div>

