<?php
 //session_start();
 //echo $total;
 //echo "<br>";
//  echo $sn;
//  echo "<br>";
 $eid;
//  echo $eid;
//  echo "<br>";
 
 $y=0;
 $y=$sn;
 $qn=0;
 
 
 while($y<=$total){
     $qn=$sn+1;
     $y++;

 }
 //echo $qn;
    if( empty( $_SESSION['quiz'] ) )$_SESSION['quiz']=date('Y-m-d H:i:s');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <script language ="javascript" >
    <?php
              $start=$_SESSION['quiz'];
              $end=date('Y-m-d H:i:s', strtotime( $_SESSION['quiz'] . ' +20 minutes' ) );
                echo "
                    var date_quiz_start='$start';
                    var date_quiz_end='$end';
                    var time_quiz_end=new Date('$end').getTime();";
      ?>
        var tim;
        var hour= 00;
        var min = 01;
        var sec = 10;
        var f = new Date();
        function f1() {
            f2();
            // document.getElementById("starttime").innerHTML = "Your started your Exam at " + f.getHours() + ":" + f.getMinutes();

        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Your Left Time  is :"+hour+" hours:"+min+" Minutes :" + sec+" Seconds";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (parseInt(min) == 0) {
                        clearTimeout(tim);
                        
                       
                       // $pr="account.php?q=quiz&step=2&eid=5589741f9ed52&n="+$sn+"&t=5";
                       if(<?php echo $qn ?><=<?php echo $total?>){
                      
                        location.href = "account.php?q=quiz&step=2&eid=<?php echo $eid;?>&n=<?php echo $qn; ?>&t=<?php echo $total;?>";
                     
                    }else{
                      
                          location.href ="account.php?q=result&eid=<?php echo $eid;?>";
                         // update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'"
                      }
                    }
                    else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Your Left Time  is :" + min + " Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
                    }
                }

            }
        }
    </script>
</head>
<body onload="f1()" >
    <form id="form1" runat="server">
    <div>
      <table width="100%" align="center">
        <tr>
          <td colspan="2">
          </td>
        </tr>
        <tr>
          <td>
            <div id="starttime"></div><br />
            <div id="endtime"></div><br />
            <div id="showtime"></div>
          </td>
        </tr>
        <tr>
          <td>

              <br />

          </td>

        </tr>
      </table>
      <br />

    </div>
    </form>
    
</body>
</html>