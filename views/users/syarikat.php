<script src="jquery-2.1.1.js" language="javascript"></script>
<script type="text/javascript">
      var addedrows = new Array();
 
      $(document).ready(function() {
          $( "#myTable tbody tr" ).on( "click", function( event ) {
         
          var ok = 0;
          var theid = $( this ).attr('id').replace("sour","");    
       
          var newaddedrows = new Array();
           
          for (index = 0; index < addedrows.length; ++index) {
       
              // if already selected then remove
              if (addedrows[index] == theid) {
                      
                  $( this ).css( "background-color", "#ffccff" );
                   
                  // remove from second table :
                  var tr = $( "#dest" + theid );
                  tr.css("background-color","#FF3700");
                  tr.fadeOut(400, function(){
                      tr.remove();
                  });
                   
                  //addedrows.splice(theid, 1);   
                   
                  //the boolean
                  ok = 1;
              } else {
               
                  newaddedrows.push(addedrows[index]);
              } 
          }   
           
          addedrows = newaddedrows;
           
          // if no match found then add the row :
          if (!ok) {
              // retrieve the id of the element to match the id of the new row :
               
               
              addedrows.push( theid);
               
              $( this ).css( "background-color", "#cacaca" );
                       
              $('#destinationtable tr:last').after('<tr id="dest' + theid + '"><td>'
                  + $(this).find("td").eq(0).html() + '</td><td>'
                  + $(this).find("td").eq(1).html() + '</td><td>'
                  + $(this).find("td").eq(2).html() + '</td><td>'
                  + $(this).find("td").eq(3).html() + '</td><td>'
                  + $(this).find("td").eq(4).html() + '</td></tr>');         
               
          }
       
           
          });
      });     
    </script>

 <h2 style="margin-bottom: 30px;"><center><?= $title ?></center></h2>

 <form method="POST" action="">
   <div class="container">
    <div class="myBackground">
      <div class="table-responsive">
        <table id="myTable" class="table table-bordered" style="font-size: 10px">
          <thead>
            <tr class="success">
              <th>BIL</th>
              <th>KOD SYARIKAT</th>
              <th>NAMA</th>
              <th>Alamat</th>
              <th>No Tel</th>
              <th>Email</th>
              <th>KEUTAMAAN SYARIKAT</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($syarikat as $syarikat): ?>
            <tr>
              <td><?php echo $syarikat['fld_company_bil']; ?></td>
              <td><?php echo $syarikat['fld_company_id']; ?></td>
              <td><?php echo $syarikat['fld_company_name']; ?></td>
              <td><?php echo $syarikat['fld_company_address']; ?></td>
              <td><?php echo $syarikat['fld_company_phoneno']; ?></td>
              <td><?php echo $syarikat['fld_company_email']; ?></td>
              <td><?php echo $syarikat['fld_company_priority']; ?></td>
              <td>

                <?php echo form_open('users/mohon/'.$userData['MATRIK']."/".$syarikat['fld_company_id']); ?>
                     <input type="submit" value="Mohon" class="btn btn-primary btn-xs" onclick="return doAlert()">
                </form>


                <!--

                  if ($count == 3) { alert ('Anda hanya boleh memilih tiga(3) syarikat pada satu masa')}

                  a href="syarikat.php?mohon=<?php echo $syarikat['fld_company_id']; ?>" class="btn btn-primary btn-xs" type="submit" role="button"  name="submit" >Mohon</a></td-->





            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>      
    </div>     
   </div>
 </form>


 <br>
 <br>

 <div class="container">
  <div class="myBackground">
    <div class="table-responsive">
      <table class="table table-bordered" style="font-size: 10px" id="sampleOrderTable">
        <thead>
          <tr>
            <th>KOD</th>
            <th>NAMA SYARIKAT</th>
            <th>ALAMAT</th>
            <th>TARIKH</th>
            <th></th>
          </tr>
        </thead>

        <?php foreach ($mohonrow as $mohon): ?>
            <tr class="success">
            
              <td><?php echo $mohon['fld_company_id']; ?></td>
              <td><?php echo $mohon['fld_company_name']; ?></td>
              <td><?php echo $mohon['fld_company_address']; ?></td>
              <td><?php echo $mohon['fld_mohon_date']; ?></td>
              <td>

                <!--a href="<?php echo base_url('users/syarikat/delete/' .$mohon['fld_mohon_id']); ?>" class="btn btn-danger btn-xs">Delete</a-->

                 <?php echo form_open('users/cl2/'.$userData['MATRIK']."/".$mohon['fld_company_id']); ?>
                     <input type="submit" value="CETAK" formtarget="_blank" class="btn btn-primary btn-xs" >
                </form>


                <!--a target="_blank" href="users/cl/" class="btn btn-warning btn-xs" role="button">CETAK</a-->

                <!--?php echo form_open('users/delete/' .$mohon['fld_mohon_id']); ?>
                  <input type="submit" value="Delete" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete ?');">

                </form-->

                <!--input class="btn btn-danger btn-xs" type="submit" name="delete" value="Delete" /-->

                
                <!--a name="delete" href="Users.php?delete=<?php echo $mohon['fld_mohon_id']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a-->

                <?php echo form_open('users/delete/' .$mohon['fld_mohon_id']); ?>
                  <input type="submit" value="Delete" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete ?');">

                </form>

                <!--a name="delete" href="syarikat/delete/<?php echo $mohonrow['fld_mohon_id']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a-->

              </td>
            </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
   
 </div>


  <script src="../assets/js/jquery.js" type="text/javascript"></script>
  <script src="../assets/js/jquery.dataTables.js" type="text/javascript"></script>
  <script type="text/javascript">
    $.noConflict();
    jQuery( document ).ready(function( $ ) {
    $('#myTable').DataTable();
    });
// Code that uses other library's $ can follow here.
  </script>





