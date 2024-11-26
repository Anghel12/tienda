@if (count($meet_us))


@foreach ($meet_us as $item)
<section class="py-4">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-md-0 mb-4">
                <h3 class="text-gradient text-info mb-0">{{$item->title}}</h3>
                <h3>{{$item->subtitle}}</h3>
                <p class="mb-4">
                    {{$item->body}}
                </p>
                <p class="font-weight-bold"><span class="me-2">-</span> {{$item->extract}}</p>
                {{-- <p class="font-weight-bold"><span class="me-2">-</span> Publish across social channels in a click
                </p>
                <p class="font-weight-bold"><span class="me-2">-</span> Sell your videos worldwide</p>
                <p class="font-weight-bold mb-5"><span class="me-2">-</span> Make more profit</p> --}}
                <a href="{{ route('home.about.indexaboutus') }}"
                    class="text-info icon-move-right">{{$item->title_button}}
                    <i class="fas fa-arrow-right text-sm ps-1"></i>
                </a>
                @auth
                @if(auth()->user()->hasRole('Admin'))
                <a href="{{ route('admin.home.meet_us.edit', $item) }}"
                    class="btn bg-success btn-rounded me-2 fadeIn1 fadeInBottom">Edit</a>
                @endif
                @endauth
            </div>



            <div class="col-md-6">
                <div class="card p-0 rounded-3">
                    <div class="blur-shadow-image">
                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/buildings.jpg"
                            alt="img-blur-shadow" class="img-fluid shadow rounded-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach


@else
<section class="py-4">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-md-0 mb-4">
                <h3 class="text-gradient text-info mb-0">Come and meet us</h3>
                <h3>500+ offices</h3>
                <p class="mb-4">
                    Technology is applied science. Science is the study of nature. Mathematics is the language of
                    nature. Philosophy is the root of mathematics. All tightly interrelated.
                </p>
                <p class="font-weight-bold"><span class="me-2">-</span> Showcase and embed your work with</p>
                <p class="font-weight-bold"><span class="me-2">-</span> Publish across social channels in a click</p>
                <p class="font-weight-bold"><span class="me-2">-</span> Sell your videos worldwide</p>
                <p class="font-weight-bold mb-5"><span class="me-2">-</span> Make more profit</p>
                <a href="javascript:;" class="text-info icon-move-right">Learn More
                    <i class="fas fa-arrow-right text-sm ps-1"></i>
                </a>
            </div>
            <div class="col-md-6">
                <div class="card p-0 rounded-3">
                    <div class="blur-shadow-image">
                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/buildings.jpg"
                            alt="img-blur-shadow" class="img-fluid shadow rounded-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif