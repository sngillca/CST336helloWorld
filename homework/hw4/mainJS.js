function jobs() {
    var name = document.querySelector("#name").value;
    var field = document.querySelector("#field").value;
    var find;
   
    if(name == ""){
        name = "User";
    }
    
    if (field == 1) {
        find = name+", you've chosen Computer Science.";
    } else if ( field == 2) {
        find = name+", you've chosen Physics.";
    } else if ( field == 3) {
        find = name+", you've chosen Marine Biology.";
    } else if ( field == 4) {
        find = name+", you've chosen Art.";
    }
    
    var ft = document.getElementById("f");
    var pt = document.getElementById("p");
    var intr = document.getElementById("o");

    if(pt.checked == true && ft.checked == true && intr.checked == true) {
        find = find+" You are searching for all positions.";
    } else if (ft.checked == true && pt.checked == true) {
        find = find+" You are searching for Full-time & Part-time positions.";
    } else if (ft.checked == true && intr.checked == true) {
        find = find+" You are searching for Full-time & Internship positions.";
    } else if (pt.checked == true && intr.checked == true) {
        find = find+" You are searching for Part-time & Internship positions.";
    } else if (ft.checked == true) {
        find = find+" You are searching for Full-time positions.";
    } else if (pt.checked == true) {
        find = find+" You are searching for Part-time positions.";
    } else if (intr.checked == true) {
        find = find+" You are searching for Internship positions.";
    } 
    
    
    
    var radios = document.getElementsByName("gender");

    for (var i = 0, length = radios.length; i < length; i++)
    {
        if (radios[i].checked)
        {
            alert(radios[i].value);
            break;
            
        }//if
        
    }//for
    
    
    
        
    
    
    
    document.querySelector("#result").innerHTML = find;
}