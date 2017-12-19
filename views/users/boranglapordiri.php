<!DOCTYPE html>
<html>
<head>
  <title>Borang Lapor Diri</title>
</head>
<body>

</body>
</html>

<table width="900px" align="center" cellpadding="20" border="2">
  <tr>

     <td width="20%" align="center"><img src="logo.png" alt="logo" style="width:200px;height:100px"></td>
     <td bgcolor="333366" align="center"><font color="LightGray" face="Times News Roman"><h1>BORANG LAPOR DIRI PELAJAR LATIHAN INDUSTRI</h1></font></td>
     </tr>
     </table>
     </br>
      <table border="0" cellpadding="10" width= "900px" align="center">
     <tr>
      <td><font face="Times News Roman">Nota: Pelajar diminta membuat pengesahan lapor diri latihan industri tujuh (7) hari dari tarikh lapor diri</font></td>
    </tr>
    </table>
    </br></br></br></br>


    <form action="lapordiri.php" method="post">

    <table border="0" cellpadding="10" width= "900px" align="center">
      <tr>
        <td><font face="Times News Roman">No. Matrik:</font></td>
        <td><?php echo $userData['MATRIK'] ?></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">Nama:</font></td>
    <td><?php echo $userData['NAMA'] ?></td>
    </tr>


     <tr>
    <td><font face="Times News Roman">Program:</font></td>
    <td><?php echo $userData['PROG'] ?></td>
    </tr>
    
    <tr>
    <td><font face="Times News Roman">Email:</font></td>
    <td><?php echo $userData['EMAIL'] ?></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">No. Telefon:</font></td>
    <td><input name="telefon" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_phone_student']; ?>"> <br></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">Penyelia UKM:</font></td>
    <td><input name="svu" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_supervisor_ukm']; ?>"> <br></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">Nama Tempat Latihan Industri:</font></td>
    <td><input name="ni" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_name_company']; ?>"> <br></td>
    </tr>

     <tr>
    <td><font face="Times News Roman">Alamat Tempat Latihan industri:</font></td>
    <td>
    <textarea name="tempat" cols="60" rows="5" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_address_company']; ?>""></textarea></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">No. Telefon Industri:</font></td>
   <td><input name="ti" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_phone_company']; ?>"> <br></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">No. Faksimili Indusri:</font></td>
    <td><input name="faks" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_faks_company']; ?>"> <br></td>
    </tr>

     <tr>
    <td><font face="Times News Roman">Email Industri:</font></td>
    <td><input name="ei" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_email_company']; ?>"> <br></td>
    </tr>


    <tr>
    <td><font face="Times News Roman">Nama Penyelia Industri:</font></td>
    <td><input name="svi" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_name_supervisor_com']; ?>"> <br></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">Jawatan Penyelia Industri:</font></td>
    <td><input name="jawatan" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_position_supervisor_com']; ?>"> <br></td>
    </tr>

     <tr>
    <td><font face="Times News Roman">Email Penyelia Industri:</font></td>
    <td><input name="epi" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_email_supervisor_com']; ?>"> <br></td>
    </tr>

     <tr>
    <td><font face="Times News Roman">No. Telefon Penyelia Industri:</font></td>
    <td><input name="npi" type="text" required="" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_phone_supervisor_com']; ?>"> <br></td>
    </tr>


    <td><font face="Times News Roman">Tarikh Mula Latihan:</font></td>
   <td><input name="mula" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_start_date']; ?>"> <br></td>
    </tr>

    <tr>
    <td><font face="Times News Roman">Tarikh Akhir Latihan:</font></td>
   <td><input name="tamat" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_end_date']; ?>"> <br></td>
    </tr>
  
    </table>
    <br>
    <br>

    <tr>
    <center><td><font size="3" face="Times News Roman"> Dengan ini disahkan bahawa pelajar di atas telah melaporkan diri untuk menjalankani latihan industri bermula:</font></td></center>
    <tr>
     
     <br>
      <center>
      <button type="submit" name="create">Sahkan</button>
      <button type="reset">Isi semula</button>

      </center><br><br>
      <table border="1" colspan="2" align="center" cellpadding="9" width="900px" cellspacing="0" bgcolor="#333366"> 
      <tr>
      <td>


<center><p><font color="LightGray" face="Times News Roman">Universiti Kebangsaan Malaysia,43600 UKM Bangi, Selangor<br> www.ukm.my </p></font></center>
  
</td>
</tr>
</table>
</form>


<tr>
    <td><font face="Times News Roman">Name:</font></td>
    <td><?php echo $userData['NAMA'] ?></td>
    </tr>