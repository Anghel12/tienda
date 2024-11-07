<x-app-layout>

</x-app-layout>


<img class="background-image"
  src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/curved-images/curved14.jpg" alt="Fondo">

<div class="container ">
  <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">

 <section class="py-5">
      <div class="container">
  
      <div class="row">

        <div class="card col-12 col-md-6 mx-auto mb-2">
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="notifications.html#!">Pages</a></li>
            <li class="breadcrumb-item active">Notifications</li>
          </ol>
        </nav>

    

       
        <h2 class="mb-5">Notifications</h2>
        <h5 class="text-black mb-3">Today</h5>
        <div class="mx-n4 border-bottom border-300"> {{-- margin mx-lg-n6--}}
 

    @forelse ($notifications as $notification)
    <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top {{ $notification->read_at ? 'read' : 'unread' }}">
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
          href="{{ route('admin.order_coins.show',$notification->data['order_id'] ) }}"
           onclick="markAsUnread('{{ $notification->id }}')">Ver Admin</a>
       
          @else
          <a class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" 
          href="{{ route('user_actions.order_vouchers.show',$notification->data['order_id'] ) }}"
           onclick="markAsUnread('{{ $notification->id }}')">Ver</a>
          @endif

             
        </div>
    </div>
      @empty
          <p>No tienes notificaciones nuevas.</p>
      @endforelse
     {{--      <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top read">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/30.webp" alt="" /></div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Jessie Samson</h4>
                <p class="fs--1 text-1000"><span class='me-1'>💬</span>Mentioned you in a comment<span class="fw-bold"> &quot;Well done! Proud of you ❤️ &quot; </span><span class="ms-2 text-600 fw-bold fs--2">10m</span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div> --}}

          {{-- <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top unread">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3">
                <div class="avatar-name rounded-circle"><span>J</span></div>
              </div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Jane Foster</h4>
                <p class="fs--1 text-1000"><span class='me-1'>📅</span>Created an event<span class="fw-bold"> Rome holidays</span><span class="ms-2 text-600 fw-bold fs--2">20m</span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top unread">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3"><img class="rounded-circle avatar-placeholder" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/avatar.webp" alt="" /></div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Jessie Samson</h4>
                <p class="fs--1 text-1000"><span class='me-1'>👍</span>Liked your comment<span class="fw-bold"> &quot;Amazing Works️&quot;</span><span class="ms-2 text-600 fw-bold fs--2">1h</span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div> --}}
        </div>

     
        <h5 class="text-semi-bold text-black mb-3">Yesterday</h5>
        <div class="mx-n4 mb-9 border-bottom border-300">
         {{--   <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top unread">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="../assets/img/team/57.webp" alt="" /></div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                <p class="fs--1 text-1000"><span class='me-1'>💬</span>Mentioned you in a comment<span class="fw-bold"> &quot;This is too good to be true!&quot;</span><span class="ms-2 text-600 fw-bold fs--2"></span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top unread">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/59.webp" alt="" /></div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Herman Carter</h4>
                <p class="fs--1 text-1000"><span class='me-1'>👤</span>Tagged you in a<span class="fw-bold"> post</span><span class="ms-2 text-600 fw-bold fs--2"></span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top read">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="../assets/img/team/58.webp" alt="" /></div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Benjamin Button</h4>
                <p class="fs--1 text-1000"><span class='me-1'>👍</span>Liked your comment<span class="fw-bold"> &quot;Welcome to the team️&quot;</span><span class="ms-2 text-600 fw-bold fs--2"></span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div>
         <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top read">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/60.webp" alt="" /></div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Aron Paul</h4>
                <p class="fs--1 text-1000"><span class='me-1'>📷</span>Tagged you in a<span class="fw-bold"> photo</span><span class="ms-2 text-600 fw-bold fs--2"></span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:53 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top read">
            <div class="d-flex">
              <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="../assets/img/team/34.webp" alt="" /></div>
              <div class="me-3 flex-1 mt-2">
                <h4 class="fs--1 text-black">Rick Sanchez</h4>
                <p class="fs--1 text-1000"><span class='me-1'>💬</span>Mentioned you in a comment<span class="fw-bold"> &quot;You need to see these amazing photos️&quot;</span><span class="ms-2 text-600 fw-bold fs--2"></span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:45 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="notifications.html#!">Mark as unread</a></div>
            </div>
          </div> --}}
        </div>

      </div>
  
        </div>



      
      </div>
      </div>
      </section>

       </div>
</div>
<style>
  .background-image {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
  }

  .form-container {
    background-color: rgba(255, 255, 255, 0.8);
    /* Fondo blanco semi-transparente */
    border-radius: 15px;
    padding: 20px;
  }
</style>
  
{{-- @section('content')
    <div class="container">
        <h1>Notificaciones</h1>
        <hr>

        @if($notifications->count() > 0)
            <ul class="list-group">
                @foreach($notifications as $notification)
                    <li class="list-group-item">
                        {!! $notification->data['message'] !!}
                        <span class="float-right">{{ $notification->created_at->diffForHumans() }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No tienes notificaciones.</p>
        @endif
    </div>
@endsection
 --}}