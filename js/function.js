// JavaScript Document

function validasi_email(string){
				var pattern1=/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;
						var 	pattern2=/^.+\@(\[?)[a-zA-Z0-9\-\_\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
						if((!pattern1.test(string) && pattern2.test(string))==false)
						{
						return false;}
				}

			function call_update(){
				var formx = document.form_update;
				
					i_email = formx.i_email.value;
					if(i_email == ""){
						swal({
							title: "Thanks for join !",
							text: "Any updates  will be shared to you",
							imageUrl: 'images/candramelon.png'
						});
						return false;
					}else if(validasi_email(i_email)==false){
						swal({
							title: "Thanks for join !",
							text: "Any updates  will be shared to you",
							imageUrl: 'images/candramelon.png'
						});
						return false;
					}else{
						
						swal({
						title: "Thanks for join !",
						text: "Any updates  will be shared to you",
						imageUrl: 'images/candramelon.png',
						showCancelButton: false,
						confirmButtonColor: '#DD6B55',
						confirmButtonText: 'OK'
						},
						function(){
							window.location = 'index/proses.php?act=1&email=' + i_email;
						});
						return false;
						
						
					}
			}
			
			
		
			
			