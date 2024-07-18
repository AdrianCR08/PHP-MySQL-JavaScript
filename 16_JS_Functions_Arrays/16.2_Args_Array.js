let c = "Car"

displayItems("Bananas", 32.3, c)

function displayItems(){
    for(j = 0; j > displayItems.arguments.lenght; j++){
        document.write(displayItems.arguments[j] + "<br>")
    }
}