<link rel="stylesheet" href="assets/vendor/fullcalendar/fullcalendar.min.css">
<style type="text/css">
 
.fc-unthemed .fc-content, .fc-unthemed .fc-divider, .fc-unthemed .fc-list-heading td, .fc-unthemed .fc-list-view, .fc-unthemed .fc-popover, .fc-unthemed .fc-row, .fc-unthemed tbody, .fc-unthemed td, .fc-unthemed th, .fc-unthemed thead {
    border-color: #ddd;
    text-align: center !important;
}
</style>
  <?php $current_year = date("Y");  $current_month = date("m");
     $fatchattendence = mysqli_query($con,"SELECT * FROM emp_attendanceinfo WHERE `emp_priid` = '".$_SESSION['id']."' ");
    //  $fatchattendence = mysqli_query($con,"SELECT * FROM emp_attendanceinfo WHERE MONTH(currentt_date) = '$current_month' AND YEAR(currentt_date) = '$current_year' AND `emp_priid` = '".$_SESSION['id']."' ");
     $empholiday = mysqli_query($con,"SELECT * FROM emp_satsun_holiday ");
    //  $empleave = mysqli_query($con,"SELECT * FROM emp_apply_leave WHERE MONTH(add_updatedate) = '$current_month' AND YEAR(add_updatedate) = '$current_year' AND `emp_priid` = '".$_SESSION['id']."' ");
     $empleave = mysqli_query($con,"SELECT * FROM emp_apply_leave WHERE  `emp_priid` = '".$_SESSION['id']."' ");



      $attendance=[];
            $cr=0;
                while($attend=mysqli_fetch_assoc($fatchattendence)){
                    if($attend['totel_time'] == ''){
                            $attendance[$cr]['title'] = 'Current Day';
                        }else{
                            if($attend['emp_status'] == '3'){
                                $attendance[$cr]['title'] = 'Leave';
                            }else if($attend['emp_status'] == '2'){
                                // $attendance[$cr]['title'] = ;
                                $attendance[$cr]['title'] = 'Half Day '.str_replace(array('hours','minutes'),array(':','Min'),$attend['totel_time']) ;
                            }else{
                                $attendance[$cr]['title'] = $attend['totel_time'];
                            }
                        }

                        $attendance[$cr]['start'] = date('Y-m-d',strtotime($attend['currentt_date']));

                        if($attend['totel_time'] == 'Saturday' || $attend['totel_time'] == 'Sunday'  ){
                            $attendance[$cr]['className'] = 'bg-secondary';
                        }else if ($attend['emp_status'] == '3' || $attend['emp_status'] == '2'){
                            $attendance[$cr]['className'] = 'bg-danger';
                        }else{
                            $attendance[$cr]['className'] = 'bg-success';
                        }

                    $cr++;
                }

                $holiday=[];
            $hl=0;
                while($holid=mysqli_fetch_assoc($empholiday)){
                    $holiday[$hl]['title'] = $holid['holidayname'];
                    $holiday[$hl]['start'] = date('Y-m-d',strtotime($holid['holidaydate']));

                    if($holid['holidayname'] == 'Saturday' || $holid['holidayname'] == 'Sunday'){
                        $holiday[$hl]['className'] = 'bg-secondary';
                    }else{
                        $holiday[$hl]['className'] = 'bg-success';
                    }
                    $hl++;
                }

                 $empleaveee=[];
            $l=0;
                while($empl=mysqli_fetch_assoc($empleave)){
                    if($empl['leave_status'] == '1'){
                        $empleaveee[$l]['title'] = $empl['leave_type'];
                        $empleaveee[$l]['start'] = date('Y-m-d',strtotime($empl['leave_from']));
                        $empleaveee[$l]['end'] = date('Y-m-d',strtotime($empl['leave_to'].' + 1 day'));
                        $empleaveee[$l]['className'] = 'bg-danger';
                    }

                    $l++;
                }

            // title: 'Long Event',
            // start: '2018-07-07',
            // end: '2018-07-10',
            // className: 'bg-danger'

                $attend =  json_encode(array_merge($attendance,$holiday,$empleaveee));
             ?>
 <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Events</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Events</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Visitors</small>
                                <h6 class="mb-0 mt-1"><i class="icon-user"></i> 1,784</h6>
                            </div>
                            <span class="bh_visitors float-right">2,5,1,8,3,6,7,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Visits</small>
                                <h6 class="mb-0 mt-1"><i class="icon-globe"></i> 325</h6>
                            </div>
                            <span class="bh_visits float-right">10,8,9,3,5,8,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Chats</small>
                                <h6 class="mb-0 mt-1"><i class="icon-bubbles"></i> 13</h6>
                            </div>
                            <span class="bh_chats float-right">1,8,5,6,2,4,3,2</span>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="body">
                            <!-- <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addevent">Add New Event</button> -->
                            <h5 class="text-center text-primary">Upcoming Holidays</span></h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="event-name row">
                                <div class="col-4 text-center">
                                    <h4>11<span>Dec</span><span>2018</span></h4>
                                </div>
                                <div class="col-8">
                                    <h6>Conference</h6>
                                    <p>Mobile World Congress 2018</p>
                                    <address><i class="fa fa-map-marker"></i> 4 Goldfield Rd. Honolulu, HI 96815</address>
                                </div>
                            </div>                            
                            <div class="event-name row">
                                <div class="col-4 text-center">
                                    <h4>13<span>Dec</span><span>2018</span></h4>
                                </div>
                                <div class="col-8">
                                    <h6>Birthday</h6>
                                    <p>Today, guests are getting in on the action</p>
                                    <address><i class="fa fa-map-marker"></i> 4 Goldfield Rd. Honolulu, HI 96815</address>
                                </div>
                            </div>
                            <hr>
                            <div class="event-name row">
                                <div class="col-4 text-center">
                                    <h4>09<span>Dec</span><span>2018</span></h4>
                                </div>
                                <div class="col-8">
                                    <h6>Repeating Event</h6>
                                    <p>Before there were tech conferences, there was Disrupt.</p>
                                    <address><i class="fa fa-map-marker"></i> 44 Shirley Ave. West Chicago, IL 60185</address>
                                </div>
                            </div>
                            <hr>
                            <div class="event-name row">
                                <div class="col-4 text-center">
                                    <h4>16<span>Dec</span><span>2018</span></h4>
                                </div>
                                <div class="col-8">
                                    <h6>Repeating Event</h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                    <address><i class="fa fa-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
                                </div>
                            </div>
                            <div class="event-name row">
                                <div class="col-4 text-center">
                                    <h4>28<span>Dec</span><span>2018</span></h4>
                                </div>
                                <div class="col-8">
                                    <h6>Google</h6>
                                    <p>Google Hardware and Pixel 2 Launch</p>
                                    <address><i class="fa fa-map-marker"></i> 514 S. Magnolia St. Orlando, FL 32806</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 
<script src="assets/vendor/fullcalendar/fullcalendar.js"></script><!--/ calender javascripts --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<!-- <script src="assets/js/pages/calendar.js"></script> -->
<script type="text/javascript">
    var  today = new Date();
    var datetime = today.getFullYear()+'-'+(today.getMonth()+1);
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var event = <?php echo $attend;?>;

    console.log(event);

  $('#calendar').fullCalendar({
        // fathcattend();
    // header: {left: 'prev,next today',center: 'title',right: 'month,agendaWeek,agendaDay,listWeek'},
    defaultDate: date,
    editable: false,
    droppable: false, // this allows things to be dropped onto the calendar
    drop: function() {
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
        }
    },

    eventLimit: true, // allow "more" link when too many events
    events: event
});

</script>