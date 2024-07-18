haystack = new Array();
haystack[4] = "Needle";
haystack[11] = "Needle";
haystack[17] = "Needle";

for(j = 0; j < 20; j++){
    if(haystack[j] == "Needle"){
        document.write("<br> - found at location " + j + "<br>");
        continue;
    }
    else{
        document.write(j + ", ")
    }
}