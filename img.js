function hewan(){
    let animal = document.getElementById("animal")
    let hwan = document.getElementById("hwan")

    if(animal.value == "zebra"){
        return hwan.src = "zoo/zebra.jpg"
    }else if(animal.value == "sapi"){
        return hwan.src = "zoo/sapi.jpg"
    }else if(animal.value == "macan"){
        return hwan.src = "zoo/macan.jpg"
    }else if(animal.value == "kuda"){
        return hwan.src = "zoo/kuda.jpg"
    }else if(animal.value == "kucing"){
        return hwan.src = "zoo/kucing.jpg"
    }else if(animal.value == "kelinci"){
        return hwan.src = "zoo/kelinci.jpg"
    }

}