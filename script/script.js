   function validateform(){  
   var username=document.myform.username.value;  
   var password=document.myform.password.value;  
  
   if (username==null || username==""){  
      alert("Please enter the name.");  
      return false;  
   }else if(password==null || password=="" ){  
      alert("Please enter the password.");  
      return false;  
  }  
}

   function validate(){  
   var username=document.myform1.username.value;  
   var password=document.myform1.password.value;  
  
   if (username==null || username==""){  
      alert("Please enter the name.");  
      return false;  
   }else if(password==null || password=="" ){  
      alert("Please enter the password.");  
      return false;  
  }  
}

 function validateform1(){  
   var P_name=document.form1.P_name.value; 
   var P_price=document.form1.P_price.value;   

  
   if (P_name==null || P_name===""){  
      alert("Please enter the Product name.");  
      return false; 
    }else if(P_price==null || P_price=="" ){  
      alert("Please enter the Price.");  
      return false; 	  

  }  
}

   function validate(){  
   var username=document.myform2.username.value;  
   var password=document.myform2.password.value;  
  
   if (username==null || username==""){  
      alert("Please enter the name.");  
      return false;  
   }else if(password==null || password=="" ){  
      alert("Please enter the password.");  
      return false;  
  }  
}