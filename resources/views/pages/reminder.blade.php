@extends('...app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Reminder</div>
				<div class="panel-body">
                     <div class="row">
                         <div class="col-md-6 reminder-container-date">
                              <ul class="list-group">
                                 <li class="list-group-item">
                                    <input  id="reminder-field-contacts" type="text" placeholder="Contacts"  class="form-control " data-toggle="modal" data-target="#largeModal" />
                                    <!-- Trigger the modal with a button -->
                                    {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Contact</button>--}}
                                  </li>

                                   <li class="list-group-item">
                                      <div class="form-group">
                                          <div class='input-group date' id='datetimepicker1'>
                                              <input type='text' class="form-control" placeholder="mm/dd/yyyy hh:mm AM/PM" id="reminder-field-date-time" title="Date time that the reminder will send to the recipient." />
                                              <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div>
                                      </div>
                                      <script type="text/javascript">
                                      $(function () {
                                          $('#datetimepicker1').datetimepicker();
                                      });
                                      </script>
                                  </li>
                                  <li class="list-group-item">
                                       <input class="form-control" id="reminder-field-title" type="text" placeholder="Title" title="Title of the reminder." />
                                  </li>
                                  <li class="list-group-item">
                                      <input class="form-control" id="reminder-field-description" type="text" placeholder="Description" title="Description of the reminder." />
                                  </li>
                                  <li class="list-group-item">
                                      <input class="form-control" id="reminder-field-length" type="text" placeholder="length" title="Length of the activity." />
                                  </li>
                                  <li class="list-group-item">
                                      {{--<input class="form-control" id="reminder-field-repeat" type="text" placeholder="Repeat" />--}}
                                      <select class="select" id="reminder-field-repeat" title="Reminder will repeat" >
                                            <option>No repeat</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                            <option>Yearly</option>
                                      </select>
                                  </li>
                                  <li class="list-group-item">
                                    {{--<input class="form-control" id="reminder-field-send-as" type="text" placeholder="Send as: Email, Facebook, Popup or Text" />--}}
                                      <select class="select" id="reminder-field-send-as" title="Reminder send via email, popup, facebook or text" >
                                            <option>Email</option>
                                            <option>Popup</option>
                                            <option>Facebook</option>
                                            <option>Text</option>
                                      </select>
                                  </li>
                                  <li class="list-group-item">
                                      <button type="submit" class="btn btn-primary" id="reminder-button-save">
                                        <i class="icon-user icon-white"></i> Save Reminder
                                      </button>
                                  </li>
                              </ul>
                         </div>
                         <div class="col-md-6 reminder-container-calendar" >
                            <ul class="list-group" id="reminder-list" >
                            </ul>
                         </div>
                     </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
