<div>
    <!-- resources/views/components/product-card.blade.php -->
    <li class="card">
        <div class="menu-cont">
            <div class="menu-icon">
                <div class="secondary1"><a style="font-size:12px;font-weight:400;">-40%</a></div>
                <div class="heart">
                    <a href="#">
                        <span class="inner"></span>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <img src="images/gaming.png">
        </div>
        <div class="product-text">
            <p>{{ $title }}</p>
            <p style="color:#DB4444;">${{ $price }} <a style="color:gainsboro;text-decoration:line-through;padding-left:20px ;">${{ $oldPrice }}</a></p>
            <a><i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <a style="color:gainsboro;padding-left:20px;font-weight:600;">({{ $rating }})</a>
            </a>
        </div>
        <div class="AddtoCart"><a href="#">Add to Cart</a></div>
    </li>
</div>