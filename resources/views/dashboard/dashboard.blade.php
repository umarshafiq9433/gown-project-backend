@extends('layouts.admin')
@section('dashboard')
    mm-active
@endsection
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <svg
                        version="1.1"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="328.061px"
                        height="328.061px"
                        viewBox="0 0 328.061 328.061"
                        style="enable-background: new 0 0 328.061 328.061"
                        xml:space="preserve"
                    >
                      <g>
                          <g>
                              <path
                                  d="M65.516,306.503c6.84,2.486,22.08,5.604,27.99,4.05c0,0,6.84,7.767,13.373,6.529c6.535-1.248-3.42,3.423-0.932,5.598
			c2.486,2.18,13.059-2.796,19.591,0c6.532,2.802,8.399,3.418,13.686,3.106c5.287-0.311,9.333,2.941,14.621,0.073
			c0,0,2.327,4.018,10.18,1.196c7.858,2.821,10.184-1.196,10.184-1.196c5.281,2.879,9.33-0.378,14.612-0.073
			c5.292,0.312,7.156-0.311,13.69-3.106c6.53-2.796,17.104,2.18,19.589,0c2.491-2.175-7.461-6.84-0.932-5.598
			c6.529,1.248,13.375-6.529,13.375-6.529c5.903,1.554,21.143-1.554,27.987-4.05c6.846-2.495,9.643,0,9.643,0
			c-4.045-4.665-12.443-8.088-12.443-8.088s2.186-3.418-1.554-6.535c-3.729-3.106-24.254,0.938-30.162-26.118
			c-5.908-27.061-13.06-30.168-13.687-54.122c-0.621-23.943-23.943-51.312-16.486-88.944c7.467-37.632-0.311-50.225-4.194-61.575
			c-3.889-11.354-12.128-19.439-5.442-32.345c6.685-12.907-0.782-32.032-6.841-28.301c-6.058,3.733-16.326,10.734-17.333,10.734
			c-1.008,0-11.273-7.001-17.334-10.734c-6.061-3.73-13.528,15.395-6.84,28.301c6.685,12.906-1.554,20.992-5.44,32.345
			c-3.889,11.351-11.666,23.943-4.199,61.575c7.464,37.632-15.86,64.996-16.487,88.944c-0.624,23.954-7.772,27.062-13.683,54.122
			c-5.908,27.056-26.434,23.012-30.167,26.118c-3.731,3.112-1.554,6.535-1.554,6.535s-8.399,3.423-12.438,8.088
			C55.877,306.503,58.676,304.018,65.516,306.503z"
                              />
                          </g>
                      </g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                    </svg>
                </div>
                <div>
                    Dashboard
                    <div class="page-title-subheading">
                        Monthly Progress, Consultants Progress, Sales Reports
                        charts.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">
                            Total Number of Orders (Month)
                        </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <span>1896</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Clients</div>
                        <div class="widget-subheading">
                            Number of clients (Month)
                        </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <span>568</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Consultants</div>
                        <div class="widget-subheading">
                            Number of Consultants (Month)
                        </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <span>6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-premium-dark">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Products Sold</div>
                        <div class="widget-subheading">Revenue streams</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">
                            <span>$14M</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-4">
        <div class="mb-3 col-md-10 mx-auto card card-body">
          <h5 class="card-title">Next Order</h5>
          <p class="card-body">
            <b>Product :</b> Gown<br />
            <b>Customer :</b> Natalia<br />
            <b>Consultant :</b> John<br />
            <b>Status :</b> 1st Session<br />
            <b>Date :</b> 12-DEC-2020<br />
          </p>
          <button class="btn btn-primary">View Details</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3 col-md-10 mx-auto card card-body">
          <h5 class="card-title">Next Order</h5>
          <p class="card-body">
            <b>Product :</b> Gown<br />
            <b>Customer :</b> Natalia<br />
            <b>Consultant :</b> John<br />
            <b>Status :</b> 1st Session<br />
            <b>Date :</b> 12-DEC-2020<br />
          </p>
          <button class="btn btn-primary">View Details</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3 col-md-10 mx-auto card card-body">
          <h5 class="card-title">Next Order</h5>
          <p class="card-body">
            <b>Product :</b> Gown<br />
            <b>Customer :</b> Natalia<br />
            <b>Consultant :</b> John<br />
            <b>Status :</b> 1st Session<br />
            <b>Date :</b> 12-DEC-2020<br />
          </p>
          <button class="btn btn-primary">View Details</button>
        </div>
      </div>
    </div> -->
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
                <div
                    class="card-header-tab card-header-tab-animation card-header"
                >
                    <div class="card-header-title">
                        <i
                            class="header-icon lnr-apartment icon-gradient bg-love-kiss"
                        >
                        </i>
                        Sales Report
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-eg-77">
                            <div
                                class="card mb-3 widget-chart widget-chart2 text-left w-100"
                            >
                                <div class="widget-chat-wrapper-outer">
                                    <div
                                        class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0"
                                    >
                                        <canvas id="canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                            <h6
                                class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal"
                            >
                                Top Consultants
                            </h6>
                            <div class="scroll-area-sm">
                                <div class="scrollbar-container">
                                    <ul
                                        class="rm-list-borders rm-list-borders-scroll list-group list-group-flush"
                                    >
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img
                                                            width="42"
                                                            class="rounded-circle"
                                                            src="assets/images/avatars/9.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">
                                                            Ella-Rose Henry
                                                        </div>
                                                        <div class="widget-subheading">
                                                            Consultant
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>129</span>
                                                            <small class="text-danger pl-2">
                                                                <i class="fa fa-angle-down"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img
                                                            width="42"
                                                            class="rounded-circle"
                                                            src="assets/images/avatars/5.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">
                                                            Ruben Tillman
                                                        </div>
                                                        <div class="widget-subheading">
                                                            Consultant
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>54</span>
                                                            <small class="text-success pl-2">
                                                                <i class="fa fa-angle-up"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img
                                                            width="42"
                                                            class="rounded-circle"
                                                            src="assets/images/avatars/4.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">
                                                            Vinnie Wagstaff
                                                        </div>
                                                        <div class="widget-subheading">
                                                            Senior Consultant
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>429</span>
                                                            <small class="text-warning pl-2">
                                                                <i class="fa fa-dot-circle"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img
                                                            width="42"
                                                            class="rounded-circle"
                                                            src="assets/images/avatars/3.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">
                                                            Ella-Rose Henry
                                                        </div>
                                                        <div class="widget-subheading">
                                                            Consultant
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>129</span>
                                                            <small class="text-danger pl-2">
                                                                <i class="fa fa-angle-down"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img
                                                            width="42"
                                                            class="rounded-circle"
                                                            src="assets/images/avatars/2.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">
                                                            Ruben Tillman
                                                        </div>
                                                        <div class="widget-subheading">
                                                            Senior Consultant
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">$</small>
                                                            <span>54</span>
                                                            <small class="text-success pl-2">
                                                                <i class="fa fa-angle-up"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title">
                        <i
                            class="header-icon lnr-rocket icon-gradient bg-tempting-azure"
                        >
                        </i>
                        Monthly Comparison
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tab-eg-55">
                        <div class="widget-chart p-3">
                            <div style="height: 350px">
                                <canvas id="line-chart"></canvas>
                            </div>
                            <div class="widget-chart-content text-center mt-5">
                                <div class="widget-description mt-0 text-warning">
                                    <i class="fa fa-arrow-left"></i>
                                    <span class="pl-1">175.5%</span>
                                    <span class="text-muted opacity-8 pl-1"
                                    >increased orders</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div
                                                        class="widget-numbers fsize-3 text-muted"
                                                    >
                                                        63%
                                                    </div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="text-muted opacity-6">
                                                        Generated Leads
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-progress-wrapper mt-1">
                                                <div
                                                    class="progress-bar-sm progress-bar-animated-alt progress"
                                                >
                                                    <div
                                                        class="progress-bar bg-danger"
                                                        role="progressbar"
                                                        aria-valuenow="63"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="width: 63%"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Orders (Year)</div>
                            <div class="widget-subheading">
                                Total number of Orders (Year)
                            </div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">1896</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Invoices (Year)</div>
                            <div class="widget-subheading">
                                Total invoices for the year
                            </div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning">$3M</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Inventory</div>
                            <div class="widget-subheading">
                                Total numbers of Inventory
                            </div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">500</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Income</div>
                            <div class="widget-subheading">Expected totals</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-focus">$147</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div
                            class="progress-bar-sm progress-bar-animated-alt progress"
                        >
                            <div
                                class="progress-bar bg-info"
                                role="progressbar"
                                aria-valuenow="54"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width: 54%"
                            ></div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">Expenses</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Upcoming Orders (Next 7 days)</div>
                <div class="table-responsive">
                    <table
                        id="example"
                        class="table dt-responsive nowrap"
                        style="width: 100%"
                    >
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Consultant</th>
                            <th>Venue</th>
                            <th>Total bill paid amount</th>
                            <th>Total bill Outstanding amount</th>
                            <th>Total Bill</th>
                            <th>Event Date</th>
                            <th>Status Date</th>
                            <th>Status</th>
                            <th>Security Deposit</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>XE321</td>
                            <td>Kenn</td>
                            <td>Natalia</td>
                            <td>MM ALAM</td>
                            <td>$750</td>
                            <td>$1000</td>
                            <td>$1750</td>
                            <td>10-Oct-2020</td>
                            <td>05-Oct-2020</td>
                            <td><span class="btn btn-success">2nd Fitting</span></td>
                            <td><span class="btn btn-warning">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button
                                        type="button"
                                        class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown"
                                    >
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="./order_summary.html">Summary</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>XE331</td>
                            <td>Wixx</td>
                            <td>Camron</td>
                            <td>OTUS</td>
                            <td>$750</td>
                            <td>$1000</td>
                            <td>$1750</td>
                            <td>11-Oct-2020</td>
                            <td>05-Oct-2020</td>
                            <td><span class="btn btn-success">2nd Fitting</span></td>
                            <td><span class="btn btn-success">Refunded</span></td>
                            <td>
                                <div class="dropdown">
                                    <button
                                        type="button"
                                        class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown"
                                    >
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="./order_summary.html">Summary</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>XE334</td>
                            <td>Jenny</td>
                            <td>Jhon</td>
                            <td>OTUS</td>
                            <td>$750</td>
                            <td>$1000</td>
                            <td>$1750</td>
                            <td>13-Oct-2020</td>
                            <td>05-Oct-2020</td>
                            <td><span class="btn btn-danger">1st Fitting</span></td>
                            <td><span class="btn btn-warning">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button
                                        type="button"
                                        class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown"
                                    >
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="./order_summary.html">Summary</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Invoices</div>
                <div class="table-responsive">
                    <table
                        id="example"
                        class="table display nowrap"
                        style="width: 100%"
                    >
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Invoice ID</th>

                            <th>Customer Name</th>
                            <th>Consultant</th>
                            <th>Venue</th>
                            <th>Total bill paid amount</th>
                            <th>Total bill Outstanding amount</th>
                            <th>Total Bill</th>
                            <th>Event Date</th>
                            <th>Security Deposit</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>XE321</td>
                            <td>Anderson</td>
                            <td>Tony</td>
                            <td>DC</td>
                            <td>$750</td>
                            <td>$750</td>
                            <td>$1500</td>
                            <td>07-Oct-2020</td>
                            <td><span class="btn btn-success">Refunded</span></td>
                            <td>
                                <div class="dropdown">
                                    <button
                                        type="button"
                                        class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown"
                                    >
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Summary</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-danger text-white">
                            <td>2</td>
                            <td>XE331</td>
                            <td>Alex</td>
                            <td>Maxwell</td>
                            <td>Street 24</td>
                            <td>$1750</td>
                            <td>$750</td>
                            <td>$2500</td>
                            <td>09-Oct-2020</td>
                            <td><span class="btn btn-warning">Pending</span></td>
                            <td>
                                <div class="dropdown">
                                    <button
                                        type="button"
                                        class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown"
                                    >
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Summary</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div
@endsection
