<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/showblog.css') }}">

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="d-flex flex-column align-items-center" >
    @component("components.header")
    @endcomponent

   <div class="slider container-fluid-xxl row mt-2  justify-content-center-mobile">
    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 d-flex  featured_post pe-5  ">
      <div class=" box-title "> FEATURED POST </div>
      <div class="post-title"> Making smartphones sustainable: Live long and greener </div>
      <div class="time ">
        <div class="time-text"> By</div>
        <div class="author">  Jonh</div>
        <div class="time-text"> |</div>
        <div class="time-text date">  May 23, 2022 </div>
      </div>
      <div class="post-description">
        Lengthening phone lifetimes would help reduce the environmental impact of smartphones. But could smartphone vendors find other revenue sources?
      </div>
      <button class=" btn-mobile btn btn-danger" style="width: 200px; height: 50px;">
        Read More >
      </button>

    </div>
    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12  d-flex align-items-center justify-content-center"> 
      <img class="display-mobile-none post-img-slider" src="../Screen_3/18051e29a0086c873a703c6861f2eefb.jpg" alt="">
    </div>
   </div>

   <div class=" post-box container-fluid d-flex align-items-center flex-column gap-1 ps-5 pe-5  mt-3">
    <div class="list-title text-start w-100"> ALL posts</div>
    <div class="line-grey"></div>
    <div class="list-box-container d-flex flex-column justify-content-center me-pc-5 ">

        @component("components.blog_post")
        @endcomponent

        @component("components.blog_post")
        @endcomponent


        @component("components.blog_post")
        @endcomponent



    </div>
    <div class="pagination-box mt-5">
      <nav aria-label="Page navigation example">
        <ul class="pagination custom-pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>

    </div>


    <div class="all-categories mt-2 text-start w-100">All Categories </div>
    <div class="list-categories mt-3 w-100 ">
      <div class="category_box-mobile row ">
        @component("components.blog_show_category")
        @endcomponent
        
        @component("components.blog_show_category")
        @endcomponent

        @component("components.blog_show_category")
        @endcomponent

        @component("components.blog_show_category")
        @endcomponent
        
      </div>
    



    </div>
   </div>
   

   @component("components.footer")
  @endcomponent
    
</body>
</html>