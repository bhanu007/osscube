//js
$(document).ready(function(){
    $("#formcreatetemplate").submit(function(){
        if(onlySpacesA("newtemp","Name Can't Be Empty")) {
            return false;
        }
        ss=$("input[type=text]").val();
        /*foreach(ss as a) {
            
        }*/
        
        alert(ss);
        return false;
    });
	var i=0;
$("#addelement").click(function(){

	var x=$("#tempopt").val();
	i++;
	//alert(x);	
	if(x==1) {
		$("#template").append("<tr id='opt"+i+"'>  <td> Text Box</td>" +
				"<td>	<input type='text' name='text_"+i+"' > </td><td></td>" +
				"</tr>");
	} else if(x==2) {
		$("#template").append("<tr id='opt"+i+"'><td> Text Area</td>" +
				"<td>	<input type='text' name='texta_"+i+"'> </td><td></td>" +
				"</tr>");
	} else if(x==3) {
		var sid="opt"+i;
		$("#template").append("<tr id='opt"+i+"'>  <td> Check box</td>" +
				"<td>	<input type='text' name='check_"+i+"'> </td><td>" +
				"<input type='text' name='checkopt_"+i+"' placeholder='enter value , seprated'></td>" +
				"</tr>");
	} else {
		var sid="opt"+i;
		$("#template").append("<tr id='opt"+i+"'>  <td>Combo box</td>" +
				"<td>	<input type='text' name='combo_"+i+"'> </td><td>" +
				"<input type='text' name='comboopt_"+i+"' placeholder='enter value , seprated'></td>" +
				"</tr>");
	}

});
});
/*<input type=button id='"+sid+"' onclick=createCheck(this.id) value=CreateCheck >*/
function createCheck(a) {
$("#"+a).append("Option <input type='text' name='check"+a+"'>");
alert(a);
	
}
function createCombo(a) {
	$("#"+a).append("Option <input type='text' name='check"+a+"'>");
	alert(a);
 }
function onlySpacesA(input,msg) {
    input="#"+input;
    str=$(input).val();
    temp=str.replace(/\s/g,"");
    if(temp.length<1) {
        $(input).css("background-color","#cff993");
        $(input).val('');
        $(input).attr("placeholder",msg);
        $(input).focus();
        return true;
       }  else {
             return false;
    }
}