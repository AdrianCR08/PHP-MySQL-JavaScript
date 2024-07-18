haystack = new Array();
haystack[17] = "Needle";

for(j = 0; j < 20; j++){
    if(haystack[j] == "Needle"){
        document.write("<br> - found at location " + j);
        break;
    }
    else{
        document.write(j + ", ")
    }
}