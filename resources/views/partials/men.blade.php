<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Men's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>

    {{-- MEN'S PRODUCTS --}}

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @forelse ($men as $man)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('admin.show-product', $man->id) }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('admin.show-product', $man->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    {{-- FIX ISSUE HERE --}}
                                    <img src="{{ Storage::url($man->image1) }}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{ $man->name }}</h4>
                                    <span>N{{ $man->price }}</span>
                                </div>
                            </div>
                        @empty
                            <p>No Product Added</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
