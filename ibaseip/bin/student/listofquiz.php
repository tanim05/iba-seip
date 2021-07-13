 
        <?php
        $sql = "SELECT * FROM `tblstudent` s,`tblclass` c WHERE s.`CLASSID`=c.`CLASSID` AND  `IDNO` ='".$singlestudent->IDNO."'"; 
              $mydb->setQuery($sql);
              $cur = $mydb->loadResultList();
                foreach ($cur as $res) {
                ?>     

                <li class="list-unstyled text-left panel">
                 <div class="panel-heading"> 
                  <?php echo $res->CLASSCODE  ?>
                    <span class="pull-right">
                      <a title="View Test" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $res->CLASSCODE?>">View Test <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>   
                 <div id="collapseTwo<?php echo $res->CLASSCODE?>" class="panel-collapse collapse">
                   <div class="panel-body">
                      
                         <table   class="table   table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
        
          <thead>
            <tr>  
              <th> 
               Quiz Name</th>  
              <th>No. of Question</th> 
              <th>Term</th>
              <th width="13%" >Action</th> 
            </tr> 
          </thead> 
          <tbody>
            <?php   
              $sql = "SELECT * FROM tblquiz WHERE CLASSID='".$res->CLASSID."'"; 
              $mydb->setQuery($sql);
              $cur = $mydb->loadResultList();
                foreach ($cur as $result) {
   
              echo '<tr>';
              // echo '<td width="5%" align="center"></td>';
              echo '<td>' . $result->QUIZNAME.'</a></td>'; 
              echo '<td>'. $result->NOOFQUESTION.'</td>'; 
              echo '<td>'. $result->QUIZTERM.'</td>'; 
              
              echo '<td align="center" >  
              <a title="View Question" href="'.web_root.'index.php?q=takeexam&id='.$result->QUIZID.'"  class="btn btn-info btn-xs  "><span class="fa fa-info fw-fa"></span></a> 
                     </td>'; 
              echo '</tr>';
            } 
 
            ?>
          </tbody>
          
        </table>
                
                   </div>
                 </div> 
               </li>


    <?php  } ?>