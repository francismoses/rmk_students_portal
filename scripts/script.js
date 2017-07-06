	
		
		window.onerror=function(){ return false;}
		function classChange(styleChange,item) 
		{
			item.className = styleChange;
		}
		
		function validateForm(strSalt)
		{
			var pass=document.getElementById("password").value;
			var ck_password =/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$/
			var errors = [];
			if(document.getElementById("username").value =="")
			{
				alert("Please enter the id");  
				document.getElementById("username").focus();
				return false;
			}
			else if(document.getElementById("password").value=="")
			{
				alert("Please enter the password");
				document.getElementById("password").focus();
				return false;
			}
			else if (pass!="" && pass.length<8)
			{
				alert ("Please enter the Password more than or equal to 8 characters");
				document.getElementById("password").value="";
				document.getElementById("password").focus();
				return false;
			} 
			/*else if(document.getElementById("security_code").value=="")
			{
				alert("Please answer the question");
				document.getElementById("security_code").focus();
				return false;
			}*/
			else if (!ck_password.test(pass)) 
			{
				errors[errors.length] = "Minimum one lowercase characters (a–z)";
				errors[errors.length] = "Minimum one uppercase characters (A–Z)";
				errors[errors.length] = "Minimum one numeric characters (0–9)";
				errors[errors.length] = "Minimum one special Characters and Valid special characters are: @#$%^&+=";
				if (errors.length > 0)
				{
					reportErrors(errors);
					document.getElementById("password").value="";
					document.getElementById("password").focus();
					return false;
				}
			return false;
			}
			else
			{
				var strEncPwd=new String(encryptPwd1(document.getElementById("password").value,strSalt));
				document.getElementById("password").value=strEncPwd;
				document.login.submit();
			}
			return true;
		}
		function validateForm2(strSalt)
		{
			var pass=document.getElementById("password").value;
			var ck_password =/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$/
			var errors = [];
			if(document.getElementById("username1").value =="")
			{
				alert("Please enter the id");  
				document.getElementById("username1").focus();
				return false;
			}
			else if(document.getElementById("password1").value=="")
			{
				alert("Please enter the password");
				document.getElementById("password1").focus();
				return false;
			}
			else if (pass!="" && pass.length<8)
			{
				alert ("Please enter the Password more than or equal to 8 characters");
				document.getElementById("password1").value="";
				document.getElementById("password1").focus();
				return false;
			} 
			/*else if(document.getElementById("security_code").value=="")
			{
				alert("Please answer the question");
				document.getElementById("security_code").focus();
				return false;
			}*/
			else if (!ck_password.test(pass)) 
			{
				errors[errors.length] = "Minimum one lowercase characters (a–z)";
				errors[errors.length] = "Minimum one uppercase characters (A–Z)";
				errors[errors.length] = "Minimum one numeric characters (0–9)";
				errors[errors.length] = "Minimum one special Characters and Valid special characters are: @#$%^&+=";
				if (errors.length > 0)
				{
					reportErrors(errors);
					document.getElementById("password1").value="";
					document.getElementById("password1").focus();
					return false;
				}
			return false;
			}
			else
			{
				var strEncPwd=new String(encryptPwd1(document.getElementById("password1").value, strSalt));
				document.getElementById("password1").value=strEncPwd;
				document.login.submit();
			}
			return true;
		}
		function reportErrors(errors)
		{
			var msg = "Please Enter Valide Password...\n";
			for (var i = 0; i<errors.length; i++) 
			{
				var numError = i + 1;
				msg += "\n" + numError + ". " + errors[i];
			}
			alert(msg);
			return true;
		}
		
		function encryptPwd1(strPwd, strSalt,strit)
		{
			var strNewSalt=new String(strSalt);
			if (strPwd=="" || strSalt=="")
			{
				return null;
			}
			var strEncPwd;
			var strPwdHash = MD5(strPwd);
			var strMerged = strNewSalt+strPwdHash;
			var strMerged1 = MD5(strMerged);
			return strMerged1;
		}
		
		function onlynumeric(evt,item)
		{
			var chrcode = (evt.which) ? evt.which : evt.keyCode
			if (chrcode > 31 && (chrcode < 48 || chrcode > 57))
			{	
				return false;	
			}
			return true;
		}
		function detectCapsLock(e)
		{
			var keyPressed = (navigator.appName == "Microsoft Internet Explorer") ? e.keyCode : e.charCode;
			if(keyPressed!=13 && keyPressed!=10 && keyPressed!=127)
			{
				if((!e.shiftKey && (keyPressed >= 65 && keyPressed <= 90)) || ((keyPressed >= 97 && keyPressed <= 122) && e.shiftKey))
				{
					document.getElementById("capsDetect").innerHTML = "CAPS LOCK is ON";
					document.getElementById("capsDetect").style.color = "navy";
				}
				else
				{
					document.getElementById("capsDetect").innerHTML = "";
				}
			}
			if(keyPressed==13)
			{
				alert("Enter Pressed");
			}
		}
		function alert_forpwd()
		{
			document.getElementById('forpwd').style.display="block";
		}
		


		function numberandhypen(e) 
					{
						var k;
						document.all ? k = e.keyCode : k = e.which;
						if(k < 32 ||(k > 47 && k < 58)|| k == 45)
						{
							return true;
						}
						else 
						{
							return false;
						}				
					}

		function alphaandno(e) 
					{
						var k;
						document.all ? k = e.keyCode : k = e.which;
						if(k > 32 && ((k < 65 || k > 90)&&(k < 97 || k > 122))&&(k < 48 || k > 57))
						{
							return false;
						}
						else
						{
							return true;
						}				
					}


		function isValidDate(sText) 
		{
			var reDate = /(?:0[1-9]|[12][0-9]|3[01])\-(?:0[1-9]|1[0-2])\-(?:19|20\d{2})/;
			return reDate.test(sText);
		}
		
		function onccheckdob() 
		{
			var reg_no=document.getElementById('register_no').value;
			reg_no=reg_no.trim();
			if(substring(reg_no,5,2)='12')
			{
				document.getElementById('dob_div').style.display='none';
			}
			else
			{
				document.getElementById('dob_div').style.display='';
			}
		}
					
		function stu_result()
		{
			var reg_no=document.getElementById('register_no').value;
			var security_code_student=document.getElementById('security_code_student').value;
			var dob_get=document.getElementById('dob').value;
			
			if(reg_no.trim() == "")
			{
				alert("Please enter register number");
				return false;
			}
			
			if(!/^[0-9a-zA-Z]*$/.test(reg_no.trim()))
			{
				alert("Please enter valid register number");
				return false;		
			}
			
			
			/*if(security_code_student.trim() == "")
			{
				alert("Please enter Security code");
				return false;
			}*/
 		}
		