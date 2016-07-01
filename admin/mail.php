<?
	$email='shivathapa41@gmail.com';
	$cid=$row->client_id;
	$sid=$row->service_id;
	$date1=$row->renewed_till;	
	$date2=date("Y/m/d");
	$d1=strtotime($date1);
	$d2=strtotime(date("Y/m/d"));
	$calc=floor(abs($d2 - $d1) / 86400);
	if($calc==30)
	{
	
		
				/*-------------MESSAGE FOR Service Renew---------------------*/
				$name=$mgmt->getclientname_byid($cid);
				$service_title=$mgmt->getservicename_byid($sid);
				$subject="Your Service Expire";
				
				$msg_user="Dear, <br/>"
				.$name."<br/><br/> Your $service_cate $service_title  expire within $calc days.<br/>
				Please Contact your depeloper to renew it on time.<br/><br/>
	
Regards,<br/>
Your Developer
";
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port = 465;
				$mail->Username = 'websoftyantra@gmail.com';
				$mail->Password = "TestP@5s123";
				$mail->SetFrom('websoftyantra@gmail.com','Test Message');
				$mail->Subject = $subject;
				$mail->ContentType='text/html';
				$mail->MsgHTML($msg_user);
				$mail->AddAddress($email,$name);
				if($mail->Send())
					echo 'messege send sucessfully';
				else
					echo 'Error';		
		/*--- email function end here ---*/
	}
	else if($calc==15)
	{
	
		
				/*-------------MESSAGE FOR Service Renew---------------------*/
				$name=$mgmt->getclientname_byid($cid);
				$service_title=$mgmt->getservicename_byid($sid);
				$subject="Your Service Expire";
				
				$msg_user="Dear, <br/>"
				.$name."<br/><br/>  Your $service_cate $service_title  expire within $calc days.<br/>
				Please Contact your depeloper to renew it on time.<br/><br/>
	
Regards,<br/>
Your Developer
";
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port = 465;
				$mail->Username = 'websoftyantra@gmail.com';
				$mail->Password = "TestP@5s123";
				$mail->SetFrom('websoftyantra@gmail.com','Test Message');
				$mail->Subject = $subject;
				$mail->ContentType='text/html';
				$mail->MsgHTML($msg_user);
				$mail->AddAddress($email,$name);
				if($mail->Send())
					echo 'messege send sucessfully';
				else
					echo 'Error';		
		/*--- email function end here ---*/
	}
	else if($calc==7)
	{
	
		
				/*-------------MESSAGE FOR Service Renew---------------------*/
				$name=$mgmt->getclientname_byid($cid);
				$service_title=$mgmt->getservicename_byid($sid);
				$subject="Your Service Expire";
				
				$msg_user="Dear, <br/>"
				.$name."<br/><br/> Your $service_cate $service_title  expire within $calc days.<br/>
				Please Contact your depeloper to renew it on time.<br/><br/>
	
Regards,<br/>
Your Developer
";
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port = 465;
				$mail->Username = 'websoftyantra@gmail.com';
				$mail->Password = "TestP@5s123";
				$mail->SetFrom('websoftyantra@gmail.com','Test Message');
				$mail->Subject = $subject;
				$mail->ContentType='text/html';
				$mail->MsgHTML($msg_user);
				$mail->AddAddress($email,$name);
				if($mail->Send())
					echo 'messege send sucessfully';
				else
					echo 'Error';		
		/*--- email function end here ---*/
	}
	else if($calc==3)
	{
	
		
				/*-------------MESSAGE FOR Service Renew---------------------*/
				$name=$mgmt->getclientname_byid($cid);
				$service_title=$mgmt->getservicename_byid($sid);
				$subject="Your Service Expire";
				
				$msg_user="Dear, <br/>"
				.$name."<br/><br/> Your $service_cate $service_title  expire within $calc days.<br/>
				Please Contact your depeloper to renew it on time.<br/><br/>
	
Regards,<br/>
Your Developer
";
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port = 465;
				$mail->Username = 'websoftyantra@gmail.com';
				$mail->Password = "TestP@5s123";
				$mail->SetFrom('websoftyantra@gmail.com','Test Message');
				$mail->Subject = $subject;
				$mail->ContentType='text/html';
				$mail->MsgHTML($msg_user);
				$mail->AddAddress($email,$name);
				if($mail->Send())
					echo 'messege send sucessfully';
				else
					echo 'Error';		
		/*--- email function end here ---*/
	}
	else if($calc==1)
	{
	
		
				/*-------------MESSAGE FOR Service Renew---------------------*/
				$name=$mgmt->getclientname_byid($cid);
				$service_title=$mgmt->getservicename_byid($sid);
				$subject="Your Service Expire";
				
				$msg_user="Dear, <br/>"
				.$name."<br/><br/> Your $service_cate $service_title  expire Tomorrow<br/>
				Please Contact your depeloper to renew it on time.<br/><br/>
	
Regards,<br/>
Your Developer
";
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port = 465;
				$mail->Username = 'websoftyantra@gmail.com';
				$mail->Password = "TestP@5s123";
				$mail->SetFrom('websoftyantra@gmail.com','Test Message');
				$mail->Subject = $subject;
				$mail->ContentType='text/html';
				$mail->MsgHTML($msg_user);
				$mail->AddAddress($email,$name);
				if($mail->Send())
					echo 'messege send sucessfully';
				else
					echo 'Error';		
		/*--- email function end here ---*/
	}
	else if($calc==0)
	{
	
		
				/*-------------MESSAGE FOR Service Renew---------------------*/
				$name=$mgmt->getclientname_byid($cid);
				$service_cate=$mgmt->getservicename_byid($sid);
				$service_title=$mgmt->getservicetitle_byid($sid);
				$subject="Your Service Expire";
				
				$msg_user="Dear, <br/>"
				.$name."<br/><br/> Your $service_cate $service_title  expire Today<br/>
				Please Contact your depeloper to renew it on time.<br/><br/>
	
Regards,<br/>
Your Developer
";
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = TRUE;
				$mail->SMTPSecure = "ssl";
				$mail->Port = 465;
				$mail->Username = 'websoftyantra@gmail.com';
				$mail->Password = "TestP@5s123";
				$mail->SetFrom('websoftyantra@gmail.com','Test Message');
				$mail->Subject = $subject;
				$mail->ContentType='text/html';
				$mail->MsgHTML($msg_user);
				$mail->AddAddress($email,$name);
				if($mail->Send())
					echo 'messege send sucessfully';
				else
					echo 'Error';		
		/*--- email function end here ---*/
	}
}
	?>