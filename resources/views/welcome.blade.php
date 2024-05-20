<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
   


</head>

<body>
    <div class="header">

        <div class="logone">
           <h1>HDSHOP.</h1>
        </div>

   




        <div class="menu">
            <a class="linkedit" href="index.html">Home</a>
            <a class="linkedit" href="product.html">Product</a>
            
            <a class="linkedit" href="contact.html">Contact</a>

        </div>
        <div class="search-container">
                         
           
                <input type="text" class="search-box" name="query" placeholder="Nhập từ khóa . . . ">
                <button type="submit" class="search-button"><svg  version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
               <g>
                   <path fill="#231F20" d="M62.242,53.757L51.578,43.093C54.373,38.736,56,33.56,56,28C56,12.536,43.464,0,28,0S0,12.536,0,28
                       s12.536,28,28,28c5.56,0,10.736-1.627,15.093-4.422l10.664,10.664c2.344,2.344,6.142,2.344,8.485,0S64.586,56.101,62.242,53.757z
                        M28,54C13.641,54,2,42.359,2,28S13.641,2,28,2s26,11.641,26,26S42.359,54,28,54z M60.828,60.828c-1.562,1.562-4.095,1.562-5.656,0
                       L44.769,50.425c2.145-1.606,4.051-3.513,5.657-5.656l10.402,10.402C62.391,56.732,62.391,59.266,60.828,60.828z"/>
                   <path fill="#231F20" d="M28,4C14.745,4,4,14.745,4,28s10.745,24,24,24s24-10.745,24-24S41.255,4,28,4z M28,50
                       C15.85,50,6,40.15,6,28S15.85,6,28,6s22,9.85,22,22S40.15,50,28,50z"/>
                   <path fill="#231F20" d="M28,11c-0.553,0-1,0.447-1,1s0.447,1,1,1c8.284,0,15,6.716,15,15c0,0.553,0.447,1,1,1s1-0.447,1-1
                       C45,18.611,37.389,11,28,11z"/>
               </g>
               </svg>   </button>
     
        
      </button>
        </div>

        <div class="Cart">
            <a class="linkedit" href="url">Login</a>
            <a class="linkedit" href="url"><svg class="svgcart" height="30px" width="30px"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                viewBox="0 0 430.624 430.624" xml:space="preserve">
           <g>
               <g>
                   <polygon style="fill:none;" points="91.76,166.207 108.035,250.17 150.845,250.17 137.05,166.207 		"/>
                   <path style="fill:none;" d="M132.414,367.077c0,13.669,11.121,24.789,24.791,24.789c13.668,0,24.787-11.12,24.787-24.789
                       s-11.119-24.789-24.787-24.789C143.535,342.289,132.414,353.408,132.414,367.077z"/>
                   <path style="fill:none;" d="M305.695,367.077c0,13.669,11.123,24.789,24.793,24.789c13.668,0,24.789-11.12,24.789-24.789
                       s-11.121-24.789-24.789-24.789C316.818,342.289,305.695,353.408,305.695,367.077z"/>
                   <polygon style="fill:none;" points="175.165,250.17 230.158,250.17 230.158,166.207 161.371,166.207 		"/>
                   <polygon style="fill:none;" points="334.261,250.17 375.64,250.17 392.298,166.207 346.314,166.207 		"/>
                   <polygon style="fill:none;" points="254.158,250.17 310.015,250.17 322.068,166.207 254.158,166.207 		"/>
                   <polygon style="fill:#10b0f0;" points="87.109,142.208 397.06,142.208 404.009,107.188 80.32,107.188 		"/>
                   <path style="fill:#3D6889;" d="M427.898,87.573c-2.279-2.776-5.682-4.386-9.273-4.386H75.668L64.289,24.474
                       c-1.094-5.642-6.035-9.717-11.781-9.717H12c-6.629,0-12,5.373-12,12s5.371,12,12,12h30.609l51.674,270.404
                       c1.01,5.738,5.994,9.922,11.818,9.922h42.388c-22.757,4.122-40.076,24.067-40.076,47.995c0,26.902,21.887,48.79,48.79,48.79
                       c26.902,0,48.787-21.887,48.787-48.79c0-23.927-17.316-43.872-40.074-47.995h155.855c-22.758,4.122-40.078,24.067-40.078,47.995
                       c0,26.902,21.889,48.79,48.793,48.79c26.902,0,48.789-21.887,48.789-48.79c0-23.927-17.318-43.872-40.074-47.995h36.541
                       c6.627,0,12-5.373,12-12c0-6.628-5.373-12-12-12H116.176L112.5,274.17h272.992c5.729,0,10.656-4.047,11.772-9.665l33.131-166.982
                       C431.093,94,430.177,90.349,427.898,87.573z M355.277,367.077c0,13.669-11.121,24.789-24.789,24.789
                       c-13.67,0-24.793-11.12-24.793-24.789s11.123-24.789,24.793-24.789C344.156,342.289,355.277,353.408,355.277,367.077z
                        M181.992,367.077c0,13.669-11.119,24.789-24.787,24.789c-13.67,0-24.791-11.12-24.791-24.789s11.121-24.789,24.791-24.789
                       C170.872,342.289,181.992,353.408,181.992,367.077z M108.035,250.17L91.76,166.207h45.29l13.795,83.963H108.035z M230.158,250.17
                       h-54.992l-13.795-83.963h68.787V250.17z M310.015,250.17h-55.857v-83.963h67.91L310.015,250.17z M375.64,250.17h-41.379
                       l12.053-83.963h45.984L375.64,250.17z M397.06,142.208H87.109l-6.789-35.02h323.689L397.06,142.208z"/>
               </g>
           </g>
           </svg></a>
            

        </div>


        
    </div><div>

</div>
    <main>
        @yield('content')

    </main>



{{-- footer --}}
    <div>
        <div class="footer">
            <div class="footer-item">
                <div class="item1">
                   <ul>  <h3>HDSHOP. - THỜI TRANG CÔNG SỞ</h3>
                 <p>Công ty TNHH Dịch vụ và Thương mại An Thành.
                    Số ĐKKD 0107861393, Sở KHĐT Tp. Hà Nội cấp ngày 04/10/2017
                    Địa chỉ: Lô 1+2, Ô quy hoạch E.2/NO7 đường Lâm Hạ
                    phường Bồ Đề, quận Long Biên, Hà Nội
                    Chăm sóc khách hàng: 0246.2591551
                    Mua hàng online: 0246.2909098
                    Email: nemcskh@stripe-vn.com</p>
                </ul>
               
                </div>


                <div class="item2">
                    <ul>  <h3>Giới Thiệu</h3>
                       <h4>Triết lý kinh doanh tại HDSHOP.</h4>
                       <h4>HDSHOP.</h4>
                       <h4>Hệ thống showroom</h4>
                       <h4>Liên hệ</h4>

                       </ul>
                </div>


                <div class="item3">
                    <ul> 
                        <h4>Chính sách giao nhận - Vận chuyển</h4>
                        <h4>Hướng dẫn thanh toán</h4>
                        <h4>Tra cứu đơn hàng</h4>
                        <h4>Hướng dẫn chọn Size</h4>
                        <h4>Quy định đổi hàng</h4>
                        <h4>Quy định bảo hành và sửa chữa</h4>
                        <h4>Khách hàng thân thiết</h4>
                       
 
                        </ul>

                </div>


                <div class="item4">
                    <div id="map" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
                        1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
                        2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                        1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
                        5e0!3m2!1svi!2sus!4v1501056274257" width="200px" height="200px"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>

            </div>
        </div>

    </div>


    @yield('footer')
</body>

</html>