
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Profile</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">User Profile</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-3">
    
    <div class="card card-primary card-outline">
    <div class="card-body box-profile">
    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="{{ $user->profile_photo_url }}" alt="User profile picture"></div>
    <h3 class="profile-username text-center">{{ $user->name }}</h3>
    <p class="text-muted text-center">Software Engineer</p>
    <ul class="list-group list-group-unbordered mb-3">
    <li class="list-group-item">
    <b>Followers</b> <a class="float-right"> {{ $user->follows->count() }}</a>
    </li>
    <li class="list-group-item">
    <b>Following</b> <a class="float-right">{{ $user->following->count() }}</a>
    </li>
    <li class="list-group-item">
    <b>Friends</b> <a class="float-right">13,287</a>
    </li>
    </ul>
    {{-- seguir a un usuario --}}
    @if (!$user->isFollowedBy(auth()->user()) && $user->id !== auth()->user()->id)
    <form action="{{ route('admin.users.follow', $user) }}" method="POST">
        @csrf
        <button type="submit">Seguir</button>
    </form>
    @elseif ($user->id !== auth()->user()->id)
        <form action="{{ route('admin.users.unfollow', $user) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Dejar de seguir</button>
        </form>
    @endif

{{--     <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}



    </div>
    
    </div>