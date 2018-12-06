/*function search(){
    var nameIn = document.getElementById("name").value;
    var name = ""+nameIn;
    name = name.toLowerCase();
    var patIn = document.getElementById("patronus").value;
    var patronus = ""+patIn;
    patronus.toLowerCase();
    var houseIn = document.getElementById("house").value;
 
    if(houseIn == "1") {
        document.getElementById("myDIV").innerHTML = "The wizard "+name+", has a patronus of "+patronus+".";
    }
    
}
*/
function search(){
    var nameIn = document.getElementById("name").value;
    var name = ""+nameIn;
    name = name.toLowerCase();
    //call ajax
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "data.php";
    var async = true;
    
    ajax.open(method, url, async);
    //sending ajax request
    ajax.send();
    
    //receive response from data.php
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            var data = JSON.parse(this.responseText);
            console.log(data);
            
            var html = "";
            var count = 0;
            for(var a = 0; a < data.length; a++){
                var firstName = data[a].firstName;
                if(firstName == name){
                    html += "<tr>";
                        html += "<td>" +firstName+ "</td>";
                    html += "</tr>";
                    count +=1;
                } if(count == 0 && a == data.length-1) {
                    html += "No Witch or Wizard found.";
                    
                } 
                
            }//for
            document.getElementById("data").innerHTML = html;
            
        }//if
    }
}//search()