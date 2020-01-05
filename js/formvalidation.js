
      function validate() {
      
         if( document.formvalidate.fname.value === "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
		 if( document.formvalidate.lname.value === "" ) {
            alert( "Please provide your Last name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.formvalidate.email.value === "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
		 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.formvalidate(formvalidate.email.value)){
            alert( "Please provide your Valid Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
			 
        if( document.formvalidate.Password.value === "" ) {
            alert( "Please provide your Password!" );
            document.myForm.EMail.focus() ;
            return false;
         }
		  if ( (formvalidate.gender[0].checked == false ) && (formvalidate.gender[1].checked == false ) ) 
          {
              alert ( "Please choose your Gender: Male or Female" ); 
              return false;
           }
		  
         
         return( true );
      }
