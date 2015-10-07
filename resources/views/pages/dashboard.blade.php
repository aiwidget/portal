@extends('...app')

@section('content')
  <div class="content">

    <div class="container">

      <div class="portlet portlet-default">

        <div class="portlet-header">
          <h4 class="portlet-title">
            Monthly Stats
          </h4>
        </div> <!-- /.portlet-header -->

        <div class="portlet-body">

          <div class="row">

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Revenue Today</p>
                <h3 class="row-stat-value">$890.00</h3>
                <span class="label label-success row-stat-badge">+43%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Revenue This Month</p>
                <h3 class="row-stat-value">$8290.00</h3>
                <span class="label label-success row-stat-badge">+17%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Total Users</p>
                <h3 class="row-stat-value">98,290</h3>
                <span class="label label-success row-stat-badge">+26%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Currently Active Uses</p>
                <h3 class="row-stat-value">19</h3>
                <span class="label label-danger row-stat-badge">+5%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

          </div> <!-- /.row -->

        </div> <!-- /.portlet-body -->

      </div> <!-- /.portlet -->





          <div class="row">

            <div class="col-md-8">

              <div class="portlet portlet-default">

                <div class="portlet-header">
                  <h4 class="portlet-title">
                    Revenue Per Month
                  </h4>
                </div> <!-- /.portlet-header -->

                <div class="portlet-body">

                  <div class="chart-bg bg-secondary">
                    <div id="reports-line-chart" class="chart-holder-250"></div>
                  </div> <!-- /.bg-chart -->

                  <br>

              </div> <!-- /.portlet-body -->

            </div> <!-- /.portlet -->

            </div> <!-- /.col -->

            <div class="col-md-4">

              <div class="portlet portlet-default">

                <div class="portlet-header">
                  <h4 class="portlet-title">
                    Product Sales Breakdown
                  </h4>
                </div> <!-- /.portlet-header -->

                <div class="portlet-body">

                  <div id="donut-chart" class="chart-holder" style="width: 70%;"></div>

                </div> <!-- /.portlet-body -->

              </div> <!-- /.portlet -->

            </div> <!-- /.col -->

          </div> <!-- /.row -->


      <div class="row">

        <div class="col-md-6">

          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h4 class="portlet-title">
                Product Sales Today
              </h4>
            </div> <!-- /.portlet-header -->

            <div class="portlet-body">

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th class="text-right">Purchases</th>
                    <th class="text-right">Revenue</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>CSS Hat</td>
                    <td class="text-right">264</td>
                    <td class="text-right">$3,129.98</td>
                  </tr>

                  <tr>
                    <td>Subtle Patterns</td>
                    <td class="text-right">20</td>
                    <td class="text-right">$129.98</td>
                  </tr>

                  <tr>
                    <td>PNG Hat</td>
                    <td class="text-right">45</td>
                    <td class="text-right">$9,129.98</td>
                  </tr>

                  <tr>
                    <td>Academy</td>
                    <td class="text-right">560</td>
                    <td class="text-right">$12,249.98</td>
                  </tr>

                  <tr>
                    <td>Social Kit</td>
                    <td class="text-right">120</td>
                    <td class="text-right">$0.00</td>
                  </tr>

                  <tr>
                    <td>Pizaa</td>
                    <td class="text-right">340</td>
                    <td class="text-right">$0.00</td>
                  </tr>
                </tbody>
              </table>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->



        <div class="col-md-6">

          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h4 class="portlet-title">
                Product Sales Breakdown
              </h4>
            </div> <!-- /.portlet-header -->

            <div class="portlet-body">

              <div id="stacked-horizontal-chart" class="chart-holder-250"></div>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->



      <div class="portlet portlet-default">

        <div class="portlet-header">
          <h4 class="portlet-title">
            Social Media Stats
          </h4>
        </div> <!-- /.portlet-header -->

        <div class="portlet-body">

          <div class="row">

            <div class="col-sm-3">
              <div class="row-stat">
                <p class="row-stat-label">Facebook Likes</p>
                <h3 class="row-stat-value">1,290</h3>
                <span class="label label-success row-stat-badge">+21</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-3">
              <div class="row-stat">
                <p class="row-stat-label">Twitter Followers</p>
                <h3 class="row-stat-value">3,290</h3>
                <span class="label label-success row-stat-badge">+10</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-3">
              <div class="row-stat">
                <p class="row-stat-label">Github Followers</p>
                <h3 class="row-stat-value">21,361</h3>
                <span class="label label-danger row-stat-badge">-5</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-3">
              <div class="row-stat">
                <p class="row-stat-label">Email Subscribers</p>
                <h3 class="row-stat-value">2,689</h3>
                <span class="label label-warning row-stat-badge">+ 0</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

          </div> <!-- /.row -->

        </div> <!-- /.portlet-body -->

      </div> <!-- /.portlet -->



      <div class="row">

        <div class="col-md-6">

          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h4 class="portlet-title">
                Server Load
              </h4>
            </div> <!-- /.portlet-header -->

            <div class="porlet-body">

              <div id="auto-chart" class="chart-holder-250"></div>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


        <div class="col-md-6">

          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h4 class="portlet-title">
                Daily Traffic
              </h4>
            </div> <!-- /.portlet-header -->

            <div class="porlet-body">

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Source</th>
                    <th class="text-right">Visits</th>
                    <th class="text-right">Conversion</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>socialkit</td>
                    <td class="text-right">25,843</td>
                    <td class="text-right">8.9%</td>
                  </tr>
                  <tr>
                    <td>subtlepatterns</td>
                    <td class="text-right">5,141</td>
                    <td class="text-right">2.4%</td>
                  </tr>
                  <tr>
                    <td>google</td>
                    <td class="text-right">2,562</td>
                    <td class="text-right">1.2%</td>
                  </tr>
                  <tr>
                    <td>facebook</td>
                    <td class="text-right">345</td>
                    <td class="text-right">0.02%</td>
                  </tr>
                  <tr>
                    <td>Social Kit</td>
                    <td class="text-right">12</td>
                    <td class="text-right">0.0%</td>
                  </tr>
                  <tr>
                    <td>webappers</td>
                    <td class="text-right">9</td>
                    <td class="text-right">0.0%</td>
                  </tr>


                </tbody>
              </table>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->

      </div> <!-- /.row -->



    </div> <!-- /.container -->

  </div> <!-- .content -->

@endsection
