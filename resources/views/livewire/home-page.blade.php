@extends('app')
@section('content')
<div class="home-page">
    <div class="overlap-wrapper">
        <div class="overlap">
            <div class="rectangle"></div>
            {{-- <div class="navbar">
                <img class="image" src="{{ asset('img/image-4-6.png') }}" />
            </div> --}}
            <img class="book-open" src="{{ asset('img/book-open.svg') }}" />
            <div class="search">
                <div class="text-wrapper">Value</div>
                <img class="x" src="{{ asset('img/x.svg') }}" />
            </div>
            <div class="button-grup">
                <!-- Emit the event and also log a console message -->
                <button class="button" wire:click="$emit('openLoginModal')" onclick="console.log('Login Button clicked')">Login</button>

                <button class="button-wrapper" wire:click="$emit('openRegisterModal')" onclick="console.log('Register button clicked')">Register</button>
            </div>

            <div class="rectangle-2"></div>
            <div class="image-2"></div>
            <div class="scroll">
                <div class="ellipse"></div>
                <div class="ellipse-2"></div>
                <div class="ellipse-3"></div>
                <div class="ellipse-4"></div>
            </div>
            <div class="group-wrapper">
                <div class="div-wrapper"><div class="group-3"></div></div>
            </div>
            <div class="image-wrapper">
                <img class="image" src="{{ asset('img/image-4.png') }}" />
            </div>
            <div class="img-wrapper">
                <img class="image" src="{{ asset('img/image-4-4.png') }}" />
            </div>
            {{-- <div class="group-4">
                <img class="image" src="{{ asset('img/image-4-7.png') }}" />
            </div>
            <div class="group-5">
                <img class="image" src="{{ asset('img/image-4-9.png') }}" />
            </div> --}}
            <div class="arrow-right-wrapper">
                <img class="arrow-right" src="{{ asset('img/arrow-right-2.svg') }}" />
            </div>
            <div class="arrow-kanan">
                <img class="arrow-right" src="{{ asset('img/arrow-right.svg') }}" />
            </div>
            <div class="rectangle-3"></div>
            <div class="overlap-group-wrapper">
                <div class="overlap-group">
                    <img class="instagram" src="{{ asset('img/instagram.svg') }}" />
                    <img class="twitter" src="{{ asset('img/twitter.svg') }}" />
                    <img class="github" src="{{ asset('img/github.svg') }}" />
                    <div class="text-wrapper-2">Contact</div>
                    <div class="text-wrapper-3">About</div>
                    <div class="text-wrapper-4">Help</div>
                    <div class="text-wrapper-5">Feedback</div>
                </div>
            </div>
            <div class="rectangle-4"></div>
            <div class="text-wrapper-6">Kentang gedagedi</div>
            <div class="rectangle-5"></div>
            <img class="img" src="{{ asset('img/rectangle-5.svg') }}" />
            <div class="text-wrapper-7">Home</div>
            <div class="text-wrapper-8">Genres</div>
            <div class="text-wrapper-9">Borrow</div>
            <div class="text-wrapper-10">Wishlist</div>
            <div class="text-wrapper-7">Home</div>
            <div class="text-wrapper-8">Genres</div>
            <div class="text-wrapper-9">Borrow</div>

            <!-- Group sections for stars, images, and ratings -->
            @for ($i = 1; $i <= 10; $i++)
            <div class="group-{{ $i }}">
                <div class="overlap-{{ $i }}">
                    <div class="star-wrapper">
                        <div class="star">
                            <div class="overlap-group-{{ $i }}">
                                <img class="vector" src="{{ asset('img/vector-5-'.($i).'.svg') }}" />
                                <img class="star-2" src="{{ asset('img/star-'.($i).'.svg') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="text-wrapper-11">3.9/5</div>
                </div>
            </div>
            @endfor
            
            <!-- Book details -->
            <div class="text-wrapper-12">Kentang gedagedi</div>
            <div class="text-wrapper-13">Gadis Rusa Nokotan</div>
            <div class="text-wrapper-14">Kentang gedagedi</div>

            <div class="group-26">
                <div class="overlap-12">
                    <div class="star-6">
                        <div class="overlap-group-3">
                            <img class="vector" src="{{ asset('img/vector-5-13.svg') }}" />
                            <img class="star-2" src="{{ asset('img/star-6.svg') }}" />
                        </div>
                    </div>
                    <div class="group-27">
                        <div class="text-wrapper-20">3.9/5</div>
                        <div class="text-wrapper-18">Gadis Rusa Nokotan</div>
                        <div class="overlap-13">
                            <img class="image-3" src="{{ asset('img/image-5.png') }}" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="rectangle-8"></div>
            <div class="text-wrapper-25">Popular</div>
            <img class="image-4" src="{{ asset('img/image-1.png') }}" />
            <div class="rectangle-9"></div>
            <div class="text-wrapper-26">Recommended</div>
            <img class="location-on" src="{{ asset('img/location-on.svg') }}" />
        </div>
    </div>
</div>

<livewire:login-modal />
<livewire:register-modal />
@endsection