
$(document).ready(function(){

    var counter = 2;
		
    $("#addButton").click(function () {
				
	if(counter>10){
            $("#removeMessage").html('You can only add 10 URL at a time!');
            return false;
	}   

	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);
                
	newTextBoxDiv.after().html('<input type="text" class="form-control" placeholder="Enter URL" name="URLlink[]" id="URLlink"  ><br>');
            
	newTextBoxDiv.appendTo("#TextBoxesGroup");
		$("#removeMessage").html('');
	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==2){
           $("#removeMessage").html('You Must Save at least one URL!');
          return false;
       }   
        
	 counter--;
			
        $("#TextBoxDiv" + counter).remove();
        $("#removeMessage").html('');
			
     });
		
   
  });