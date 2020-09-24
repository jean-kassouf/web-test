<div class="container">
    <div class="d-flex flex-row justify-content-between align-items-stretch" >
        <div class="col logo-container my-3">
            <img src="{{asset('frontend')}}/assets/imgs/logo.png" border=0 alt="logo"/>
        </div>
        <div class="w-100">
            <div class="container-fluid h-100">
                <div class="row float-right h-50 d-flex align-items-center">
                    <span class="email font-weight-bold">info@company.com</span> 
                    <span class="lang active font-weight-bold px-4">en</span> 
                    <span class="lang font-weight-bold">GR</span> 
                </div>
                <div class="clearfix"></div>
                <div class="row h-50">
                    <!--navbar-->
                    <nav class="navbar navbar-expand-md navbar-light ml-auto float-right bg-white">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutus">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#products">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!--seperator line-->
<div class="border border-warning" style="position:absolute;right:0;top:150px;left:280px;"></div>

<!--carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('frontend')}}/assets/imgs/carousel.png" class="d-block w-100" alt="the main page">
        </div>
    </div>
</div>