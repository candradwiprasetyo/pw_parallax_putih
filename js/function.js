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
							window.location = 'proses.php?act=1';
						});
						return false;
						
						
					}
			}
			
			document.querySelector('div.examples div.custom-icon button').onclick = function(){
				var formx = document.form_update;
				
					i_email = formx.i_email.value;
					if(i_email == ""){
						swal({
							title: "Thanks for join !",
							text: "Any updates  will be shared to you",
							imageUrl: 'images/candramelon.png'
						});
						//return false;
					}else if(validasi_email(i_email)==false){
						swal({
							title: "Thanks for join !",
							text: "Any updates  will be shared to you",
							imageUrl: 'images/candramelon.png'
						});
						return false;
					}else{
						swal({
						title: "Are you sure?",
						text: "You will not be able to recover this imaginary file!",
						type: "warning",
						showCancelButton: true,
						confirmButtonColor: '#DD6B55',
						confirmButtonText: 'Yes, delete it!'
					},
					function(){
						alert("Deleted!");
					});
						
						
					}
				
			};
			
			document.querySelector('ul.examples2 li.custom-icon button').onclick = function(){
				var formx = document.form_contact;
					name = formx.i_name.value;
					email = formx.i_email.value;
					subject = formx.i_subject.value;
					message = formx.i_message.value;	
					
					if(name == "" || email == "" || subject == "" || message == ""){
						
						//return false;
					}else if(validasi_email(email)==false){
						//return false;
					}else{
						swal({
							title: "Thanks for get in touch !",
							text: "I'l give you feedback as soon as possible :)",
							imageUrl: 'images/candramelon.png'
						});
					}
			};	
			
			