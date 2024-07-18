try {
    request = new XMLHttpRequest();
} catch (error) {
    // Use a different method to create an XMLHTTPRequest object
} finally {
    alert("The 'try' clause was encountered");
}