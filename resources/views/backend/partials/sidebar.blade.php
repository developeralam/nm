<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('dashboard')}}"><img src="{{ asset(''.App\Models\SiteConfig::getAllStiteConfig()->logo)}}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    {{-- Dashboard --}}
                    <li class="active">
                        <a href="{{route('dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                    </li>
                    {{-- Message --}}
                    <li class="">
                        <a href="{{route('messages.index')}}" aria-expanded="true"><i class="ti-control-shuffle"></i><span>Message</span></a>
                    </li>
                    {{-- Site Config --}}
                    <li class="">
                        <a href="{{route('site-config.index')}}" aria-expanded="true"><i class="ti-control-shuffle"></i><span>Global Setting</span></a>
                    </li>
                    {{-- Hero --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Slider</span></a>
                        <ul class="collapse">
                            <li class=""><a href="{{route('hero.index')}}">Slider List</a></li>
                            <li><a href="{{route('hero.create')}}">Add Slider</a></li>
                        </ul>
                    </li>
                    {{-- Product --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Product</span></a>
                        <ul class="collapse">
                            <li class=""><a href="{{route('product.index')}}">Product List</a></li>
                            <li><a href="{{route('product.create')}}">Add Product</a></li>
                        </ul>
                    </li>
                    {{-- Site Config --}}
                    <li class="">
                        <a href="{{route('aboutus.index')}}" aria-expanded="true"><i class="ti-control-shuffle"></i><span>About Us</span></a>
                    </li>
                    {{-- Site Config --}}
                    <li class="">
                        <a href="{{route('social.index')}}" aria-expanded="true"><i class="ti-control-shuffle"></i><span>Social</span></a>
                    </li>
                    {{-- Service --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-server"></i><span>Service</span></a>
                        <ul class="collapse">
                            <li class=""><a href="{{route('service.index')}}">Service List</a></li>
                            <li><a href="{{route('service.create')}}">Add Service</a></li>
                        </ul>
                    </li>
                    {{-- Client --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Client</span></a>
                        <ul class="collapse">
                            <li class=""><a href="{{route('client.index')}}">Client List</a></li>
                            <li><a href="{{route('client.create')}}">Add Client</a></li>
                        </ul>
                    </li>
                    {{-- Client Review --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Client Review</span></a>
                        <ul class="collapse">
                            <li class=""><a href="{{route('client-review.index')}}">Client Review List</a></li>
                            <li><a href="{{route('client-review.create')}}">Add Client Review</a></li>
                        </ul>
                    </li>
                    {{-- Gallery --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Gallery</span></a>
                        <ul class="collapse">
                            <li class=""><a href="#" aria-expanded="true">Photo Gallery</a>
                                <ul class="collapse">
                                    <li><a href="{{route('photo-gallery.index')}}">Photo List</a></li>
                                    <li><a href="{{route('photo-gallery.create')}}">Add Photo</a></li>
                                </ul>
                            </li>
                            <li><a href="#" aria-expanded="true">Video Gallery</a>
                                <ul class="collapse">
                                    <li><a href="{{route('video-gallery.index')}}">Video List</a></li>
                                    <li><a href="{{route('video-gallery.create')}}">Video Photo</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- Team --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Team</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('team.index')}}">Member List</a></li>
                            <li><a href="{{route('team.create')}}">Add Member</a></li>
                        </ul>
                    </li>
                    {{-- Progres --}}
                    <li class="">
                        <a href="{{route('progress.index')}}" aria-expanded="true"><i class="ti-control-shuffle"></i><span>Progress</span></a>
                    </li>
                    {{-- Blog --}}
                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Blog</span></a>
                        <ul class="collapse">
                            <li><a href="">Post List</a></li>
                            <li><a href="">Add Post</a></li>
                        </ul>
                    </li>
                    {{-- Seo --}}
                    <li class="">
                        <a href="{{route('seo.index')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Seo</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

{{-- <li class="">
    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Site Config</span></a>
    <ul class="collapse">
        <li class="active"><a href="index.html">ICO dashboard</a></li>
        <li><a href="index2.html">Ecommerce dashboard</a></li>
        <li><a href="index3.html">SEO dashboard</a></li>
    </ul>
</li> --}}