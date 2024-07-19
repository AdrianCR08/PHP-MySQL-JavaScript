function fixNames() {
    var s = "";
    for (var j = 0; j < arguments.length; j++) {
        s += arguments[j].charAt(0).toUpperCase() +
            arguments[j].substring(1).toLowerCase() + " ";
    }
    return s.trim(); // Trim removes any extra whitespace from the beginning and end
}

document.write(fixNames("the", "DALLAS", "CowBoys"));