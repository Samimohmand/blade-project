<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page idea</title>
    <link rel="stylesheet" href="{{asset('/asset/css/ideastyle.css')}}">
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">
    <script src="javascript.js"> </script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

@include("myapp.layouts.header")

<div>
  <h1 class="Hading_title"> home Best idea for you </h1>
</div>


<section id="container">

  <div id="all-product">
    <img src="{{asset('/asset/icons/leftarrow.png')}}" class="prev-slide">
    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/kithen1.jpg')}}" alt=""></a>
      <div class="product-details">
        <p class="product-description">Kitchen </p>
      </div>
    </div>

    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/bath2.jpg')}}" alt=""></a>
      <div class="product-details">
        <p class="product-description">Bath</p>

      </div>
    </div>



    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/bedroom2.jpg')}}" alt=""></a>
      <div class="product-details">
        <p class="product-description">Bedroom</p>

      </div>
    </div>




    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/istockphoto-1491224998-1024x1024.jpg')}}" alt=""></a>
      <div class="product-details">
        <p class="product-description">Living</p>

      </div>
    </div>




    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/diningroom2.jpg')}}" alt=""></a>
      <div class="product-details">
        <p class="product-description">Dining</p>

      </div>
    </div>




    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/pool1.jpg')}}" alt=""></a>
      <div class="product-details">
        <p class="product-description">Pool</p>

      </div>
    </div>





    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/gym2.jpg')}}" alt=""></a>
      <div class="product-details">



        <p class="product-description">Gym</p>

      </div>
    </div>

    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/houz.jpg')}}" alt=""></a>
      <div class="product-details">



        <p class="product-description">House</p>

      </div>
    </div>

    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/bedroom.jpg')}}" alt=""></a>
      <div class="product-details">



        <p class="product-description">Lorem </p>

      </div>
    </div>
    <div class="product-class">
      <a href="#"><img src="{{asset('/asset/ideaparthome-image/bath4.jpg')}}" alt=""></a>
      <div class="product-details">



        <p class="product-description">Lorem </p>
      </div>
    </div>
    <img src="{{asset('/asset/icons/rightarrow.png')}}" class="next-slide" alt="">
  </div>

</section>



  <!-------------------------------- end -->










<!--the button dropdown  ================================-->
<section id="new-navbar">
    <menu>
        <menuitem id="demo1">
            <a>style</a>
            <menu>
                <menuitem><a>about</a></menuitem>
           <menuitem>
              <a>settings</a>
     
           </menuitem>
                <menuitem><a>help</a></menuitem>
                <menuitem id="demo2">
                    <a>more</a>
            
                </menuitem>
            </menu>
        </menuitem>
        <menuitem id="demo1">
        <a>Bedroom style</a>
        <menu>
            <menuitem><a>Nice</a></menuitem>
       <menuitem>
          <a>nith design</a>
       
       </menuitem>
            <menuitem><a>Light desing</a></menuitem>
            <menuitem id="demo2">
                <a>more</a>
              
            </menuitem>
        </menu>
    </menuitem>
     <menuitem>
     <a>size</a>

     <menu>
        <menuitem><a>Large Home</a></menuitem>
   <menuitem>
      <a>Medium Home</a>
     
   </menuitem>
        <menuitem><a>small  Home</a></menuitem>
        <menuitem id="demo2">
            <a>more</a>
           
        </menuitem>
    </menu>
    
    
    </menuitem>
     <menuitem>
     
     <a>color</a>
    
     <menu>
        <menuitem><a>about</a></menuitem>
   <menuitem>
      <a>settings</a>
   
   </menuitem>
        <menuitem><a>help</a></menuitem>
        <menuitem id="demo2">
            <a>more</a>
      
        </menuitem>
    </menu>
    
    </menuitem>
    </menu>
  </section>
<!-- ============================ -->

    <div class="container-fluid">
        <div class="px-lg-5">
      
          <!-- For demo purpose -->
       
          <!-- End -->
      
          <div class="row">
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img src="{{asset('/asset/ideaparthome-image/img1.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Red paint cup</a></h5>
                  <a href="#" style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
           <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img src="{{asset('/asset/ideaparthome-image/img1.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">And She Realized</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img src="{{asset('/asset/ideaparthome-image/img1.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">And She Realized</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img src="{{asset('/asset/ideaparthome-image/img4.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">DOSE Juice</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img src="{{asset('/asset/ideaparthome-image/img5.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Pineapple</a></h5>
                  <a href="#" style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img  src="{{asset('/asset/ideaparthome-image/img6.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Yellow banana</a></h5>
                  <a href="#" style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img  src="{{asset('/asset/ideaparthome-image/img1.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Teal Gameboy</a></h5>
                  <a href="#" style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img  src="{{asset('/asset/ideaparthome-image/img8.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Color in Guatemala.</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img  src="{{asset('/asset/ideaparthome-image/img1.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Red paint cup</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                  
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img  src="{{asset('/asset/ideaparthome-image/img5.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Lorem ipsum dolor</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img  src="{{asset('/asset/ideaparthome-image/img6.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Lorem ipsum dolor</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="bg-white rounded shadow-sm"><img  src="{{asset('/asset/ideaparthome-image/img5.jpg')}}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5> <a href="#" class="text-dark"style="text-decoration: none;">Lorem ipsum dolor</a></h5>
                  <a href="#"style="text-decoration: none;"> <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
                 
                </div>
              </div>
            </div>
            <!-- End -->
      
          </div>
          <div class="py-5 text-right"><a href="#" id="btn-color" class="btn  px-5 py-3 text-uppercase">Show me more</a></div>
        </div>
      </div>


@include("myapp.layouts.footer");


<script>
        // the slider js


        const prevSlide = document.querySelector('.prev-slide');
  const nextSlide = document.querySelector('.next-slide');
  const allProduct = document.querySelector('#all-product');

  const slideWidth = allProduct.scrollWidth / allProduct.children.length;

  // Scroll to the previous slide
  prevSlide.addEventListener('click', () => {
    allProduct.scrollLeft -= 60;
  });

  // Scroll to the next slide
  nextSlide.addEventListener('click', () => {
    allProduct.scrollLeft += 60;
  });




    // the drop down js        // For the thumbnail demo! :]

var count = 1
setTimeout(demo, 500)
setTimeout(demo, 700)
setTimeout(demo, 900)
setTimeout(reset, 2000)

setTimeout(demo, 2500)
setTimeout(demo, 2750)
setTimeout(demo, 3050)


var mousein = false
function demo() {
   if(mousein) return
   document.getElementById('demo' + count++)
      .classList.toggle('hover')
   
}

function demo2() {
   if(mousein) return
   document.getElementById('demo2')
      .classList.toggle('hover')
}

function reset() {
   count = 1
   var hovers = document.querySelectorAll('.hover')
   for(var i = 0; i < hovers.length; i++ ) {
      hovers[i].classList.remove('hover')
   }
}

document.addEventListener('mouseover', function() {
   mousein = true
   reset()
})
      </script>

</body>
</html>