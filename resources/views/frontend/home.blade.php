@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')



{{-- main conten --}}
<div>
    <div class="container">

       
        <div class="banner">
           
                <img src="img/banner.webp">

            

        </div>
        <div class="product_super">
          
            <div class="product_grid">

        
                    <div  class="product_grid__row1">
                        
                            
                            <ul>
                               Product Category
                                <li class="lime">
                                    Đầm
                                    <ul>
                                        <li class="licon">
                                         
                                                Đầm Suôn
                                            
                                        </li>
                                        <li class="licon">
                                          
                                                Đầm Bầu
                                         
                                        </li>
                                        <li class="licon">
                                            
                                                Đầm Công Sở
                                           
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Váy
                                    <ul>
                                        <li class="licon">
                                            
                                                Váy Ngắn
                                            
                                        </li>
                                        <li class="licon">
                                            
                                                Chân Váy
                                            
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    Áo Sơ Mi
                                    <ul>
                                        <li class="licon">
                                           
                                               Sơ Mi CÔng Sở
                                            
                                        </li>
                                        <li class="licon">
                                            
                                               Sơ Mi Thiết Kế
                                            
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    Áo Thun
                                  
                                </li>





                            </ul>
                        
                        <div  class="productcontent" > 



                            </div>
                        </div>
                        <div  class="product_grid__row2">
                        
                            <h1>Product New</h1>
                        
                        <div  class="productcontent" > 
                            <div class="ProductItem">
                                <img class="imgimg" src="img/somi1.webp">
              
                                <h4 class="card-title">Áo Thun</h4>
                               
                                <h6>600,000đ</h6>

                            </div>
                            <div class="ProductItem">
                                <img class="imgimg" src="img/img2.jpg">
              
                                <h4 class="card-title">Áo Thun</h4>
                               
                                <h6>600,000đ</h6>

                            </div>
                            <div class="ProductItem">
                                <img class="imgimg" src="img/img3.webp">
              
                                <h4 class="card-title">Áo Thun</h4>
                               
                                <h6>600,000đ</h6>

                            </div>
                            <h1>Product Sale</h1>
                        
                            <div  class="productcontent" > 
                                <div class="ProductItem">
                                    <img class="imgimg" src="img/somi1.webp">
                  
                                    <h4 class="card-title">Áo Thun</h4>
                                   
                                    <h6>600,000đ</h6>
    
                                </div>
                                <div class="ProductItem">
                                    <img class="imgimg" src="img/img2.jpg">
                  
                                    <h4 class="card-title">Áo Thun</h4>
                                   
                                    <h6>600,000đ</h6>
    
                                </div>
                                <div class="ProductItem">
                                    <img class="imgimg" src="img/img3.webp">
                  
                                    <h4 class="card-title">Áo Thun</h4>
                                   
                                    <h6>600,000đ</h6>
    
                                </div>



                            </div>
                        </div>
                          
             </div>       




          
        </div>
        
    
      
      





      
    </div>
    </div>
</div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection