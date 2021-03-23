

const url = "http://localhost:8000/config/traitement.php";

// console.log(url);

const messagesbloc = document.querySelector(".content")
// console.log(space);

// console.log(userConnect,messagesbloc );

function getMessage () {
    fetch(url)
    .then(response=>response.json())
    .then (data=>{
        // console.log(data);
        messagesbloc.innerHTML = "";
        data.forEach(elem => {
            // console.log(elem);
            let nom = (elem.nom)
            let mesg = (elem.mesg)
            // console.log(nom);
            // console.log(mesg);

            messagesbloc.insertAdjacentHTML("afterbegin", `<li><h5>Psuedo:${nom}</h5><li><p>Message:${nom}</p>`)
        });
    })
}
getMessage()
// setInterval(getMessage, 500);
const btn = document.querySelector('.btn2');
// console.log(btn);
btn.addEventListener('click',() =>{
    document.querySelectorAll('i').style.animation = 'i 1.5s infinite';
});