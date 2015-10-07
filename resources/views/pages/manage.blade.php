@extends('...app')

@section('content')
  <div class="content">

    <div class="container">

      <div class="layout layout-stack-sm layout-main-left">
        <div class="col-sm-5 col-md-4 layout-sidebar">

          <div class="portlet">
            <a href="javascript:;" class="btn btn-primary btn-jumbo btn-block ">Add Ads</a>
          </div> <!-- /.portlet -->


          <h4>Recent Activity</h4>

          <div class="well">

            <ul class="icons-list text-md">
              <li>
                <i class="icon-li fa fa-comments-o text-success"></i>
                <strong class="semibold">New Sale!</strong>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </li>
              <li>
                <i class="icon-li fa fa-check-square text-secondary"></i>
                <strong class="semibold">New Action!</strong>
                <br>
                Vestibulum iaculis felis eu eros pellentesque placerat.
              </li>
              <li>
                <i class="icon-li fa fa-truck text-tertiary"></i>
                <strong class="semibold">New Product!</strong>
                <br>
                Curabitur cursus nisl et mauris imperdiet porttitor.
              </li>
              <li>
                <i class="icon-li fa fa-comments-o text-primary"></i>
                <strong class="semibold">New Comment!</strong>
                <br>
                Vestibulum iaculis felis eu eros pellentesque placerat.
              </li>
              <li>
                <i class="icon-li fa fa-comments-o text-primary"></i>
                <strong class="semibold">New Comment!</strong>
                <br>
                Curabitur cursus nisl et mauris imperdiet porttitor.
              </li>
            </ul>
          </div> <!-- /.well -->

        </div> <!-- /.layout-sidebar -->

        <div class="col-sm-7 col-md-8 layout-main">

          <div class="portlet portlet-default">
            <div class="portlet-header">
              <h4 class="portlet-title">
                Manage Ad
              </h4>
            </div> <!-- /.portlet-header -->

            <div class="portlet-body">
              <table class="table table-striped table-bordered table-hover ui-datatable"
              data-global-search="true"
              data-length-change="false"
              data-info="false"
              data-paging="false"
              data-page-length="10">
                <thead>
                  <tr>
                    <th data-sortable="true">Application Name</th>
                    <th data-sortable="true">Edit</th>
                    <th data-sortable="true">Delete</th>
                    <th data-sortable="true" class="hidden-xs hidden-sm">Settings</th>
                    <th data-sortable="true" class="hidden-xs hidden-sm">Status</th>
                  </tr>
                </thead>
                <tbody>

                     @for ($i = 0; $i < 6; $i++)
                          <tr >
                            <td>Web application A {{$i}}</td>
                            <td>
                                <a href="../icon/pencil-square-o"><i class="fa fa-edit"></i> Edit</a>
                            </td>
                            <td>
                                <a href="../icon/trash-o"><i class="fa fa-trash-o"></i> Trash</a>
                            </td>
                            <td class="hidden-xs hidden-sm">
                                <a href="../icon/wrench"><i class="fa fa-wrench"></i> Settings</a>
                            </td>
                            <td class="hidden-xs hidden-sm">
                                <a href="../icon/users"><i class="fa fa-users"></i> Status</a>
                            </td>
                          </tr>
                          <tr >
                            <td>Web application B {{$i}}</td>
                            <td>
                                <a href="../icon/pencil-square-o"><i class="fa fa-edit"></i> Edit</a>
                            </td>
                            <td>
                                <a href="../icon/trash-o"><i class="fa fa-trash-o"></i> Trash</a>
                            </td>
                            <td class="hidden-xs hidden-sm">
                                <a href="../icon/wrench"><i class="fa fa-wrench"></i> Settings</a>
                            </td>
                            <td class="hidden-xs hidden-sm">
                                <a href="../icon/users"><i class="fa fa-users"></i> Status</a>
                            </td>
                          </tr>
                   @endfor


                </tbody>
              </table>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.layout-main -->


      </div> <!-- /.layout -->

    </div> <!-- /.container -->

  </div> <!-- .content -->

@endsection
