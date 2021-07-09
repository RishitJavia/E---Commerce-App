	

			function FormValid(){
				var c_name = document.getElementById("cnm").value;
				var m_name = document.getElementById("ln").value;
				var f_name = document.getElementById("fn").value;
				var id_no  = document.getElementById("qn").value;
				var city   = document.getElementById("ct").value;
				var dist   = document.getElementById("dt").value;
				var add    = document.getElementById("add").value;
				var state  = document.getElementById("st").value;
				var pin    = document.getElementById("pc").value;
				var contact= document.getElementById("cn").value;
				var email  = document.getElementById("em").value;
				var ps1    = document.getElementById("pass").value;
				var ps2    = document.getElementById("ps2").value;
				
				
				if(!(c_name.match(/^[a-zA-Z\s]+$/))){
					alert("Please enter valid candidate name.");
					
				}
				if(!(m_name.match(/^[\sa-zA-Z]+$/))){
					alert("Please enter valid mother name.");
					
				}
				if(!(f_name.match(/^[\sa-zA-Z]+$/))){
					alert("Please enter valid father name.");
					
				}
				if(!(id_no.match(/^[1-9][\d]{1,5}$/))){
					alert("Please enter valid Identification Number.");
					
				}
				if(!(city.match(/^[\sa-zA-Z]+$/))){
					alert("Please enter valid city name.");
					
				}
				if(!(add.match(/^[\s\da-zA-Z-,\/\\]+$/))){
					alert("Please enter valid address.");
			
				}
				if(!(state.match(/^\s[a-zA-Z]+$/))){
					alert("Please enter valid state name.");
					
				}
				if(!(pin.match(/^[1-9][\d]{5}$/))){
					alert("Please enter valid pin code.");
					
				}
				if(!(contact.match(/^[6-9][\d]{9}$/))){
					alert("Please enter valid contact number.");
					
				}
				if(!(email.match(/^([1-9][\d])([a-zA-Z]{3})([\d]{2}[1-9])@nirmauni.ac.in$/))){
					alert("Please enter valid Email ID.");
					
				}
				if(!(ps1.match(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/))){
					alert("Password must be minimum of eight characters long consisting of a
combination of uppercase letter, lowercase letter, and digits.");
					
				}
				if(ps2.length==0){
					alert("Please Re-enter password for confirmation.");
				}
				if(ps2.localeCompare(ps1)!=0){
					alert("Please enter same password for confirmation.");
					
				}
			}