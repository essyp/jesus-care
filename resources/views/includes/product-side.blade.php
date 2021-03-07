<div class="col-md-3 col-sm-4 col-12">
    <div class="sidebar-primary mt-15">
        <h3 class="sidebar-title">Search Products</h3>
        <form action="{{url('/shop/search-product')}}" method="post" class="primary-form mt-20">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-10">
                    <input type="text" name="q" placeholder="Search product...">
                </div>
                <div class="col-2 pl-0">
                    <button type="submit" class="button-text button-lg rounded-border full-width h-49 px-0">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <h3 class="sidebar-title mt-10">Categories</h3>
        <ul class="vertical-nav-1 mt-15">
            @foreach($productcategory as $ct)
            <li><a href="{{url('shop/category/'.$ct->slug)}}">{{$ct->name}}</a></li>
            @endforeach
        </ul>

        @if(count($productfeatured) >= 1)
        <h3 class="sidebar-title mt-40">Products</h3>
        <div class="top-news mt-25">
            @foreach($productfeatured as $pf)
            <div class="shop-product">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12 pr-0">
                        <img src="{{asset('images/products/'.$pf->image)}}" alt="img">
                    </div>
                    <div class="col-md-8 col-sm-8 col-12">
                        <h3><a href="{{url('shop/'.$pf->slug)}}">{{$pf->pname}}</a></h3>
                        <h6>{{$pf->cat->name}}</h6>
                        <div class="price-star clearfix">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
