
function search(){
    

var nameIn = document.getElementById("lastName").value;
var lastName = ""+nameIn;
lastName = lastName.toLowerCase();


var nameIn2 = document.getElementById("name").value;
var firstName = ""+nameIn2;
firstName = firstName.toLowerCase();

console.log(lastName);

var xhr = new XMLHttpRequest();

xhr.open('GET', "http://hp-api.herokuapp.com/api/characters", true);
xhr.send();
var html = "";
xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200){
        //alert("complete");
        var data = JSON.parse(this.responseText);
        console.log(data);
        
        for(var a = 0; a < data.length; a++){
            var namedb = (data[a].name);
            
            var str = ""+namedb;
            str = str.split(" ")
            var firstNamedb = str[0];
            var lastNamedb = str[1];
            firstNamedb = firstNamedb.toLowerCase();
            lastNamedb = lastNamedb.toLowerCase();
            var count = 0;
          //html += "<br> API:" +lastNamedb;
           //html += "<br> " +lastName;
           console.log(lastName);
           console.log(lastNamedb);
          // debugger;
           var count = 0;
           
            if(lastName == lastNamedb || firstName == firstNamedb ){
                html+="<br>";
                
                if(data[a].gender == "male"){
                    html += "<br><h2><em><td><kbd>Wizard: <mark>"+data[a].name+"</mark> Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2></td><br>";
                }
                if(data[a].gender == "female"){
                    html += "<br><h2><em><td><kbd>Witch: <mark>"+data[a].name+"</mark> Patronus:<strong> "+data[a].patronus.toUpperCase()+"</strong> House: <strong>"+data[a].house+"</strong></kbd></em></h2></td><br>";
                }
                count +=1;
            }
            
            if(a == data.length-1 && count == 0){
                html += "<br><h2><em><td><kbd>No Witch(es) or Wizard(s) found.</kbd></em></h2></td><br>";
            }
           
        }//for
        document.getElementById("myDIV").innerHTML = html;
    }//if
    
}//function

}