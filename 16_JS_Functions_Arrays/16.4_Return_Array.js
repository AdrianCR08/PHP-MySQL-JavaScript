words = fixNames("the", "DALLAS", "CowBoys");

for (j = 0; j < words.length; j++){
    document.write(words[j] + "<br>");
}function fixNames(){
    var s = new Array();

    for (j = 0; j < fixNames.arguments.length; j++){
        s[j] = fixNames.arguments[j].charAt(0).toUpperCase() +
            fixNames.arguments[j].substring(1).toLowerCase();;
    }

    return s;
}