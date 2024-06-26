<div class="card mb-5">
    <div
      class="card-header hover-actions-trigger d-flex justify-content-center align-items-end position-relative mb-7 mb-xxl-0"
      style="min-height: 214px; ">
      <div class="bg-holder rounded-top" style="{{ $user->profile_photo_url }}"></div><input class="d-none"
        id="upload-cover-image" type="file" /><label class="cover-image-file-input" for="upload-cover-image"></label>
      <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white"><span
          class="fa-solid fa-camera me-2 overlay-icon"></span></div>
      <!--/.bg-holder-->
      <input class="d-none" id="upload-porfile-picture" type="file" />
      <div class="hoverbox feed-profile" style="width: 150px; height: 150px">
        <div class="hoverbox-content bg-black rounded-circle d-flex flex-center z-index-1"
          style="--phoenix-bg-opacity: .56;"><span class="fa-solid fa-camera fs-7 text-300 light"></span></div>
        <div class="position-relative bg-400 rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
          <div class="avatar avatar-5xl"><img class="rounded-circle rounded-circle bg-white img-thumbnail shadow-sm"
              src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" /></div><label
            class="w-100 h-100 position-absolute z-index-1" for="upload-porfile-picture"></label>
        </div>
      </div>
    </div>
    <div class="card-body text-black">
      <div class="row justify-content-xl-between">
        <div class="col-auto">
          <div class="d-flex flex-wrap mb-3 align-items-center">
            <h2 class="me-2">{{ $user->name }}</h2><span class="fw-semi-bold fs-1 text-1100">u/{{ $user->name }}</span>
          </div>
          <div class="mb-5">
            <div class="d-md-flex align-items-center">
              <div class="d-flex align-items-center"><span
                  class="fa-solid fa-user-group fs--1 text-700 me-2 me-lg-1 me-xl-2"></span><a class="text-1100"
                  href="profile.html#!"><span class="fs-1 fw-bold text-600 hover-text-1100">{{ $user->followers->count() }} <span
                      class="fw-semi-bold ms-1 me-4">Followers</span></span></a>
              </div>
              <div class="d-flex align-items-center"><span
                  class="fa-solid fa-user-check fs--1 text-700 me-2 me-lg-1 me-xl-2"></span><a class="text-1100"
                  href="profile.html#!"><span class="fs-1 fw-bold text-600 hover-text-1100">{{ $user->following->count() }}<span
                      class="fw-semi-bold ms-1 me-4">Following</span></span></a>
              </div>
              <div class="d-flex align-items-center">
                <span class="fa-solid fa-user-check fs--1 text-700 me-2 me-lg-1 me-xl-2"></span>Referal Code:
                <a class="text-1100" href="profile.html#!">
                  <span class="fs-1 fw-bold text-600 hover-text-1100"> <span class="fw-semi-bold ms-1 me-4">{{ $user->referral_code }}</span></span>
                </a>
            </div>
            
              <div class="d-flex align-items-center"><span
                  class="fa-solid fa-location-dot fs--1 text-700 me-2 me-lg-1 me-xl-2"></span><a class="text-1100"
                  href="profile.html#!"><span class="fs-1 fw-semi-bold text-600 hover-text-1100">Vancouver,
                    {{ $user->created_at->format('Y-m-d') }}</span></a>
              </div>
  
            </div>
          </div>
          <p class="fs-2 text-800">“Whenever you find yourself on the side of the majority, it is time to pause and
            reflect.”</p>
        </div>
        <div class="col-auto">
          <div class="row g-2">
            <div class="col-auto order-xxl-2">
  
              @if (!$user->isFollowedBy(auth()->user()) && $user->id !== auth()->user()->id)
              <form action="{{ route('admin.users.follow', $user) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary lh-1"><span class="fa-solid fa-user-plus me-2"></span>Follow
                  Request</button>
              </form>
              @elseif ($user->id !== auth()->user()->id)
              <form action="{{ route('admin.users.unfollow', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary lh-1"><span class="fa-solid fa-user-plus me-2"></span>Dejar
                  de Seguir</button>
              </form>
              @endif
  
  
            </div>
            <div class="col-auto order-xxl-1"><button class="btn btn-phoenix-primary lh-1"><span
                  class="fa-solid fa-message me-2"></span>Send Message</button></div>
            <div class="col-auto">
              <div class="position-static"><button class="btn btn-phoenix-secondary lh-1" data-bs-toggle="dropdown"
                  data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                    class="fa-solid fa-chevron-down me-2"></span> More</button>
                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item d-xl-none"
                    href="profile.html#!"><span
                      class="fa-solid fa-user-group text-800 me-2"></span><span>Followers</span></a><a
                    class="dropdown-item d-xl-none" href="profile.html#!"><span
                      class="fa-solid fa-users text-800 me-2"></span><span>Communities</span></a><a
                    class="dropdown-item d-xl-none" href="profile.html#!"><span
                      class="fa-solid fa-photo-film text-800 me-2"></span><span>Media Files</span></a><a
                    class="dropdown-item d-xl-none" href="profile.html#!"><span
                      class="fa-solid fa-calendar-days fs-0 text-800 me-2"></span><span> Events</span></a><a
                    class="dropdown-item d-xl-none" href="profile.html#!"><span
                      class="fa-solid fa-dice text-800 me-2"></span><span>Games</span></a><a
                    class="dropdown-item d-xl-none" href="profile.html#!"><span
                      class="fa-solid fa-user-gear text-800 me-2"></span><span>Settings</span></a><a class="dropdown-item"
                    href="profile.html#!"><span class="fa-solid fa-bell-slash text-800 me-2"></span><span>Mute
                      Conversation</span></a><a class="dropdown-item" href="profile.html#!"><span
                      class="fa-solid fa-gear text-800 me-2"></span><span>Manage Settings</span></a><a
                    class="dropdown-item" href="profile.html#!"><span
                      class="fa-solid fa-hand-holding-heart text-800 me-2"></span><span>Get help</span></a><a
                    class="dropdown-item" href="profile.html#!"><span
                      class="fa-solid fa-flag text-800 me-2"></span><span>Report Account</span></a><a
                    class="dropdown-item" href="profile.html#!"><span
                      class="fa-solid fa-ban text-800 me-2"></span><span>Block Account</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>