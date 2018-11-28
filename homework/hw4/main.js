function jobs() {
    var name = document.querySelector("#name").value;
    var field = document.querySelector("#m1").value;
    var find;
    
    if( field == "m1"){
        find = "Computer Science";
    } 
   /* 
    if( standing == "1") {
        find = "FRESHIE";
        
    } else if (standing == "2") {
        find = "FRESHIE2";
    } else if (standing == "3") {
        find = "FRESHIE3";
    } else if (standing == "4") {
        find = "FRESHIE4";
    }
    */
    
    document.querySelector("#result").innerHTML = find;
    
}//jobs

