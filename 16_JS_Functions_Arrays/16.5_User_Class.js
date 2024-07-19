function User(forename, username, password){
    this.forename = forename;
    this.username = username;
    this.password = password;

    this.showUser = function(){
        document.write("Forename: " + this.forename);
        document.write("Username: " + this.username);
        document.write("Passowrd: " + this.password);
    }
}