<script type="text/javascript">
$(document).ready(function() {
   $("#importcsv").click(function(){
	   
	   var filename = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
	   var res =  filename.substr(filename.indexOf(".") + 1).toLowerCase();
	   
        if (res != "csv" ) {
            $("#fileerror").html("Invalid File Format. Please Upload : <b> csv </b> Files.");
            return false;
        }
		else
		{
			$("#fileerror").html("");
			$("#csvupload").css("display","none");
			$("#import").css("display","none");
			$("#csvrow").css("display","block");
			$("#upload").css("display","block");
			return false;
		}
        
    });
	
	$("#employeecoloum").blur(function(){
    var empcode = $("#employeecoloum").val();
	var namecol = $("#namecoloum").val();
	var depcol = $("#departmentcoloum").val();
	var dobcol = $("#dobcoloum").val();
	var joincol = $("#joindatecoloum").val();
	
	if (empcode == namecol || empcode == depcol || empcode == dobcol || empcode == joincol )
	{
		$("#employeecoloum-error").html("Coloumn number should be unique.");
		$("#submit-val").prop('disabled', true);
		
	}
	else
	{
		$('div #employeecoloum-error').html("");
$("#submit-val").prop('disabled', false);		
	}	
  });
  
  $("#namecoloum").blur(function(){
    var empcode = $("#employeecoloum").val();
	var namecol = $("#namecoloum").val();
	var depcol = $("#departmentcoloum").val();
	var dobcol = $("#dobcoloum").val();
	var joincol = $("#joindatecoloum").val();
	
	if (namecol == empcode || namecol == depcol || namecol == dobcol || namecol == joincol )
	{
		$("#namecoloum-error").html("Coloumn number should be unique.");
		$("#submit-val").prop('disabled', true);
		
	}
	else
	{

		$('div #namecoloum-error').html('');
		$("#submit-val").prop('disabled', false);		
	}	
  });
  
    $("#departmentcoloum").blur(function(){
    var empcode = $("#employeecoloum").val();
	var namecol = $("#namecoloum").val();
	var depcol = $("#departmentcoloum").val();
	var dobcol = $("#dobcoloum").val();
	var joincol = $("#joindatecoloum").val();
	
	if (depcol == empcode || depcol == namecol || depcol == dobcol || depcol == joincol )
	{
		$("#departmentcoloum-error").html("Coloumn number should be unique.");
		$("#submit-val").prop('disabled', true);
		
	}
	else
	{
		$('div #departmentcoloum-error').html("");	
$("#submit-val").prop('disabled', false);		
	}	
  });
  
   $("#dobcoloum").blur(function(){
    var empcode = $("#employeecoloum").val();
	var namecol = $("#namecoloum").val();
	var depcol = $("#departmentcoloum").val();
	var dobcol = $("#dobcoloum").val();
	var joincol = $("#joindatecoloum").val();
	
	if (dobcol == empcode || dobcol == namecol || dobcol == depcol || dobcol == joincol )
	{
		$("#dobcoloum-error").html("Coloumn number should be unique.");
		$("#submit-val").prop('disabled', true);
		
	}
	else
	{
		$('div #dobcoloum-error').html("");	
$("#submit-val").prop('disabled', false);		
	}	
  });
  
  $("#joindatecoloum").blur(function(){
    var empcode = $("#employeecoloum").val();
	var namecol = $("#namecoloum").val();
	var depcol = $("#departmentcoloum").val();
	var dobcol = $("#dobcoloum").val();
	var joincol = $("#joindatecoloum").val();
	
	if (joincol == empcode || joincol == namecol || joincol == depcol || joincol == dobcol )
	{
		$("#joindatecoloum-error").html("Coloumn number should be unique.");
		$("#submit-val").prop('disabled', true);
		
	}
	else
	{
		$('div #joindatecoloum-error').html("");		
		$("#submit-val").prop('disabled', false);
	}	
  });
  
  
});
</script>



</body>
</html>