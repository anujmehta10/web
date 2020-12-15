<?php session_start();
include_once('header1.php');
include_once('config.php');
include_once('Product.php');
$obj=new DB_con();
$message="";
$errors=array();
$r=false;

if(isset($_SESSION['user'])){
  header('location:login.php');
}  
else{
  $r=false;
}
if(isset($_SESSION['admin'])){

?>


<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="logo.png" class="navbar-brand-img" width="90px" height="125px">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <a class="nav-link active" href="../logout.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
          </a>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Products</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="createcategory.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Create Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newproduct.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Add Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewproduct.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">View Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Create New Offers</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Orders</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Pending Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Completed Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Cancelled Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Generate Invoice</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Services</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Active Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Expired Services</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Users</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">All User List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Create New User</span>
              </a>$ob=new User();
            </li>
          </ul>
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Blog</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Add New Blog</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">View all Blogs</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Accounts</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Update Company Info</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Change Security Ques</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Change Password</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="tony.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Tony Stark</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px;  background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
      <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              <table id="viewproduct" class="table align-items-center table-flush" style="width:100%">
                <thead class="thead-light">
                    <tr>
                        <th>Prod_parent_id</th>
                        <th>Product Name</th>
                        <th>Link</th>
                        <th>Monthly Price</th>
                        <th>Annual Price</th>
                        <th>SKU</th>
                        <th>Available</th>
                        <th>Date</th>
                        <th>Web Space</th>
                        <th>Bandwidth</th>
                        <th>Free Domain</th>
                        <th>Luggage</th>
                        <th>Mail Box</th>
                        <th>Action</th>
                    </tr>
                </thead>
             </table>
           </div>
         </div>
       </div>
        
     </div>
    </div>
</div>
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal">
        ...
      </div>
    </div>
  </div>
</div>
  <!-- Argon Scripts -->
  <!-- Core -->
</body>

<script>
    $(document).ready(function(){
  viewproduct();
});
function viewproduct(){
  $('#viewproduct').DataTable({
    "ajax": "../inter.php?viewproduct=1"
  });
}

$('#viewproduct').on('click','#vieweditproduct',function(){
  var id=$(this).data('id');
  // console.log(id);
  editproductdata(id);
});

$('#viewproduct').on('click','#viewdelproduct',function(){
  var id=$(this).data('id');
  // console.log(id);
  // delproductdata(id);
  var r=confirm("are you sure you want to delete?");
  if(r){
    delproductdata(id);
  }
});
function delproductdata(id){
$.ajax({
  url: '../inter.php',
    method: 'POST',
    data: {
      id: id,
      action: "del"
    },
    dataType:'json',
    success: function(msg){
      if(msg=="true"){
        alert('deleted successfully');
        location.reload();
      }
      else if(msg=="false"){
        alert("delete failed");
      }
      location.reload();
    },
    error: function(){
      alert("error in deletion");
    }
});
}


function editproductdata(id){  
  $.ajax({
    url: '../inter.php',
    method: 'POST',
    data: {
      id : id,
      action : "edit"
    },
    dataType: 'json',
    success: function(msg){
        var html='<form class="" action="" method="post" name="" id="xyz" accept-charset="" autocomplete="">\
        <div role="main" class="form-all">\
          <ul class="form-section page-section">\
            <li id="cid_1" class="form-input-wide" data-type="control_head">\
              <div class="form-header-group  header-large">\
                <div class="header-text httal htvam">\
                  <h1 id="header_1" class="form-header" data-component="header">\
                    Create New Product\
                  </h1>\
                  <div id="subHeader_1" class="form-subHeader">\
                    Enter Product Details\
                  </div>\
                </div>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_dropdown" id="id_3">\
              <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3">\
                Select Product Category\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_3" class="form-input-wide jf-required" data-layout="half">\
                <select class="cat form-dropdown validate[required]" id="input_3" name="q3_selectProduct" style="width:310px" data-component="dropdown" required="" aria-labelledby="label_3">\
                  <option value="" selected disabled> Please Select </option>';
                  for(var i=0;i<msg.category.length;i++){
                    if(msg.category[i]['id']==msg.product['product_parent_id']){
                      html+='<option value="'+msg.category[i]["prod_name"]+'" selected>'+msg.category[i]["prod_name"]+'</option>';
                    }else{
                      html+='<option value="'+msg.category[i]["prod_name"]+'">'+msg.category[i]["prod_name"]+'</option>';
                    }
                  }
               html+='</select>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_textbox" id="id_4">\
              <label class="form-label form-label-top form-label-auto" id="label_4 namepro" for="input_4">\
                Enter Product Name\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_4" class="form-input-wide jf-required" data-layout="half">\
                <input type="text" id="input_4 " name="q4_enterProduct" data-type="input-textbox" value="'+msg['product']['prod_name']+'" class="prod_name form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_4" required="" />\
              </div>\
            </li>\
            <li class="form-line" data-type="control_textbox" id="id_5">\
              <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Page URL </label>\
              <div id="cid_5" class="form-input-wide" data-layout="half">\
                <input type="text" id="input_5 " name="q5_pageUrl" data-type="input-textbox" value="'+msg['product']['html']+'" class="link form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_5" />\
              </div>\
            </li>\
            <li class="form-line" data-type="control_divider" id="id_8">\
              <div id="cid_8" class="form-input-wide" data-layout="full">\
                <div data-component="divider" style="border-bottom:5px solid #e6e6e6;height:5px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">\
                </div>\
              </div>\
            </li>\
            <li id="cid_9" class="form-input-wide" data-type="control_head">\
              <div class="form-header-group  header-default">\
                <div class="header-text httal htvam">\
                  <h2 id="header_9" class="form-header" data-component="header">\
                    Product Description\
                  </h2>\
                  <div id="subHeader_9" class="form-subHeader">\
                    Enter Product Description Below\
                  </div>\
                </div>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_number" id="id_11">\
              <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11">\
                Enter Monthly Price\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_11" class="form-input-wide jf-required" data-layout="half">\
                <span class="form-sub-label-container" style="vertical-align:top">\
                  <input type="number" id="input_11 " value="'+msg['product']['mon_price']+'" name="q11_enterMonthly" data-type="input-number" class="mon_price form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_11 sublabel_input_11" required="" step="any" />\
                  <label class="form-sub-label" for="input_11" id="sublabel_input_11" style="min-height:13px" aria-hidden="false"> This would be Monthly Plan </label>\
                </span>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_number" id="id_12">\
              <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12">\
                Enter Annual Price\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_12" class="form-input-wide jf-required" data-layout="half">\
                <span class="form-sub-label-container" style="vertical-align:top">\
                  <input type="number" id="input_12" value="'+msg['product']['annual_price']+'" name="q12_enterAnnual" data-type="input-number" class="annual_price form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_12 sublabel_input_12" required="" step="any" />\
                  <label class="form-sub-label" for="input_12" id="sublabel_input_12" style="min-height:13px" aria-hidden="false"> This would be Annual Price </label>\
                </span>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_textbox" id="id_13">\
              <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13">\
                SKU\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_13" class="form-input-wide jf-required" data-layout="half">\
                <input type="text" id="input_13" name="q13_sku" value="'+msg['product']['sku']+'" data-type="input-textbox" class="sku form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_13" required="" />\
              </div>\
            </li>\
            <li class="form-line" data-type="control_divider" id="id_14">\
              <div id="cid_14" class="form-input-wide" data-layout="full">\
                <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">\
                </div>\
              </div>\
            </li>\
            <li id="cid_15" class="form-input-wide" data-type="control_head">\
              <div class="form-header-group  header-default">\
                <div class="header-text httal htvam">\
                  <h2 id="header_15" class="form-header" data-component="header">\
                    Features\
                  </h2>\
                </div>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_textbox" id="id_16">\
              <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16">\
                Web Space(in GB)\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_16" class="form-input-wide jf-required" data-layout="half">\
                <span class="form-sub-label-container" style="vertical-align:top">\
                  <input type="text" id="input_16" value="'+msg['product']['description']['webspace']+'" name="q16_webSpacein" data-type="input-textbox" class="webspace form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_16 sublabel_input_16" required="" />\
                  <label class="form-sub-label" for="input_16" id="sublabel_input_16" style="min-height:13px" aria-hidden="false"> Enter 0.5 for 512 MB </label>\
                </span>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_textbox" id="id_17">\
              <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">\
                Bandwidth (in GB)\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_17" class="form-input-wide jf-required" data-layout="half">\
                <span class="form-sub-label-container" style="vertical-align:top">\
                  <input type="text" id="input_17" value="'+msg['product']['description']['bandwidth']+'" name="q17_bandwidthin" data-type="input-textbox" class="band form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_17 sublabel_input_17" required="" />\
                  <label class="form-sub-label" for="input_17" id="sublabel_input_17" style="min-height:13px" aria-hidden="false"> Enter 0.5 for 512 MB </label>\
                </span>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_textbox" id="id_18">\
              <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18">\
                Free Domain\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_18" class="form-input-wide jf-required" data-layout="half">\
                <span class="form-sub-label-container" style="vertical-align:top">\
                  <input type="text" id="input_18" value="'+msg['product']['description']['domain']+'" name="q18_freeDomain" data-type="input-textbox" class="domain form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_18 sublabel_input_18" required="" />\
                  <label class="form-sub-label" for="input_18" id="sublabel_input_18" style="min-height:13px" aria-hidden="false"> Enter 0 if no domain available in this service </label>\
                </span>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_textbox" id="id_19">\
              <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19">\
                Language / Technology Support\
                <span class="form-required">\
                  *\
                </span>\
              </label>\
              <div id="cid_19" class="form-input-wide jf-required" data-layout="half">\
                <span class="form-sub-label-container" style="vertical-align:top">\
                  <input type="text" id="input_19" value="'+msg['product']['description']['lang']+'" name="q19_language" data-type="input-textbox" class="lang form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_19 sublabel_input_19" required="" />\
                  <label class="form-sub-label" for="input_19" id="sublabel_input_19" style="min-height:13px" aria-hidden="false"> Separate by (,) Ex: PHP, MySQL, MongoDB </label>\
                </span>\
              </div>\
            </li>\
            <li class="form-line jf-required" data-type="control_textbox" id="id_20">\
        <label class="form-label form-label-top form-label-auto" id="label_20" for="input_20">\
          Mailbox\
          <span class="form-required">\
            *\
          </span>\
        </label>\
        <div id="cid_20" class="form-input-wide jf-required" data-layout="half">\
          <span class="form-sub-label-container" style="vertical-align:top">\
            <input type="text" id="input_20" value="'+msg['product']['description']['mail']+'" name="q20_mailbox" data-type="input-textbox" class="mail form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_20 sublabel_input_20" required="" />\
            <label class="form-sub-label" for="input_20" id="sublabel_input_20" style="min-height:13px" aria-hidden="false"> Enter Number of mailbox will be provided, enter 0 if none </label>\
          </span>\
        </div>\
      </li>\
      <li class="form-line" data-type="control_button" id="id_2">\
        <div id="cid_2" class="form-input-wide" data-layout="full">\
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">\
            <button id="input_2" type="button" data-id="'+msg['product']['prod_id']+'" class="updateproduct form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">\
              Create Now\
            </button>\
          </div>\
        </div>\
      </li>\
      <li style="display:none">\
        Should be Empty:\
        <input type="text" name="website" value="" />\
            </li>\
          </ul>\
        </div>\
        </form>';
         $('#modal').html(html);
        
    },
    error: function(){
      alert("error");
    }
  });
}
$('#modal').on('click','.updateproduct',function(){
  // $row=$product->extract();
  var id=$(this).data('id');
  var prod_name=$('.prod_name').val();
  var link=$('.link').val();
  var mon_price=$('.mon_price').val();
  var annual_price=$('.annual_price').val();
  var sku=$('.sku').val();
  var webspace=$('.webspace').val();
  var band=$('.band').val();
  var domain=$('.domain').val();
  var lang=$('.lang').val();
  var mail=$('.mail').val();
  // console.log(prod_name);
  // console.log(link);
  // console.log(mon_price);
  // console.log(annual_price);
  // console.log(sku);
  // console.log(webspace);
  // console.log(band);
  // console.log(domain);
  // console.log(lang);
  // console.log(mail);
  //  console.log(id);

  $.ajax({
                url: '../inter.php',
                method:'POST',
                data:{
                    id: id,
                    prod_name: prod_name,
                    link: link,
                    mon_price: mon_price,
                    annual_price: annual_price,
                    sku: sku,
                    webspace: webspace,
                    band: band,
                    domain: domain,
                    lang: lang,
                    mail: mail,
                    updateviewproduct:true    
                },
                dataType:'json',
               success: function(result)
                {
                  if(result=="true")
                  {
                    alert("Updated");
                  }  
                  else{
                    alert("not updated");
                  }
                  location.reload();
                },
                error:function()
                {
                    alert("Invalid Credentials");
                }
            }); 
});



</script>
</body>
</html>
<?php 
}
?>