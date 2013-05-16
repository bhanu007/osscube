<?php
mysql_connect( "localhost", "root", "" ) or die ("some error");
$x=mysql_select_db ( 'template' );
$eid="";
$template_name=$_REQUEST['template_name'];
$sql="insert into tname values('','$template_name')";
mysql_query($sql);
$sql1="select temp_id from tname where template_name='$template_name'";
$res=mysql_query($sql1);
 while($i=mysql_fetch_assoc($res)){
 	$temp_id=$i['temp_id'];

}
$col="";
print_r($_REQUEST);
foreach($_REQUEST as $key=>$val){
	
		$v=explode('_',$key);	
		if($v[0]=="rbox"){

			if($val=="on"){
				$req=1;
			}
			else{
				$req=0;
			}
		}			
	if($v[0]=="txtbox"){
		$col.=" $val varchar(50) ,";
		$sql3="insert into element values($temp_id,'','1','$val','$req')";

		$res1=mysql_query($sql3);
	}
	if($v[0]=="rabox"){

			if($val=="on"){
				$req=1;
			}
			else{
				$req=0;
			}
		}	
	 if($v[0]=="txta"){
	 	$col.=" $val varchar(50) ,";
		$sql4="insert into element values($temp_id,'','2','$val',$req)";
		$res1=mysql_query($sql4);
	}
	if($v[0]=="checkl"){
		$col.=" $val varchar(50) ,";
		$sql5="insert into element values($temp_id,'','3','$val','0')";	
		$res1=mysql_query($sql5);
		$sql="select eid from element where (id='$temp_id' and name='$val')";
		$res=mysql_query($sql);
		while($i=mysql_fetch_assoc($res)){
             $eid=$i['eid'];
       
         }
                   
		}
		if($v[0]=="checkopt"){
           $sql="insert into element_data values('',$eid,'$val')";
           mysql_query($sql);
		  }

	if($v[0]=="combo"){
		$col.=" $val varchar(50) ,";
		$sql6="insert into element values($temp_id,'','4','$val','0')";
		$res1=mysql_query($sql6) or die("gghgh");
		$sql="select eid from element where (id='$temp_id' and name='$val')";
		$res=mysql_query($sql);
		while($i=mysql_fetch_assoc($res)){
            $eid=$i['eid'];

         }
        
	}	
	if($v[0]=="combopt"){
           $sql="insert into element_data values('',$eid,'$val')";
         mysql_query($sql);
}
	
}
$col=rtrim($col,",");
$sql7="create table $template_name ($col) ";
mysql_query($sql7) or die("not created");





?>