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
    
    var lastIn = document.getElementById("lastName").value;
    var lastName = ""+lastIn;
    lastName.toLowerCase();
    
    var patIn = document.getElementById("patronus").value;
    var patronus = ""+patIn;
    patronus.toLowerCase();
    
    var houseIn = document.getElementById("house").value;
    var house;
    if(house == "0"){
        house = "none";
    } else if(houseIn == "1" ) {
        house = "gryffindor";
    } else if(houseIn == "2"){
        house = "hufflepuff";
    } else if (houseIn == "3") {
        house = "ravenclaw";
    } else if (houseIn == "4"){
        house = "slytherin";
        
    } 
    

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
                var firstNamedb = data[a].firstName;
                var lastNamedb = data[a].lastName;
                var housedb = data[a].house;
                var patronusdb = data[a].patronus;
                if(firstNamedb == name || lastNamedb == lastName ){
                    html += "<tr>";
                        html += "<h2><em><td><kbd>Witch/Wizard: " +firstNamedb+" "+lastNamedb+" - Patronus: "+patronusdb+" - House:  "+housedb+"</kbd></em></h2></td><br>";
                        
                    html += "</tr>";
                    count +=1;
                } if(house == "0" && count > 0){
                     html += "<h2><em><td><kbd>Witch/Wizard: " +firstNamedb+" "+lastNamedb+" - Patronus: "+patronusdb+" - House:  "+housedb+"</kbd></em></h2></td><br>";
                    count = 0;
                }
                else if (housedb == house || patronusdb == patronus) {
                    count+=1;
                    html += "<h2><em><td><kbd>Witch/Wizard: " +firstNamedb+" "+lastNamedb+" - Patronus: "+patronusdb+" - House:  "+housedb+"</kbd></em></h2></td><br>";
                } 
                
                if(count == 0 && a == data.length-1) {
                    html += "<h2><em><td><kbd>No Witch(es) or Wizard(s) found.</kbd></em></h2>";
                    
                } 
            }//for
            document.getElementById("myDIV").innerHTML = html;
            
        }//if
    }//onreadychange
    
    
}//search()

