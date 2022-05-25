function rememberMe(){
    var email = document.forms["loginForm"]["idremember"].value;
    var pass = document.forms["loginForm"]["idpass"].value;
    var rememberme = document.forms["loginForm"]["idrememberme"].checked;
    console.log("Form data:" + rememberme + "," + email + ","+ pass);
    if(!rememberme){
        setCookies("cemail","",0);
        setCookies("cpass","",0);
        setCookies("crem",false,0);
        document.forms["loginForm"]["idemail"].value="";
        document.forms["loginForm"]["idpass"].value="";
        document.forms["loginForm"]["idremember"].checked=false;
        alert("Credentials removed");
}
}
