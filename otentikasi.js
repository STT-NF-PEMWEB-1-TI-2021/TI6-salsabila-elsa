function desay(){ 
    let elsa = document.getElementById("elsa").value
    let rahmadina = document.getElementById("rahmadina").value

    if(elsa == "syahrehel" && rahmadina == "elsabila"){
        location.href= "success.html";
    }else
        alert("gagal log in")
}