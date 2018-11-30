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
    var gender;
    for (var i = 0, length = radios.length; i < length; i++)
    {
        if (radios[i].checked == true)
        {
            gender = radios[i].value;
            //alert(gender);
            break;
            
        }//if
        
    }//for
    
    var exp = document.querySelector("#exp").value;
    
    
    if(gender == "female" && field == "1"){
        find = find +" The current percentage of female Computer Science majors is rougly 17%. ";
        
        if(exp <= 3){
        find = find +"Considering your "+exp+" year(s) of experience you'd be considered entry-level. Entry-level income for Computer Science is $68,165 per year, according to payscale.com.";
            
        } else if (exp >=4 && exp <=7) {
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered mid-level. Mid-level income for Computer Science is  $91,410  per year, according to payscale.com.";
        } else if ( exp >= 8 ){
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered experienced level. Experienced level income for Computer Science is  $119,958 per year, according to payscale.com.";
        }
    } else if (gender == "male" && field == "1" ) {
        find = find +" The current percentage of male Computer Science majors is rougly 83%. Considering your "+exp+" year(s) of experience you'd be considered entry level.";
        if(exp <= 3){
        find = find +"Considering your "+exp+" year(s) of experience you'd be considered entry-level. Entry-level income for Computer Science is $68,165 per year, according to payscale.com.";
            
        } else if (exp >=4 && exp <=7) {
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered mid-level. Mid-level income for Computer Science is  $91,410  per year, according to payscale.com.";
        } else if ( exp >= 8 ){
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered experienced level. Experienced level income for Computer Science is  $119,958 per year, according to payscale.com.";
        }
    } else if (gender == "other" && field == "1" ) {
        find = find +" The current percentage of male Computer Science majors is rougly 83%. The percentage of female is roughly 17%. Considering your "+exp+" year(s) of experience you'd be considered entry level.";
        if(exp <= 3){
        find = find +"Considering your "+exp+" year(s) of experience you'd be considered entry-level. Entry-level income for Computer Science is $68,165 per year, according to payscale.com.";
            
        } else if (exp >=4 && exp <=7) {
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered mid-level. Mid-level income for Computer Science is  $91,410  per year, according to payscale.com.";
        } else if ( exp >= 8 ){
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered experienced level. Experienced level income for Computer Science is  $119,958 per year, according to payscale.com.";
        }
    }
   
   
   
   
   if(gender == "female" && field == "2"){
        find = find +" The current percentage of female Physics major is roughly around 20% according to www.aps.org. ";
        
        if(exp <= 3){
        find = find +"Considering your "+exp+" year(s) of experience you'd be considered entry-level. Entry-level income for Physics major is $41,423 per year, according to payscale.com.";
            
        } else if (exp >=4 && exp <=7) {
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered mid-level. Mid-level income for Physiscs major is $49,585 per year, according to payscale.com.";
        } else if ( exp >= 8 ){
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered experienced level. Experienced level income Physics major is $61,277 per year, according to payscale.com.";
        }
    } else if (gender == "male" && field == "2" ) {
        find = find +" The current percentage of male Physics major is roughly around 80% according to www.aps.org.  Considering your "+exp+" year(s) of experience you'd be considered entry level.";
        if(exp <= 3){
        find = find +"Considering your "+exp+" year(s) of experience you'd be considered entry-level. Entry-level income for Computer Science is $68,165 per year, according to payscale.com.";
            
        } else if (exp >=4 && exp <=7) {
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered mid-level. Mid-level income for Computer Science is  $91,410  per year, according to payscale.com.";
        } else if ( exp >= 8 ){
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered experienced level. Experienced level income for Computer Science is  $119,958 per year, according to payscale.com.";
        }
    } else if (gender == "other" && field == "2" ) {
        find = find +" The current percentage of female Physics major is roughly around 20% according to www.aps.org. The current percentage of male Physics major is roughly around 80% according to www.aps.org. The percentage of female is roughly 17%. Considering your "+exp+" year(s) of experience you'd be considered entry level.";
        if(exp <= 3){
        find = find +"Considering your "+exp+" year(s) of experience you'd be considered entry-level. Entry-level income for Computer Science is $68,165 per year, according to payscale.com.";
            
        } else if (exp >=4 && exp <=7) {
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered mid-level. Mid-level income for Computer Science is  $91,410  per year, according to payscale.com.";
        } else if ( exp >= 8 ){
            find = find +"Considering your "+exp+" year(s) of experience you'd be considered experienced level. Experienced level income for Computer Science is  $119,958 per year, according to payscale.com.";
        }
    }
    
    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    document.querySelector("#result").innerHTML = find;
    
}