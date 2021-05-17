<style type="text/css">
    .clock {
  border-radius: 50%;
  background: #fff url(assets/ios_clock.svg) no-repeat center;
  background-size: 88%;
  height: 20em;
  padding-bottom: 31%;
  position: relative;
  width: 20em;
}

.clock.simple:after {
  background: #000;
  border-radius: 50%;
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 5%;
  height: 5%;
  z-index: 10;
}
.minutes-container, .hours-container, .seconds-container {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.hours {
  background: #000;
  height: 20%;
  left: 48.75%;
  position: absolute;
  top: 30%;
  transform-origin: 50% 100%;
  width: 2.5%;
}
.minutes {
  background: #000;
  height: 40%;
  left: 49%;
  position: absolute;
  top: 10%;
  transform-origin: 50% 100%;
  width: 2%;
}
.seconds {
  background: #000;
  height: 45%;
  left: 49.5%;
  position: absolute;
  top: 14%;
  transform-origin: 50% 80%;
  width: 1%;
  z-index: 8;
}
@keyframes rotate {
  100% {
    transform: rotateZ(360deg);
  }
}
.hours-container {
  animation: rotate 43200s infinite linear;
}
.minutes-container {
  animation: rotate 3600s infinite linear;
}
.seconds-container {
  animation: rotate 60s infinite linear;
}
.minutes-container {
  animation: rotate 3600s infinite steps(60);
}
.seconds-container {
  animation: rotate 60s infinite steps(60);
}

.attend{
    font-size: 16px;
    font-weight: 600;
    text-align: center;
}
}

