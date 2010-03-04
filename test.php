<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	  "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Example</title>
    <script type="text/javascript">
      function setEgg(number){
      document.getElementById("egg").value=number;
      document.hidden_form.submit();
      }
      
      function divider(number){
      x=document.getElementById("divider"+number).value
      document.getElementById("divider"+number).value=1-x;
      }
    </script>
  </head>
  <body>
    <img src="eggs.jpg" usemap="#eggmap">

    <?php
       $months = array("Jan","Feb","Mar",
                      "Apr","May","Jun", 
                      "Jul","Aug","Sep", 
                      "Oct","Nov","Dec");
       if(count($_POST)>0){
         $month=$months[$_POST["egg"]];
         $day=(16*$_POST["divider0"]+
              8*$_POST["divider1"]+
              4*$_POST["divider2"]+
              2*$_POST["divider3"]+
              1*$_POST["divider4"]+1);
         echo "You selected: ". $month .",".$day;
       }
    /*foreach($_POST as $x){
       echo htmlspecialchars($x) . ",";
       }*/
       ?>
    
    
    <map name="eggmap">
      <area shape="circle" alt="" title="" coords="89,281,42" href="javascript:setEgg(0)" target="" />
      <area shape="circle" alt="" title="" coords="183,283,44" href="javascript:setEgg(1)" target="" />
      <area shape="circle" alt="" title="" coords="280,283,44" href="javascript:setEgg(2)" target="" />
      <area shape="circle" alt="" title="" coords="380,282,44" href="javascript:setEgg(3)" target="" />
      <area shape="circle" alt="" title="" coords="470,280,43" href="javascript:setEgg(4)" target="" />
      <area shape="circle" alt="" title="" coords="557,278,41" href="javascript:setEgg(5)" target="" />
      <area shape="circle" alt="" title="" coords="86,375,44" href="javascript:setEgg(6)" target="" />
      <area shape="circle" alt="" title="" coords="182,377,42" href="javascript:setEgg(7)" target="" />
      <area shape="circle" alt="" title="" coords="277,373,43" href="javascript:setEgg(8)" target="" />
      <area shape="circle" alt="" title="" coords="377,374,46" href="javascript:setEgg(9)" target="" />
      <area shape="circle" alt="" title="" coords="471,373,47" href="javascript:setEgg(10)" target="" />
      <area shape="circle" alt="" title="" coords="561,369,43" href="javascript:setEgg(11)" target="" />
      <area shape="poly" alt="" title="" coords="134,356,159,327,135,305,107,329" href="javascript:divider(0)" target="" />
      <area shape="poly" alt="" title="" coords="233,353,257,328,230,306,209,329" href="javascript:divider(1)" target="" />
      <area shape="poly" alt="" title="" coords="328,351,306,326,328,305,354,323" href="javascript:divider(2)" target="" />
      <area shape="poly" alt="" title="" coords="450,325,429,305,402,326,426,353" href="javascript:divider(3)" target="" />
      <area shape="poly" alt="" title="" coords="544,325,519,301,493,325,520,350" href="javascript:divider(4)" target="" />
      <area shape="default" nohref />
    </map>
    <br>
    <form method="post" name="hidden_form">
      <input type="hidden" name="egg" id="egg" value="-1">
      <input type="hidden" name="divider0" id="divider0" value="0" />
      <input type="hidden" name="divider1" id="divider1" value="0" />
      <input type="hidden" name="divider2" id="divider2" value="0" />
      <input type="hidden" name="divider3" id="divider3" value="0" />
      <input type="hidden" name="divider4" id="divider4" value="0" />
    </form> 
    
  </body>
</html>
