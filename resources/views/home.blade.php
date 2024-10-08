@extends('app')
@section ('content')

<!-- banner section start -->
<div class="banner_section layout_padding">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_taital">Adventure</h1>
                     <p class="banner_text">Petualangan dimulai saat langkah pertama diambil, 
                        membuka jalan menuju pengalaman baru, tantangan yang belum terpecahkan, 
                        dan penemuan yang akan mengubah cara pandang kita terhadap dunia 😎</p>
                     <div class="read_bt"><a href="#">Get A Quote</a></div>
                  </div>
               </div>
              
               </div>
               
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>


 <!-- services section start -->
 <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Services </h1>
         <p class="services_text">Nikmati pengalaman petualangan tak terlupakan dengan layanan tur dan 
            eksplorasi kami yang dirancang khusus untuk para penjelajah sejati,
             membawa Anda menjelajahi keindahan alam yang tersembunyi dan destinasi 
             eksotis dengan kenyamanan serta keamanan maksimal.</p>
         <div class="services_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div><img src="images/img-1.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Camping</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/img-2.png" class="services_img"></div>
                  <div class="btn_main active"><a href="#">Rafting</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/img-3.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Hiking</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <!-- services section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <div class="about_taital_main">
                  <h1 class="about_taital">About Us</h1>
                  <p class="about_text">Percayalah bahwa hidup adalah sebuah petualangan tanpa akhir. 
                    Kami berdedikasi untuk membantu Anda menjelajahi dunia, menembus batas, 
                    dan menemukan keindahan di setiap sudut yang tersembunyi. Dengan pengalaman
                     bertahun-tahun dalam memandu ekspedisi dan merancang perjalanan tak terlupakan, 
                     kami membawa Anda ke destinasi yang memacu adrenalin dan menginspirasi. 
                     Petualangan Anda adalah prioritas kami, dan bersama kami, setiap langkah 
                     akan dipenuhi dengan tantangan seru, penemuan baru, dan momen yang mengubah hidup. 
                    Mari jelajahi dunia dan buat kisah tak terlupakan bersama-sama. </p>
                  <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
            </div>
            <div class="col-md-6 padding_right_0">
               <div><img src="images/about-img.jpg" class="about_img"></div>
            </div>
         </div>
      </div>
   </div>

   @endsection