</style>

    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Dashboard</li>
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
               
                <div class="col-lg-3 col-md-6">
                    <!-- <div class="card text-center"> -->
                        <div class="body">
                            <article class="clock">
                          <div class="hours-container">
                            <div class="hours"></div>
                          </div>
                          <div class="minutes-container">
                            <div class="minutes"></div>
                          </div>
                          <div class="seconds-container">
                            <div class="seconds"></div>
                          </div>
                        </article>
                        </div>
                    <!-- </div>                     -->
                </div>
                 <div class="col-lg-3 col-md-6">
                    <?php   $current_year = date("Y");  $current_month = date("m"); $current_date = date("d");
                     $chceklasttimeid = mysqli_fetch_row(mysqli_query($con,"SELECT MAX(id) FROM `emp_attendanceinfo` WHERE MONTH(currentt_date) = '$current_month' AND YEAR(currentt_date) = '$current_year' AND DAY(currentt_date) = '$current_date' AND `emp_priid` = '".$users['id']."'  "));
                     
                        $chcektimein = mysqli_fetch_row(mysqli_query($con,"SELECT MAX(time_in),MAX(time_out),MAX(totel_time) FROM `emp_attendanceinfo` WHERE  `id` = '".$chceklasttimeid[0]."'"));
                            if($chcektimein[0] <= date("Y-m-d")) {?>
                        <div class="card top_counter">
                            <div class="body" style=" height: 130px;">
                                <div class="content">
                                    <div class="attend">Mark Today Attendance<?php echo $chceklasttimeid[0];?></div>
                                    <hr>
                                        <div class="text-center"> <button class="btn btn-sm btn-primary timein"> Time In </button></div>    
                                </div>
                            </div>
                        </div>  
                    <?php }else{?>
                        <div class="card top_counter">
                            <div class="body" style=" height: 150px;">
                                <div class="content">
                                    <?php if($chcektimein[1] == ''){?>
                                    <div class="attend">Today login Time <?php $currentdate =  date("Y-m-d h:i:sa");
                                    ?> <br><span><?php $start_date = new DateTime($currentdate);$since_start = $start_date->diff(new DateTime($chcektimein[0]));
                                            echo $since_start->h.' hours ';echo $since_start->i.' minutes '; $since_start->s.' seconds ';
                                        ?></span>
                                    </div>
                                     <hr>
                                        <div class="text-center"> <button class="btn btn-sm btn-danger timeout"> Time Out </button></div>  
                                    <?php }else{ ?>
                                         <div class="attend">Totel login Time <br><span><?php echo $chcektimein[2];?></span>
                                    </div>
                                    <?php }?>

                                     
                                </div>
                            </div>
                        </div>
                    <?php }?>


                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-university"></i> </div>
                            <div class="content">
                                <div class="text">Totel Leave</div>
                                <h5 class="number">$2.8M</h5>
                            </div>
                            <hr>
                            <div class="icon"><i class="fa fa-university"></i> </div>
                            <div class="content">
                                <div class="text">Balance Leave</div>
                                <h5 class="number">$1,250</h5>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Upcoming Birthday </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Performance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width35" alt=""></td>
                                            <td>Marshall Nichols</td>
                                            <td><span>UI UX Designer</span></td>
                                            <td><span class="badge badge-success">Good</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar2.jpg" class="rounded-circle width35" alt=""></td>
                                            <td>Susie Willis</td>
                                            <td><span>Designer</span></td>
                                            <td><span class="badge badge-warning">Average</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar3.jpg" class="rounded-circle width35" alt=""></td>
                                            <td>Francisco Vasquez</td>
                                            <td><span>Team Leader</span></td>
                                            <td><span class="badge badge-primary">Excellent</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>

            
        </div>
    </div>

  <script type="text/javascript">
   $(document).ready(function() {
            var date = new Date;
          // alert(date);
          // console.log('dsadsa');
          var seconds = date.getSeconds();
          var minutes = date.getMinutes();
          var hours = date.getHours();

          // Create an object with each hand and it's angle in degrees
          var hands = [
            {
              hand: 'hours',
              angle: (hours * 30) + (minutes / 2)
            },
            {
              hand: 'minutes',
              angle: (minutes * 6)
            },
            {
              hand: 'seconds',
              angle: (seconds * 6)
            }
          ];
          // Loop through each of these hands to set their angle
          for (var j = 0; j < hands.length; j++) {
            var elements = document.querySelectorAll('.' + hands[j].hand);
            for (var k = 0; k < elements.length; k++) {
                elements[k].style.webkitTransform = 'rotateZ('+ hands[j].angle +'deg)';
                elements[k].style.transform = 'rotateZ('+ hands[j].angle +'deg)';
                // If this is a minute hand, note the seconds position (to calculate minute position later)
                if (hands[j].hand === 'minutes') {
                  elements[k].parentNode.setAttribute('data-second-angle', hands[j + 1].angle);
                }
            }
          }

         $.ajax({
            url:"check-sat-sun",
            type:"POST",
            data: {timedatetime:'dsada'},
                success:function(success){
                    console.log(success);
                    // if(success == 1){
                    //     toastr.success('Time In Successfully','Successfully');
                    //     // location.reload();
                    // }else if(success == 0){
                    //     toastr.info('already timed in','Already');
                    // }else if(success == 2) {
                    //     toastr.error('Something Wrong Please Try Again','Error');
                    // }

                    // setTimeout(function(){ location.reload(); }, 500);
                    
                }
        }); 


   });



    $(".timein").click(function(){
        var today = new Date();
        var datetime = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+' '+ today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        console.log(datetime);
        swal({
            title: "Are you sure want Time In !",
            text: "",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#22AF46",
            cancelButtonText: "Cancel",
            confirmButtonText: "Time In",
             closeOnCancel: true,
            closeOnConfirm: true 
        }, function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:"employee-timeIn",
                    type:"POST",
                    data: {timedatetime:'2021-4-20 10:00:00'},
                        success:function(success){
                            console.log(success);
                            if(success == 1){
                                toastr.success('Time In Successfully','Successfully');
                                // location.reload();
                            }else if(success == 0){
                                toastr.info('already timed in','Already');
                            }else if(success == 2) {
                                toastr.error('Something Wrong Please Try Again','Error');
                            }

                            setTimeout(function(){ location.reload(); }, 500);
                            
                        }
                }); 
            }
        });

    });

    $(".timeout").click(function(){
         var today = new Date();
        var datetime = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+' '+ today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        // console.log(datetime);
        var h = '<?php echo $since_start->h.' hours ';?>' + '<?php echo $since_start->i.' minutes ';?>' ;
        console.log(h);
        // $("#toteltime").html(h); 
        swal({
            title: "Are you sure want Time Out !",
            text: "Your Totel Login Time "+ h,
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#C82333",
            cancelButtonText: "Cancel",
            confirmButtonText: "Time Out",
             closeOnCancel: true,
            closeOnConfirm: true 
        }, function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:"employee-timeout",
                    type:"POST",
                    data: {timedatetime:'2021-4-20 19:00:00'},
                        success:function(success){
                            console.log(success);
                            // alert(h);

                            if(success == 1){
                                toastr.success('Time Out Successfully','Successfully');
                                // location.reload();
                            }else if(success == 0){
                                toastr.info('already timed Out','Already');
                            }else if(success == 2) {
                                toastr.error('Something Wrong Please Try Again','Error');
                            } 
                             setTimeout(function(){ location.reload();}, 500);              
                             // alert(h); 
                             // $('#toteltimeee').append('dsdsadsds');   
                        }
                }); 
            }
        });
            
    });





  </script>