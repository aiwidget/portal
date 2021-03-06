@extends('...app')

@section('content')

  <div class="content">

    <div class="container">

      <div class="layout layout-main-right layout-stack-sm">

        <div class="col-md-3 col-sm-4 layout-sidebar">

          <div class="nav-layout-sidebar-skip">
            <strong>Tab Navigation</strong> / <a href="#settings-content">Skip to Content</a>
          </div>

          <ul id="myTab" class="nav nav-layout-sidebar nav-stacked">
              <li class="active">
              <a href="#profile-tab" data-toggle="tab">
              <i class="fa fa-user"></i>
              &nbsp;&nbsp;Profile Settings
              </a>
            </li>

            <li>
              <a href="#password-tab" data-toggle="tab">
              <i class="fa fa-lock"></i>
              &nbsp;&nbsp;Change Password
              </a>
            </li>

            <li>
              <a href="#messaging" data-toggle="tab">
              <i class="fa fa-bullhorn"></i>
              &nbsp;&nbsp;Notifications
              </a>
            </li>

            <li>
              <a href="#payments" data-toggle="tab">
              <i class="fa fa-dollar"></i>
              &nbsp;&nbsp;Payment Settings
              </a>
            </li>

            <li>
              <a href="#reports" data-toggle="tab">
              <i class="fa fa-signal"></i>
              &nbsp;&nbsp;Configure Reports
              </a>
            </li>
          </ul>

        </div> <!-- /.col -->



        <div class="col-md-9 col-sm-8 layout-main">

          <div id="settings-content" class="tab-content stacked-content">

            <div class="tab-pane fade in active" id="profile-tab">

            <div class="heading-block">
              <h3>
                Edit Profile
              </h3>
            </div> <!-- /.heading-block -->

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

              <br><br>

              <form action="./page-settings.html" class="form-horizontal">

                <div class="form-group">

                  <label class="col-md-3 control-label">Avatar</label>

                  <div class="col-md-7">

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 125px; min-height: 125px;">
                        <img src="../../global/img/avatars/avatar-3-md.jpg" alt="Avatar">
                      </div>
                      <div>
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                    </div> <!-- /.fileupload -->

                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3 control-label">Username</label>

                  <div class="col-md-7">
                    <input type="text" name="user-name" value="jumpstartui" class="form-control" disabled />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3 control-label">First Name</label>

                  <div class="col-md-7">
                    <input type="text" name="first-name" value="Rod" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3 control-label">Last Name</label>

                  <div class="col-md-7">
                    <input type="text" name="last-name" value="Howard" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3 control-label">Email Address</label>

                  <div class="col-md-7">
                    <input type="text" name="email-address" value="rod@example.com" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3 control-label">Website</label>

                  <div class="col-md-7">
                    <input type="text" name="website" value="http://jumpstartthemes.com" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3 control-label">About You</label>

                  <div class="col-md-7">
                    <textarea id="about-textarea" name="about-you" rows="6" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</textarea>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">
                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Cancel</button>
                  </div> <!-- /.col -->
                </div> <!-- /.form-group -->

              </form>


            </div> <!-- /.tab-pane -->



            <div class="tab-pane fade" id="password-tab">

              <div class="heading-block">
                <h3>
                  Change Password
                </h3>
              </div> <!-- /.heading-block -->

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>

              <br><br>

              <form action="./page-settings.html" class="form-horizontal">

                <div class="form-group">

                  <label class="col-md-3 control-label">Old Password</label>

                  <div class="col-md-7">
                    <input type="password" name="old-password" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <hr>


                <div class="form-group">

                  <label class="col-md-3 control-label">New Password</label>

                  <div class="col-md-7">
                    <input type="password" name="new-password-1" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3 control-label">New Password Confirm</label>

                  <div class="col-md-7">
                    <input type="password" name="new-password-2" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Cancel</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>

            </div> <!-- /.tab-pane -->



            <div class="tab-pane fade" id="messaging">

              <div class="heading-block">
                <h3>
                  Notification Settings
                </h3>
              </div> <!-- /.heading-block -->

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>

              <br><br>

              <form action="./page-settings.html" class="form form-horizontal">

                <div class="form-group">

                  <label class="col-md-3 control-label">Toggle Notifications</label>

                  <div class="col-md-7">

                    <div class="checkbox">
                      <label>
                      <input value="" type="checkbox" checked>
                      Send me security emails
                      </label>
                    </div> <!-- /.checkbox -->

                    <div class="checkbox">
                      <label>
                      <input value="" type="checkbox" checked>
                      Send system emails
                      </label>
                    </div> <!-- /.checkbox -->

                    <div class="checkbox">
                      <label>
                      <input value="" type="checkbox">
                      Lorem ipsum dolor sit amet
                      </label>
                    </div> <!-- /.checkbox -->

                    <div class="checkbox">
                      <label>
                      <input value="" type="checkbox">
                      Laborum, quam iure quibusdam
                      </label>
                    </div> <!-- /.checkbox -->

                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3 control-label">Email for Notifications</label>

                  <div class="col-md-7">
                    <select name="email_notifications" class="form-control">
                      <option value="1">john@mvpready.com</option>
                      <option value="2">mary@mvpready.com</option>
                      <option value="3">chris@mvpready.com</option>
                    </select>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Cancel</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>

            </div> <!-- /.tab-pane -->


            <div class="tab-pane fade" id="payments">

              <div class="heading-block">
                <h3>
                  Payments Settings
                </h3>
              </div> <!-- /.heading-block -->

              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>

            </div> <!-- /.tab-pane -->

            <div class="tab-pane fade" id="reports">

              <div class="heading-block">
                <h3>
                  Reports Settings
                </h3>
              </div> <!-- /.heading-block -->

              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div> <!-- /.tab-pane -->

          </div> <!-- /.tab-content -->

        </div> <!-- /.col -->

      </div> <!-- /.row -->


    </div> <!-- /.container -->

  </div> <!-- .content -->

@endsection
