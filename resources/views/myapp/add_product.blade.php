<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
  
    
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">
   

   
</head>
<body>
    

@include('myapp.layouts.header')


  <!-- main content  section-->
  <section id="content-dashbord">
        <div id="sidebarstaky">
            <div id="side-card">
                <div id="side-card-header">
                    <a href=""><img src="asset/image/logo.png" alt=""></a>
                    <div>
                        <p>Wellcome,</p>
                        <h3>Geroge Well</h3>
                        <p>@gerogewell</p>
                    </div>
                </div>
                <div id="side-card-menu">
                    <ul>
                        <li><a href=""><img src="asset/icons/icons8-dashboard-layout-50.png" alt="">Dashoard</a></li>
                        <li><a href=""><img src="asset/icons/icons8-order-50.png" alt="">Order</a></li>
                        <li><a href=""><img src="asset/icons/icons8-category-50.png" alt="">Category</a></li>
                        <li><a href=""><img src="asset/icons/icons8-category-50.png" alt="">Add Category</a></li>
                        <li><a href=""><img src="asset/icons/icons8-message-50.png" alt="">Messages</a></li>
                        <li><a href=""><img src="asset/icons/icons8-online-money-transfer-50.png" alt="">Payment</a></li>
                        <li><a href=""><img src="asset/icons/icons8-setting-50.png" alt="">Setting</a></li>
                        <li><a href=""><img src="asset/icons/icons8-logout-50.png" alt="">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>





        <div id="sidebarcontent">
         
            <div class="container12">
                <h1>Upload Your Design Here</h1>
                <p>To Upload Design You Should Full All Input Fields</p>
                <form>
                  <div class="row-upload">
                    <div class="column">
                      <label for="Title">Title</label>
                      <input
                        type="text"
                        name="Title"
                        id="Title"
                        placeholder="Enter Design Title"
                      />
                    </div>
                    <div class="column">
                      <label for="Id">Quantity</label>
                      <input type="number" name="" id="Id" placeholder="Enter Quantity " />
                    </div>
                  </div>
                  <div class="row-upload">
                    <div class="column">
                      <label for="Category">Product Category  </label>
                      <select id="Category" name="Category">
                        <option value="House">House</option>
                        <option value="Shool">Shool</option>
                        <option value="Apartement">Apartement</option>
                      </select>
                    </div>
                    <div class="column">
                      <label for="Price">Price</label>
                      <input
                        type="number"
                        name=""
                        id="Price"
                        placeholder="Enter Price here"
                      />
                    </div>
                  </div>
                  <div class="row-upload">
                    <div class="column">
                      <label for="Category">CategoryID </label>
                      <input type="file" name="" id="file" placeholder="Upload Design" />
                    </div>
                    <div class="column">
                      <label for="Description">Description</label>
                      <textarea
                        id="description"
                        placeholder="Write Essential Information About Your Design"
                        rows="2"
                      ></textarea>
                    </div>
                  </div>
                  <button class="upload-btn">Submit</button>
                </form>
              </div>

        </div>
    </section>

@include('myapp.layouts.footer')    
</body>
</html>