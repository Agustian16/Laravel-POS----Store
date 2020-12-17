<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manager</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/src/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/src/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/src/assets/vendors/css/vendor.bundle.addons.css">
    {{-- Font Title --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


    <a href="https://icons8.com/icon/53835/deposit"></a>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/src/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="/src/assets/images/favicon.ico"/>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center logo-field">
          <a class="navbar-brand brand-logo" href="{{route('manager.index') }}">
            {{-- <img src="/src/assets/images/logo.svg" alt="logo" /> </a> --}}
            
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="/src/assets/images/logo-mini.svg" alt="logo" /> </a>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
                <style>
                        .form-control {
                            position: relative;
                            right: 285px;
                        }

                </style>
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="/src/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="/src/assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="/src/assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="/src/assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="/src/assets/images/faces/face8.jpg" alt="Profile image">
                  @foreach ($transaksis as $transaksi)
                  <p class="mb-1 mt-3 font-weight-semibold">{{ $transaksi->kd_user }}</p>   
                  @endforeach
                  <p class="font-weight-light text-muted mb-0">email@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item" href="{{ route('logout') }}">Sign out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <h1 class="tittle-product">CASHY APP</h1>
          <img src="assets/img/cashier-machine.svg" class="logo"/>
          <ul class="nav">
            <li class="nav-item nav-profile">
            </li>
            <br>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link fa-cubes" href="{{ route('manager.index') }}">
                
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('manager.product') }}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <label class="sr-only" for="inlineFormInputName2">Date</label>
                    <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                  </div>
                  {{-- Print Date --}}
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <label for="label">Tanggal Awal</label>
                      <input type="date" name="tgl_awal" id="tgl_awal" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                      <label for="label">Tanggal Akhir</label>
                      <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                      <a href="#" target="blank" class="btn btn-primary col-md-12">Print Report Date</a>
                    </div>
                  </div>

                  {{-- End OF Print Date --}}



                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">32,451</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Visits</h5>
                            <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">15,236</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Impressions</h5>
                            <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Sales Statistics Overview</h4>
                    <div class="d-flex flex-column flex-lg-row">
                      <p>Lorem ipsum is placeholder text commonly used</p>
                      <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1D</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5D</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1M</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1Y</a>
                        </li>
                      </ul>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                      <div class="data-wrapper d-flex mt-2 mt-lg-0">
                        <div class="wrapper pr-5">
                          <h5 class="mb-0">Total Cost</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">15,263</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small>
                          </div>
                        </div>
                        <div class="wrapper">
                          <h5 class="mb-0">Total Revenue</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">$753,098</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small>
                          </div>
                        </div>
                      </div>
                      <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <div class="wrapper">
                      <h4 class="card-title mb-0">Net Profit Margin</h4>
                      <p>Started collecting data from February 2019</p>
                      <div class="mb-4" id="net-profit-legend"></div>
                    </div>
                    <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Total Revenue</h4>
                          <p class="font-weight-semibold mb-0">+1.37%</p>
                        </div>
                        <h3 class="font-weight-medium mb-4">184.42K</h3>
                      </div>
                      <canvas class="mt-n4" height="90" id="total-revenue"></canva>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Transaction</h4>
                          <p class="font-weight-semibold mb-0">-2.87%</p>
                        </div>
                        <h3 class="font-weight-medium">147.7K</h3>
                      </div>
                      <canvas class="mt-n3" height="90" id="total-transaction"></canva>
                    </div>
                  </div>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title mb-0">Market Overview</h4>
                        <div class="d-flex align-items-center justify-content-between w-100">
                          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                          <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateSorter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Month</button>
                            <div class="dropdown-menu" aria-labelledby="dateSorter">
                              <div class="dropdown-item" id="market-overview_1">Daily</div>
                              <div class="dropdown-item" id="market-overview_2">Weekly</div>
                              <div class="dropdown-item" id="market-overview_3">Monthly</div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-end">
                          <h3 class="mb-0 font-weight-semibold">$36,2531.00</h3>
                          <p class="mb-0 font-weight-medium mr-2 ml-2 mb-1">USD</p>
                          <p class="mb-0 text-success font-weight-semibold mb-1">(+1.37%)</p>
                        </div>
                        <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Data Transaction</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        <div class="table-responsive">

                            <div class="container">
                                <table class="table table-bordered table-responsive-lg table-hover" style="margin-top:5px;">
                                    <tr class="bg-info">
                                        <th>No.</th>
                                        {{-- <th>ID</th> --}}
                                        <th>Product</th>
                                        <th>User</th>
                                        <th>Purchase Ammount</th>
                                        <th>Total Price</th>
                                        <th>Date of Purchase</th>
                                    </tr>
                                    @foreach ($transaksis as $transaksi)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        {{-- <td>{{ $transaksi->kd_transaksi }}</td> --}}
                                        <td>{{ $transaksi->kd_barang }}</td>
                                        <td>{{ $transaksi->kd_user }}</td>
                                        <td>{{ $transaksi->jumlah_beli }}</td>
                                        <td>{{ $transaksi->total_harga }}</td>
                                        <td>{{ $transaksi->tanggal_beli }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            {!! $transaksis->links() !!}
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-danger mr-2"></div>
                              <p class="mb-0">Total Sales</p>
                            </div>
                            <h4 class="font-weight-semibold">$7,590</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                          </div>
                          <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-success mr-2"></div>
                              <p class="mb-0">Active Users</p>
                            </div>
                            <h4 class="font-weight-semibold">$5,460</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card average-price-card">
                    <div class="card text-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between pb-2 align-items-center">
                          <h2 class="font-weight-semibold mb-0">4,624</h2>
                          <div class="icon-holder">
                            <i class="mdi mdi-briefcase-outline"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <h5 class="font-weight-semibold mb-0">Average Price</h5>
                          <p class="text-white mb-0">Since last month</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h1 class="card-title mb-4">Website Audience Metrics</h1>
                        <div class="row">
                          <div class="col-5 col-md-5">
                            <div class="wrapper border-bottom mb-2 pb-2">
                              <h4 class="font-weight-semibold mb-0">523,200</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Page Views</p>
                                <div class="dot-indicator bg-secondary ml-auto"></div>
                              </div>
                            </div>
                            <div class="wrapper">
                              <h4 class="font-weight-semibold mb-0">753,098</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Bounce Rate</p>
                                <div class="dot-indicator bg-primary ml-auto"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-5 col-md-7 d-flex pl-4">
                            <div class="ml-auto">
                              <canvas height="100" id="realtime-statistics"></canvas>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-5">
                          <div class="col-6">
                            <div class="d-flex align-items-center mb-2">
                              <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                                <i class="icon ion-logo-buffer icon-sm"></i>
                              </div>
                              <h2 class="font-weight-semibold mb-0">3,605</h2>
                            </div>
                            <p>Since last week</p>
                            <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                          </div>
                          <div class="col-6">
                            <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Cashy App Dev@</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/src/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/src/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/src/assets/js/shared/off-canvas.js"></script>
    <script src="/src/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/src/assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="/src/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>