  @extends('conten_app.layouts.template')
  @section('title', 'dashboard')
  @section('content')

  <!-- MAIN -->
  <div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">

      <div class="content-heading">
        <div class="heading-left">
          <h1 class="page-title">Dashboard</h1>
          <hr>
          <p class="page-subtitle">Growth monitor dashboard with colorful elements.</p>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Parent</a></li>
            <li class="breadcrumb-item active">Current</li>
          </ol>
        </nav>
      </div>

      <div class="container-fluid">
        <h2 class="heading-border">Insights</h2>
        <!-- INSIGHTS -->
        <div class="row row-panel">
          <div class="col-lg-6">
            <ul class="list-unstyled list-insights">
              <li>
                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-users custom-bg-orange"></i>
                  </div>
                  <div class="media-body">
                    <p style="margin-bottom: 40px;">Your users increased 18% last week.</p>
                    <a href=" #">View detail</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-line-chart custom-bg-blue"></i>
                  </div>
                  <div class="media-body">
                    <p style="margin-bottom: 40px;">One of your page has a great traffic increase over 2 weeks.</p>
                    <a href="#">View detail</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-shopping-bag custom-bg-green"></i>
                  </div>
                  <div class="media-body">
                    <p style="margin-bottom: 40px;">45% of sales are coming from 3 products.</p>
                    <a href=" #">View detail</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-clock-o custom-bg-yellow"></i>
                  </div>
                  <div class="media-body">
                    <p style="margin-bottom: 40px;">Average session duration increased 36% last week</p>
                    <a href="#">View detail</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6">
                <div class="widget widget-stat">
                  <div class="media">
                    <div class="media-left media-middle">
                      <i class="fa fa-shopping-bag icon-transparent-area custom-color-purple"></i>
                    </div>
                    <div class="media-body">
                      <span class="title">SALES</span>
                      <span class="value" style="margin-top: 30px;">734</span>
                    </div>
                  </div>
                  <p class="footer text-success"><i class="fa fa-caret-up"></i> 18%
                    <span>Compared to last week</span>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="widget widget-stat">
                  <div class="media">
                    <div class="media-left media-middle">
                      <i class="fa fa-cloud-download icon-transparent-area custom-color-orange"></i>
                    </div>
                    <div class="media-body">
                      <span class="title">DOWNLOADS</span>
                      <span class="value" style="margin-top: 30px;">12,760</span>
                    </div>
                  </div>
                  <p class="footer text-danger"><i class="fa fa-caret-down"></i> 25%
                    <span>Compared to last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="widget widget-stat">
                  <div class="media">
                    <div class="media-left media-middle">
                      <i class="fa fa-reply icon-transparent-area custom-color-lightseagreen"></i>
                    </div>
                    <div class="media-body">
                      <span class="title">REFUNDS</span>
                      <span class="value" style="margin-top: 30px;">12</span>
                    </div>
                  </div>
                  <p class="footer text-success"><i class="fa fa-caret-down"></i> 28%
                    <span>Compared to last week</span>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="widget widget-stat">
                  <div class="media">
                    <div class="media-left media-middle">
                      <i class="fa fa-money icon-transparent-area custom-color-green"></i>
                    </div>
                    <div class="media-body">
                      <span class="title">REVENUE</span>
                      <span class="value" style="margin-top: 30px;">$12,574</span>
                    </div>
                  </div>
                  <p class="footer text-success"><i class="fa fa-caret-up"></i> 5%
                    <span>Compared to last week</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END INSIGHTS -->

        <div class="row row-panel mb-5">
          <div class="col-lg-4">
            <h2 class="heading-border">Traffic Sources</h2>
            <div class="demo-flot-chart" id="traffic-sources-chart"></div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading-border">Referrals</h2>
            <ul class="list-unstyled list-referrals">
              <li>
                <p><span class="value">3,454</span><span class="text-muted">visits from Facebook</span></p>
                <div class="progress progress-transparent custom-color-blue" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
                </div>
              </li>
              <li>
                <p><span class="value">2,102</span><span class="text-muted">visits from Twitter</span></p>
                <div class="progress progress-transparent custom-color-purple" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width:34%"></div>
                </div>
              </li>
              <li>
                <p><span class="value">2,874</span><span class="text-muted">visits from Affiliates</span></p>
                <div class="progress progress-transparent custom-color-green" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%"></div>
                </div>
              </li>
              <li>
                <p><span class="value">2,874</span><span class="text-muted">visits from Search</span></p>
                <div class="progress progress-transparent custom-color-yellow" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width:54%"></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h2 class="heading-border">Browsers</h2>
            <table class="table table-minimal">
              <thead>
                <tr>
                  <th>BROWSERS</th>
                  <th>SESSIONS</th>
                  <th>% SESSIONS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Chrome</td>
                  <td>1,756</td>
                  <td>23%</td>
                </tr>
                <tr>
                  <td>Firefox</td>
                  <td>1,379</td>
                  <td>14%</td>
                </tr>
                <tr>
                  <td>Safari</td>
                  <td>1,100</td>
                  <td>17%</td>
                </tr>
                <tr>
                  <td>Edge</td>
                  <td>982</td>
                  <td>25%</td>
                </tr>
                <tr>
                  <td>Opera</td>
                  <td>967</td>
                  <td>19%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row row-panel mb-5">
          <div class="col-lg-7">
            <h2 class="heading-border">Top Products</h2>
            <div class="table-responsive">
              <table class="table top-products m-0">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Views</th>
                    <th>Downloads</th>
                    <th>Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="assets/images/products/puzzle.png" class="product-logo" alt="Puzzle">
                      <p class="product-name">Puzzle <span class="product-version">v1.2</span></p>
                    </td>
                    <td><i class="fa fa-eye icon"></i> 17,845 views</td>
                    <td><i class="fa fa-cloud-download icon"></i> 3,729 downloads</td>
                    <td>
                      <span class="rating-stars smaller">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="assets/images/products/qrcode.png" class="product-logo" alt="QRCode">
                      <p class="product-name">QRCode <span class="product-version">v1.5</span></p>
                    </td>
                    <td><i class="fa fa-eye icon"></i> 11,983 views</td>
                    <td><i class="fa fa-cloud-download icon"></i> 1,541 downloads</td>
                    <td>
                      <span class="rating-stars smaller">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="assets/images/products/easypolls.png" class="product-logo" alt="Easy Polls">
                      <p class="product-name">Easy Polls <span class="product-version">v1.0</span></p>
                    </td>
                    <td><i class="fa fa-eye icon"></i> 7,647 views</td>
                    <td><i class="fa fa-cloud-download icon"></i> 643 downloads</td>
                    <td>
                      <span class="rating-stars smaller">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="mt-4"><a href="#">View all products</a></p>
          </div>
          <div class="col-lg-5">
            <h2 class="heading-border">Sales Performance</h2>
            <div id="sales-performance-chart" style="width:100%;height:270px;"></div>
            <p class="mt-4"><a href="#">View detailed sales report</a></p>
          </div>
        </div>

        <h2 class="heading-border">Projects</h2>
        <p class="lead">You are involved in 8 projects: <span class="badge badge-success">4 active</span>, <span class="badge badge-warning">2 pending</span> and <span class="badge badge-secondary">2 closed</span></p>
        <div class="table-responsive">
          <table class="table table-minimal project-list">
            <thead>
              <tr>
                <th>TITLE</th>
                <th>DATE START</th>
                <th>DAYS TO DEADLINE</th>
                <th>PROGRESS</th>
                <th>PRIORITY</th>
                <th>LEADER</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Spot Media</a></td>
                <td>18-04-2017</td>
                <td>12 days</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 95%;" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                  </div>
                </td>
                <td><span class="badge badge-warning">MEDIUM</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user2.png" alt="Avatar" class="avatar rounded-circle" /> <span>Michael</span></a></td>
                <td><span class="badge badge-success">ACTIVE</span></td>
              </tr>
              <tr>
                <td><a href="#">E-Commerce Site</a></td>
                <td>24-05-2017</td>
                <td>30 days</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                  </div>
                </td>
                <td><span class="badge badge-success">LOW</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user1.png" alt="Avatar" class="avatar rounded-circle" /> <span>Antonius</span></a></td>
                <td><span class="badge badge-warning">PENDING</span></td>
              </tr>
              <tr>
                <td><a href="#">Project 123GO</a></td>
                <td>20-12-2016</td>
                <td>50 days</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 65%;" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                  </div>
                </td>
                <td><span class="badge badge-danger">HIGH</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user1.png" alt="Avatar" class="avatar rounded-circle" /> <span>Antonius</span></a></td>
                <td><span class="badge badge-success">ACTIVE</span></td>
              </tr>
              <tr>
                <td><a href="#">Wordpress Theme</a></td>
                <td>05-03-2017</td>
                <td>40 days</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 77%;" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">77%</div>
                  </div>
                </td>
                <td><span class="badge badge-warning">MEDIUM</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user2.png" alt="Avatar" class="avatar rounded-circle" /> <span>Michael</span></a></td>
                <td><span class="badge badge-success">ACTIVE</span></td>
              </tr>
              <tr>
                <td><a href="#">Redesign Landing Page</a></td>
                <td>15-02-2017</td>
                <td>30 days</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 25%;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
                </td>
                <td><span class="badge badge-success">LOW</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user5.png" alt="Avatar" class="avatar rounded-circle" /> <span>Jason</span></a></td>
                <td><span class="badge badge-success">ACTIVE</span></td>
              </tr>
              <tr>
                <td><a href="#">Project 123GO</a></td>
                <td>20-09-2017</td>
                <td>N/A</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 100%;" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
                </td>
                <td><span class="badge badge-danger">HIGH</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user1.png" alt="Avatar" class="avatar rounded-circle" /> <span>Antonius</span></a></td>
                <td><span class="badge badge-secondary">CLOSED</span></td>
              </tr>
              <tr>
                <td><a href="#">Wordpress Theme</a></td>
                <td>05-10-2016</td>
                <td>N/A</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 100%;" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
                </td>
                <td><span class="badge badge-warning">MEDIUM</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user2.png" alt="Avatar" class="avatar rounded-circle" /> <span>Michael</span></a></td>
                <td><span class="badge badge-secondary">CLOSED</span></td>
              </tr>
              <tr>
                <td><a href="#">Redesign Landing Page</a></td>
                <td>15-11-2016</td>
                <td>30 days</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar" style="width: 33%;" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">33%</div>
                  </div>
                </td>
                <td><span class="badge badge-success">LOW</span></td>
                <td class="leader"><a href="#"><img src="assets/images/user5.png" alt="Avatar" class="avatar rounded-circle" /> <span>Jason</span></a></td>
                <td><span class="badge badge-warning">PENDING</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- END MAIN CONTENT -->

    <!-- RIGHT SIDEBAR -->
    <div id="sidebar-right" class="right-sidebar">
      <div class="sidebar-widget">
        <h4 class="widget-heading"><i class="fa fa-calendar"></i> TODAY</h4>
        <p class="date">Wednesday, 22 December</p>

        <div class="row mt-4">
          <div class="col-4">
            <a href="#">
              <div class="icon-transparent-area custom-color-blue first">
                <i class="fa fa-tasks"></i> <span>Tasks</span>
                <span class="badge">5</span>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a href="#">
              <div class="icon-transparent-area custom-color-green">
                <i class="fa fa-envelope"></i> <span>Mail</span>
                <span class="badge">12</span>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a href="#">
              <div class="icon-transparent-area custom-color-orange last">
                <i class="fa fa-user-plus"></i> <span>Users</span>
                <span class="badge">24</span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="sidebar-widget">
        <div class="widget-header">
          <h4 class="widget-heading">YOUR APPS</h4>
          <a href="#" class="show-all">Show all</a>
        </div>
        <div class="row">
          <div class="col-3">
            <a href="#" class="icon-app" title="Dropbox" data-toggle="tooltip" data-placement="top">
              <i class="fa fa-dropbox dropbox-color"></i>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="icon-app" title="WordPress" data-toggle="tooltip" data-placement="top">
              <i class="fa fa-wordpress wordpress-color"></i>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="icon-app" title="Drupal" data-toggle="tooltip" data-placement="top">
              <i class="fa fa-drupal drupal-color"></i>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="icon-app" title="Github" data-toggle="tooltip" data-placement="top">
              <i class="fa fa-github github-color"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="sidebar-widget">
        <div class="widget-header">
          <h4 class="widget-heading">MY PROJECTS</h4>
          <a href="#" class="show-all">Show all</a>
        </div>
        <ul class="list-unstyled list-project-progress">
          <li>
            <a href="#" class="project-name">Project XY</a>
            <div class="progress progress-transparent custom-color-orange">
              <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%;"></div>
            </div>
            <span class="percentage">67%</span>
          </li>
          <li>
            <a href="#" class="project-name">Growth Campaign</a>
            <div class="progress progress-transparent custom-color-blue">
              <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
            </div>
            <span class="percentage">23%</span>
          </li>
          <li>
            <a href="#" class="project-name">Website Redesign</a>
            <div class="progress progress-transparent custom-color-green">
              <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
            </div>
            <span class="percentage">87%</span>
          </li>
        </ul>
      </div>

      <div class="sidebar-widget">
        <div class="widget-header">
          <h4 class="widget-heading">MY FILES</h4>
          <a href="#" class="show-all">Show all</a>
        </div>
        <ul class="list-unstyled list-justify list-file-simple">
          <li><a href="#"><i class="fa fa-file-word-o"></i>Proposal_draft.docx</a> <span>4 MB</span></li>
          <li><a href="#"><i class="fa fa-file-pdf-o"></i>Manual_Guide.pdf</a> <span>20 MB</span></li>
          <li><a href="#"><i class="fa fa-file-zip-o"></i>all-project-files.zip</a> <span>315 MB</span></li>
          <li><a href="#"><i class="fa fa-file-excel-o"></i>budget_estimate.xls</a> <span>1 MB</span></li>
        </ul>
      </div>

      <p class="text-center"><a href="#" class="btn btn-primary btn-sm">More Widgets</a></p>
    </div>
    <!-- END RIGHT SIDEBAR -->

  </div>
  <!-- END MAIN -->

  <div class="clearfix"></div>

  <!-- footer -->
  <footer>
    <div class="container-fluid">
      <p class="copyright">&copy; 2020 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
    </div>
  </footer>
  <!-- end footer -->

  </div>
  <!-- END WRAPPER -->

  <!-- Vendor -->
  @endsection