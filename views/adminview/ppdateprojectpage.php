<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/dropify/multipaldropbox.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.left-box{
    border: 2px solid #FEC804;
}
span.select2.select2-container.select2-container--default {
    border: none!important;
    width: 89%!important;
}
@media (max-width: 479px) and (min-width: 240px){
span.select2.select2-container.select2-container--default {
border: none!important;
width: 85%!important;
}
}
@media (max-width: 999px) and (min-width: 768px){
    span.select2.select2-container.select2-container--default {
border: none!important;
width: 82%!important;
}
}

.minuse{color: red!important;font-weight: 600!important;}
.pluse{color: green!important;font-weight: 600!important;}
.deletetext {
    font-size: 20px;
    text-align: center;
    padding: 43px;
}
</style>
<?php $fatchemp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM vvallproject WHERE id ='".$_GET['ud']."' "));
 $emp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id ='".$fatchemp['team_leader']."' "));?>
 <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">

                <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth">
                        <i class="fa fa-arrow-left"></i></a> Update (<?php echo $fatchemp['project_name'];?>) Project</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Projects</li>
                            <li class="breadcrumb-item active">Update (<?php echo $fatchemp['project_name'];?>) Project</li>
                        </ul>
                    </div>                        
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Runing Porject</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-grid"></i> 1,784</h6>
                            </div>
                            <!-- <span class="bh_visitors float-right">20,1,0</span> -->
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Employee On Leave</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-user"></i> 325</h6>
                            </div>
                            <!-- <span class="bh_visits float-right">20</span> -->
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Total Employee</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-users"></i> 13</h6>
                            </div>
                            <!-- <span class="bh_chats float-right">30</span> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                               
                                    <div class="body left-box">
                                        <div class="new_timeline">
                                            <div class="header">
                                                <div class="color-overlay">
                                                    <div class="day-number date">8</div>
                                                    <div class="date-right">
                                                    <div class="day-name weekenname"></div>
                                                    <div class="month monthnmame">February 2018</div>
                                                    </div>
                                                </div>                                
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="bullet green"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="projectnametxt"></h3>
                                                        <h4>Project Name</h4>
                                                    </div>
                                                </li>
                                                
                                                <li>
                                                    <div class="bullet pink"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="clientnametext"></h3>
                                                        <h4>Client Name</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet orange"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="teamleadertext"></h3>
                                                        <h4>Team Leader</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet v2"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="temaname"></h3>
                                                        <h4>Developer Team</h4>
                                                        <ul class="list-unstyled team-info margin-0 p-t-5 add-team" >                                            
                                                            <!-- <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>
                                                            <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>
                                                            <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>
                                                            <li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="" title=""></li>                                             -->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="bullet v3"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc ">
                                                        <h3 class="inrprice"><i class="fa fa-inr"></i>00.00</h3>
                                                        <h4>Project Price</h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="bullet green"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                    <h3><i class="fa fa-inr"></i><span class="devfee">00.00</span></h3>
                                                        <h4>Devloper Fees</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet pink"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="addprof"><i class="fa fa-inr"></i><span class="pro-profit">00.00</span></h3>
                                                        <h4>Profit</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet v2"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="project-enddate"></h3>
                                                        <h4>End Date</h4>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="bullet v2"></div>
                                                    <div class="time">----</div>
                                                    <div class="desc">
                                                        <h3 class="left-days"> <span class="leftdays"></span> Left Days </h3>
                                                        <h4>Total Days (<span class="toteldays"></span>)</h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                
                                
                                
                                <div class="col-sm-8">
                                    <form action="Admin-Update-project" method="POST" > 
                                    <div class="row clearfix">
                                        <input type="hidden" name="updateid" value="<?php echo $_GET['ud'];?>">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input type="text" id="projectname" name="projectname" value="<?=$fatchemp['project_name']?>" class="form-control" 
                                                placeholder="Project Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Client Name</label>
                                                <input type="text" id="clientname" name="clientname" value="<?=$fatchemp['client_name']?>" class="form-control" 
                                                placeholder="Client Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Start date</label>
                                                <input type="text" data-provide="datepicker" id="startprojectdate" value="<?=date("m/d/Y", strtotime($fatchemp['project_startdate']))?>" 
                                                 name="startdate" data-date-autoclose="true" class="form-control"
                                                 placeholder="Start date *" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="text" id="endprojectdate" autocomplete="off" value="<?=date("m/d/Y", strtotime($fatchemp['project_enddate']))?>" 
                                                name="end_date" data-provide="datepicker" data-date-autoclose="true" 
                                                class="form-control" placeholder="End date *">
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Doller Price </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-usd"></i></span>
                                                    </div>
                                                    <input type="text" id="dollerprice" name="dollerprice" value="<?=$fatchemp['pro_dollerprice']?>" 
                                                    class="form-control" placeholder="Doller Price  *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Enter Project Price </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-usd"></i></span>
                                                    </div>
                                                    <input type="text" id="projectprice" name="projectprice" value="<?=$fatchemp['projectprice_doller']?>" 
                                                    class="form-control" placeholder="Enter Project Price  *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-12">
                                            <label> Team Leader</label>
                                            <div class="form-group">                                        
                                                <select class="form-control show-tick" id="teamleader" name="teamleader">
                                                <option value="<?=$emp['id'];?>,<?=$emp['name'];?>"> <?=$emp['name'];?> </option>
                                                <?php $emp_que=mysqli_query($con,"SELECT * FROM users WHERE user_type != 'superAdmin' AND user_type != 'HR' ");
                                                while($emp=mysqli_fetch_assoc($emp_que)) { ?>
                                                    <option value="<?php echo $emp['id'];?>,<?php echo $emp['name'];?>"><?php echo $emp['name'];?></option>
                                                <?php }?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <label>Select Team</label>
                                            <div class="form-group">                                        
                                                <select name="employeteam[]" id="Brand_namee" class="form-control Brand_namee" multiple="multiple" 
                                                onchange="getemployeevalue(this.value)">
                                                    <?php $emp_que=mysqli_query($con,"SELECT * FROM users WHERE user_type != 'superAdmin'  ");
                                                    // $emp_que=mysqli_query($con,"SELECT * FROM users WHERE user_type != 'superAdmin' AND user_type != 'HR' ");
                                                    while($emp=mysqli_fetch_assoc($emp_que)) { ?>
                                                        <option value="<?php echo $emp['id'];?>"><?php echo $emp['name'];?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        

                                        <!-- <div class="col-12">
                                            <div class="body">               
                                                    <div id="dropzoneid" class="dropzone">                 
                                                        <div class="fallback">
                                                            <input  type="file" name="file[]" multiple  id="drop_img"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <input type="hidden" name="image_name" id="imgname">
                                        </div>  -->

                                        <div class="col-12">
                                            <label>Project Description</label>
                                            <textarea class="form-control"  id="description" name="proejct_desc" rows="7" cols="6" 
                                            placeholder="Write project description"><?=$fatchemp['project_description']?></textarea>
                                        </div>                               
                                    


                                        <div class="col-sm-12">
                                            <div class="mt-4" style="float: right;">
                                                <button type="submit" class="btn btn-primary"><i class="icon-plus icon-style" ></i> Update <?php echo $fatchemp['project_name']; ?> Project</button>
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#defaultModal" >
                                                    <i class="icon-refresh"></i> Refresh</button>
                                            </div>
                                        </div>
                                                      

                                    </div>
                                    </form>  
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- refresh model -->
     <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <input type="hidden" name="delete_id" id="deleteid">
                    <div class="modal-body deletetext">Changes that you made may not be saved. </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-info" id="refresh"><i class="icon-refresh"></i> Refresh</button>
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="icon-close"></i> CLOSE</button>
                    </div>
                </div>
        </div>
    </div>

    <script>

    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
            const d = new Date(); $(".monthnmame").html(monthNames[d.getMonth()] +'       '+ d.getFullYear()  );
            $(".date").html(d.getDate());
                var weekday = new Array(7);
                    weekday[0] = "Sunday";weekday[1] = "Monday"; weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";weekday[4] = "Thursday"; weekday[5] = "Friday";
                    weekday[6] = "Saturday";
                    $(".weekenname").html(weekday[d.getDay()]);

        // onload chnage value
    $( document ).ready(function() {
        
        
        var team = '<?=$fatchemp['project_team']?>';
        sl=team.split(',');
        $('#Brand_namee option').each(function(){
            if(sl.includes($(this).val())){
             $(this).prop('selected', true);
            }
            else {
             $(this).prop('selected', false);

            }
        })
        $('#Brand_namee').select2({
            placeholder: 'Select an option'
        });

        getemployeevalue(team);

        $(".inrprice").html('<i class="fa fa-inr"></i> ' + ($('#dollerprice').val() * $('#projectprice').val()).toFixed().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );

        $('.projectnametxt').html($('#projectname').val());
        $('.clientnametext').html($('#clientname').val());
        var ledername = $('#teamleader').val();
        $('.teamleadertext').html(ledername.split(",").pop());
        // console.log(ledername);

        $('#startprojectdate').html(function(){
                var updatestartday = $('#startprojectdate').val();
               
            if(updatestartday == ''){
                $(".date").html(d.getDate()); 
            }else{
                var mydate = new Date(updatestartday); 
                if(mydate.getDate().toString().length == '1'){ starttttttdate = '0'+ mydate.getDate();
                            }else{ starttttttdate = mydate.getDate();  }
            
                $(".monthnmame").html(monthNames[mydate.getMonth()] +'       '+ mydate.getFullYear()  );
                $(".weekenname").html(weekday[mydate.getDay()]);
                $(".date").html(starttttttdate);
            }
        });

        $("#endprojectdate").html(function(){
            var endprodate = new Date($('#endprojectdate').val());
            // console.log(endprodate);
            if(endprodate.getDate().toString().length == '1'){ endtttttdate = '0'+ endprodate.getDate();
                            }else{ endtttttdate = endprodate.getDate();  }
            var enddddd = monthNames[endprodate.getMonth()] + ' ' + endtttttdate + ' ' +  endprodate.getFullYear() +' ' + '[' + weekday[endprodate.getDay()] + ']'  ;
            $(".project-enddate").html(enddddd);
        });
        var dateFirst = new Date($('#startprojectdate').val());
            var dateSecond = new Date($('#endprojectdate').val());

        chekdatelift(dateFirst,dateSecond);

       
            
    });


    // onchnage vlaue chnage

        

                $("#projectname").change(function(){ $('.projectnametxt').html(this.value);});
                $("#clientname").change(function(){ $('.clientnametext').html(this.value);});
                $("#teamleader").change(function(){ $('.teamleadertext').html(this.value.split(",").pop()); });

                $("#endprojectdate").change(function(){
                    var endprodate = new Date(this.value);
                    // console.log(endprodate);
                    if(endprodate.getDate().toString().length == '1'){ endtttttdate = '0'+ endprodate.getDate();
                            }else{ endtttttdate = endprodate.getDate();  }
                    var enddddd = monthNames[endprodate.getMonth()] + ' ' + endtttttdate + ' ' +  endprodate.getFullYear() +' ' + '[' + weekday[endprodate.getDay()] + ']'  ;
                   $(".project-enddate").html(enddddd);

                            
                            var dateFirst = new Date($('#startprojectdate').val());
                            var dateSecond = endprodate;
                            chekdatelift(dateFirst,endprodate);
                            

                });

                $("#startprojectdate").change(function(){

                    var mydate = new Date(this.value);
                    // console.log(mydate.getDate().toString().length);
                        if(mydate.getDate().toString().length == '1'){ starttttttdate = '0'+ mydate.getDate();
                        }else{ starttttttdate = mydate.getDate();  }
                            $(".monthnmame").html(monthNames[mydate.getMonth()] +'       '+ mydate.getFullYear()  );
                            $(".weekenname").html(weekday[mydate.getDay()]);
                            $(".date").html(starttttttdate);

                        var dateFirstt = new Date($('#startprojectdate').val());
                        var dateSecondd = new Date($('#endprojectdate').val());
                        chekdatelift(dateFirstt,dateSecondd);
                });

               
                
                var devlopperfee = 0;
                function getemployeevalue(sel){
                   var valuee = $(".Brand_namee").val();
                        var opts = [];
                        for (var i = 0; i < valuee.length; i++) {
                            // console.log(valuee[i]);
                            opts.push(valuee[i]);
                        }
                        $.ajax({
                            url:"fatch-emp-sallery",
                            type:"POST",
                            data: {empvalue:opts},
                                success:function(success){
                                    // console.log( success);
                                    let unitsss  = JSON.parse(success);
                                    var empsallery = 0; var empimg = ''; var empnmae = '';
                                        unitsss.forEach(function (unitssss){
                                            empsallery +=  parseInt(unitssss.sallery); 
                                            empnmae += unitssss.name + ', ';
                                            empimg += '<li><img src="http://via.placeholder.com/35x35" data-toggle="tooltip" data-placement="top" alt="Avatar" data-original-title="'+unitssss.name+'" title="'+unitssss.name+'"></li>';
                                        });
                                            $('.add-team').html(empimg);
                                            $('.devfee').html(empsallery.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                            $('.temaname').html(empnmae);

                                            if(projectfee == ''){
                                                projectfee = ($('#dollerprice').val() * $('#projectprice').val()).toFixed(2);
                                            }
                                            // console.log(projectfee);
                                            devlopperfee = parseInt(empsallery);
                                            var profit = parseInt(projectfee) - parseInt(empsallery);
                                            if (profit > 0) {
                                                $(".pro-profit").html(profit.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); 
                                                $(".addprof").addClass('pluse'); $(".addprof").removeClass('minuse');
                                            }else{
                                                $(".pro-profit").html(profit.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                                $(".addprof").addClass('minuse'); $(".addprof").removeClass('pluse');
                                            }

                                }
                        });

                }

                var projectfee = 0;
                $("#projectprice").change(function(){
                    $(".inrprice").html('<i class="fa fa-inr"></i> ' + ($('#dollerprice').val() * this.value).toFixed().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
                    projectfee = ($('#dollerprice').val() * this.value).toFixed();
                    // console.log(devlopperfee);
                            var profitt = parseInt(projectfee) - parseInt(devlopperfee);
                                    if (profitt > 0) {
                                        $(".pro-profit").html(profitt.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); 
                                        $(".addprof").addClass('pluse'); $(".addprof").removeClass('minuse');
                                    }else{
                                        $(".pro-profit").html(profitt.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                        $(".addprof").addClass('minuse'); $(".addprof").removeClass('pluse');
                                    }

                });

               //days diff
                function chekdatelift(startdate,enddate){
                  

                    // var dateFirst = new Date($('#startprojectdate').val());
                    //     var dateSecond = new Date($('#endprojectdate').val());
                        var dateFirst = new Date(startdate);
                        var dateSecond = new Date(enddate);
                        // time difference
                        var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());
                        // days difference
                        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                        // difference
                        $('.toteldays').html(diffDays); 
                        //  console.log('totel days',diffDays);

                        // var currentdate = new Date('05/23/2021');
                        var currentdate = new Date();
                        var currenttimeDiff = Math.abs(currentdate.getTime() - dateSecond.getTime());
                        var leftdays = Math.ceil(currenttimeDiff / (1000 * 3600 * 24));
                        // var leftdaysss = 0;
                        // console.log(leftdays.length);
                        if(leftdays.toString().length == '1'){ leftdays = '0' + leftdays; }else{leftdays = leftdays;  }
                        // console.log(leftdays);
                            $('.leftdays').html(leftdays);
                        // console.log('Left days',leftdays);
                        var cal = (diffDays / 2) / 2 ;
                        //  console.log('alertdays',cal.toFixed(0)  );
                        if(cal.toFixed(0) >= leftdays){
                            // console.log('small');
                        return $('.left-days').addClass('minuse');$('.left-days').removeClass('pluse');
                        }else{
                            return $('.left-days').addClass('pluse');$('.left-days').removeClass('minuse');
                            //  console.log('big');
                        }
                }

                $("#refresh").click(function (){
                    location.reload();
                });
               

     
    </script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript">
// $('#Brand_namee').select2({
// placeholder: 'Select Brand'
// // console.log($('.Brand_namee').select2().val());
// });

    // $('.Brand_namee').on("select2:select", function (e) {
    //     // placeholder: 'Select Brand'     

    // console.log($('.Brand_namee').select2().val()); 
                
    // });
</script>

<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<script src="../assets/dropify/multipaldrop.js"></script>
<script>
    $('#multiselect3-all').multiselect({
        includeSelectAllOption: true,
    });
</script>
<script type="text/javascript">
     var newarray = [];
    var image_name = [];
    var myDropzone = new Dropzone("div#dropzoneid", { url: "form.php",method:"post",autoProcessQueue:false,uploadMultiple:true,parallelUploads:10,
    maxFiles:12, dictDefaultMessage: "Drop Project file here to upload",});
    newarray.push(myDropzone);
  myDropzone.on("sending", function(file, xhr, formDataa) {
    image_name.push(file.name);
  });
</script>

