// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  
  $.validator.addMethod("alphabets", function(value, element) {
        return this.optional(element) || /^[a-zA-Z]+$/.test(value);
    }, "Value should accept only letters");
	
  $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9_.-]*$/.test(value);
    }, "Value should accept only letters and numbers");
	
	 $.validator.addMethod("number", function(value, element) {
        return this.optional(element) || /^[0-9]*$/.test(value);
    }, "Value should accept only Numbers");
	
	$.validator.addMethod("user_email_not_same", function(value, element) {
   return $('#username').val() != $('#email').val()
}, "* User and Email should not match");
	
	
	
	
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
	  employeecode:{
          required: true,
          alphanumeric: true
        },
      name:  {
          required: true,
          alphabets: true
        },
      department:  {
          required: true,
          alphabets: true
        },
	  dob: "required",
	  joindate: "required",
    },
    // Specify validation error messages
    messages: {
		employeecode: {
          required: "Please enter your Employee code",
          alphanumeric: "Accept only letters and numbers",
        },
      name:  {
          required: "Please enter your Name",
          alphabets: "Accept only letters",
        },
      department: {
          required: "Please enter your Department",
          alphabets: "Value should accept only letters",
        },
	  dob: "Please enter your Date of birth",
	  joindate: "Please enter your Joining date"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  
    $("form[name='csvimport']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
	  employeecoloum:{
          required: true,
          number: true,
		  
        },
      namecoloum: {
          required: true,
          number: true,
        },
      departmentcoloum: {
          required: true,
          number: true,
        },
	  dobcoloum: {
          required: true,
          number: true,
        },
	  joindatecoloum: {
          required: true,
          number: true,
        },
    },
    // Specify validation error messages
    messages: {
		employeecode: {
          required: "Please enter a coloumn Number",
          alphabets: "Accept only Numbers",
        },
      name: {
          required: "Please enter a coloumn Number",
          alphabets: "Accept only Numbers",
        },
      department: {
          required: "Please enter a coloumn Number",
          alphabets: "Accept only Numbers",
        },
	  dob: {
          required: "Please enter a coloumn Number",
          alphabets: "Accept only Numbers",
        },
	  joindate: {
          required: "Please enter a coloumn Number",
          alphabets: "Accept only Numbers",
        },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  
});