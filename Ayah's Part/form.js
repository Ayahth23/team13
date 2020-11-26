/* Lab 5 JavaScript File 
   Place variables and functions in this file */
   function autof() {
    document.getElementById("firstName").focus();
  }
  

function validate(formObj) {
 var alertText="";
 var error = 0; // it will be a series of if statements

 if (formObj.firstName.value == "") {
    alertText+="You must enter a first name \n";
    if (error ===0){
    formObj.firstName.focus();
    error=1;
    }
 }
 if (formObj.lastName.value ==""){
    alertText+="You mush enter a last name \n";
    if (error=== 0){
       formObj.lastName.focus();
    }
 }
 if (formObj.title.value ==""){
    alertText+="You must enter an email \n";
    if (error=== 0){
       formObj.title.focus();
    }

 }
 if (formObj.comments.value ==""){
    alertText+="You must enter a comment \n";
       if (error ===0){
       formObj.comments.focus();
       error=1;
    }
 }
 if (alertText !=0){
    alert(alertText)
    return false;
}   else {
    alert('Submission Successful!');
    return true;
}
}
