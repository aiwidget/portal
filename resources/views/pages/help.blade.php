@extends('...app')

@section('content')
  <div class="content">

    <div class="container">

        <div class="layout layout-stack-sm layout-main-left">

          <div class="col-sm-4 col-sm-push-8 layout-sidebar">

            <div class="well text-center">
              <p><i class="fa fa-question-circle fa-5x text-muted"></i></p>
              <h4>Have a Question?</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              <a href="javascript:;" class="btn btn-secondary">Get it Answered!</a>
            </div> <!-- /.well -->

            <br>

            <div class="portlet">

              <h4>Categories</h4>

              <div class="list-group">

                <a href="javascript:;" class="list-group-item">
                  Account Settings
                  <i class="fa fa-chevron-right list-group-chevron"></i>
                  <span class="badge">6</span>
                </a>

                <a href="javascript:;" class="list-group-item">
                  API Questions
                  <i class="fa fa-chevron-right list-group-chevron"></i>
                  <span class="badge">5</span>
                </a>

                <a href="javascript:;" class="list-group-item">
                  Billing
                  <i class="fa fa-chevron-right list-group-chevron"></i>
                  <span class="badge">12</span>
                </a>

                <a href="javascript:;" class="list-group-item">
                  Copyright &amp; Legal
                  <i class="fa fa-chevron-right list-group-chevron"></i>
                  <span class="badge">4</span>
                </a>
            </div> <!-- /.list-group -->

          </div> <!-- /.portlet -->

        </div> <!-- /.layout-sidebar -->



        <div id="faq-questions" class="col-sm-8 col-sm-pull-4 layout-main">

          <h2 class="">Frequently Asked Questions</h2>

          <br><br>

          <div class="heading-block">
            <h4>
              General Questions
            </h4>
          </div> <!-- /.heading-block -->

          <div id="accordion-help" class="panel-group accordion-simple">

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-help" href="#faq-general-1"><i class="fa faq-accordion-caret"></i>Mauris cursus massa quis lorem lacinia, eget dictum sapien pellentesque? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-general-1" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-help" href="#faq-general-2"><i class="fa faq-accordion-caret"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-general-2" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-help" href="#faq-general-3"><i class="fa faq-accordion-caret"></i>Sed vel dui rutrum, dignissim tortor? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-general-3" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-help" href="#faq-general-4"><i class="fa faq-accordion-caret"></i>Pellentesque quis lacus vestibulum, pulvinar massa sit amet, vulputate mauris? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-general-4" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

          </div> <!-- /.accordion -->

          <br><br>

          <div class="heading-block">
            <h4>
              Pre-Sale Questions
            </h4>
          </div> <!-- /.heading-block -->

          <div id="accordion-customization" class="panel-group accordion-simple">

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-customization" href="#faq-presale-1"><i class="fa faq-accordion-caret"></i>Etiam sit amet metus nec magna aliquam venenatis? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-presale-1" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-customization" href="#faq-presale-2"><i class="fa faq-accordion-caret"></i>Integer aliquam quam at felis consequat volutpat? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-presale-2" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-customization" href="#faq-presale-3"><i class="fa faq-accordion-caret"></i>In vel lacus eget neque ultricies posuere? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-presale-3" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-customization" href="#faq-presale-4"><i class="fa faq-accordion-caret"></i>Aliquam consequat ante at viverra pellentesque? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-presale-4" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-customization" href="#faq-presale-5"><i class="fa faq-accordion-caret"></i>Morbi rhoncus odio ut ipsum cursus venenatis? </a>
                </h4>
              </div><!-- .panel-heading -->

              <div id="faq-presale-5" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Nam vulputate diam risus, quis auctor augue varius et. Donec laoreet erat fringilla lorem tempus fringilla. Quisque posuere risus enim, eget aliquam metus auctor congue. Ut condimentum odio sed odio congue ornare. Fusce et elit volutpat dolor porttitor vulputate. Sed vitae sollicitudin metus. Nunc ut sem in magna pellentesque commodo. Sed tristique metus condimentum quam molestie tristique.</p>
                </div><!-- .panel-body -->
              </div> <!-- ./panel-collapse -->
            </div><!-- .panel -->

          </div> <!-- /.accordion -->

        </div> <!-- /.col -->

      </div> <!-- /.row -->

    </div> <!-- /.container -->

  </div> <!-- .content -->

@endsection
