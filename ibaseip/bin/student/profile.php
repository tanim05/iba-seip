<?php  
 if (!isset($_SESSION['IDNO'])){
      redirect("index.php");
     }


    $student = New Student();
    $res = $student->single_student($_SESSION['IDNO']);
 
  $search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
  if ($search=='grades') {
    # code...
     $subtitle='Grades';
  }elseif($search=='createmessage') {
     $subtitle='Create Message';
   }elseif($search=='test') {
     $subtitle='List of Subject';
  }else{
    $subtitle = 'Inbox';
  }

	?>

   <div class="container">


<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head" style="background-color: green">
                       <!--    <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" hieght="60" src="http://bootsnipp.com/img/avatars/ebeb306fd7ec11ab68cbcaa34282158bd80361a7.jpg">
                          </a> -->
                             <a class="inbox-avatar" href="" data-target="#myModal" data-toggle="modal" >
                              <img title="profile image"  width="64" hieght="70" class="img-hover"   src="<?php echo web_root. 'student/'.  $res->STUDPHOTO; ?>">
                              </a>
                          <div class="user-name">
                              <h5><a href="#"><?php echo $res->FNAME .' '.$res->LNAME; ?></a></h5>
                              <span>Course/Year :<?php echo $res->COURSE .'-'.$res->YEARLEVEL; ?></span>
                          </div> 
                      </div>
                      <div class="inbox-body">
                         
                      <ul class="inbox-nav inbox-divider">
                         
                          <li class="<?php echo ($_GET['search']=='inbox') ? 'active' :'' ?>">
                              <a href="index.php?q=profile&search=inbox"><i class="fa fa-inbox"></i> Inbox <!-- <span class="label label-danger pull-right">2</span> --></a> 
                          </li>
                           <li class="<?php echo ($_GET['search']=='createmessage') ? 'active' :'' ?>">
                              <a href="index.php?q=profile&search=createmessage"><i class="fa fa-send"></i> Create Message <!-- <span class="label label-danger pull-right">2</span> --></a> 

                          </li>
                       <!--    <li>
                              <a href="#" class="sentmessages"><i class="fa fa-envelope-o"></i> Sent Messages</a>
                          </li> -->  
                           <li class="<?php echo ($_GET['search']=='grades') ? 'active' :'' ?>" >
                              <a href="index.php?q=profile&search=grades"  ><i class=" fa fa-list"></i> Grades</a>
                          </li>
                           <li class="<?php echo ($_GET['search']=='updateaccount') ? 'active' :'' ?>" >
                              <a href="index.php?q=profile&search=updateaccount"  ><i class=" fa fa-lock"></i> Accounts</a>
                          </li>
                           <li class="<?php echo ($_GET['search']=='test') ? 'active' :'' ?>" >
                              <a href="index.php?q=profile&search=test"  ><i class=" fa fa-list"></i> Take a Test</a>
                          </li>
                      </ul>
                   
                  </aside>
                  <aside class="lg-side">
                    <div id="loaddatas">
                     <div class="inbox-head" style="background-color:green">
                          <h3><?php echo $subtitle;?></h3> 
                      </div> 
                         <br/>
                          <?php
                         
                             switch ($search) {
                               case 'grades':
                                 # code...
                               include 'studentgrades.php';
                                 break;
                               case 'createmessage':
                                 # code...
                               include 'createmessage.php';
                                 break;


                                case 'test':
                                 # code...
                               include 'listofquiz.php';
                                 break;


                                case 'updateaccount':
                                 # code...
                               include 'updateaccounts.php';
                                 break;

                               default:
                                 # code...
                               include 'inbox.php';
                                 break;
                             }


                           ?>
                    </div>
                  </aside>
              </div>
</div>

    






<!--  <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Compose
                          </a> 
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <h4 class="modal-title">Compose</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">To</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="cc" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Subject</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                      </span>
                                                      <button class="btn btn-send" type="submit">Send</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div> 
                              </div> 
                          </div> 
                      </div> -->










  <style type="text/css">
/*  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  a > img {
    width: 100%;
    height:auto;
}

*/
  </style>
<!--       <div class="col-sm-3">
 
          <div class="panel">            
            <div id="img_profile" class="panel-body">
            <a href="" data-target="#myModal" data-toggle="modal" >
            <img title="profile image" class="img-hover"   src="<?php echo web_root. 'student/'.  $res->STUDPHOTO; ?>">
            </a>
             </div>
          <ul class="list-group  ">
               <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $res->FNAME .' '.$res->LNAME; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Course</strong></span> <?php echo $res->COURSE .'-'.$res->YEARLEVEL; ?> </li> 
            
          </ul> 
                
        </div>
    </div>
          
<div class="col-sm-9"> 

<div class="panel">            
  <div class="panel-body">
   <?php
     //  check_message();   
       ?>
  <ul class="nav nav-tabs" id="myTab"> 
    <li class="active"><a href="#grades" data-toggle="tab">Grades</a></li> 
    <li><a href="#inbox" data-toggle="tab">Inbox</a></li>
  </ul>
              
  <div class="tab-content">
    
            <div class="tab-pane active" id="grades">
         
              <?php //require_once  "studentgrades.php" ?> 
            </div>
             <div class="tab-pane active" id="inbox">   
              <?php// require_once  "inbox.php" ?>
            </div>
            
             
  </div> 
 </div>
</div> 
</div>
 -->


    <!-- Modal photo -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action="student/controller.php?action=photos" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "photo" name="photo" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type=
                    "button">Close</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
   

