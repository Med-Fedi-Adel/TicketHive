
document.querySelector(".dropdown-menu").addEventListener('click',(event)=>{
    const newGenre = event.target.textContent;
    document.querySelector(".btn").textContent = newGenre
})

const inputF =document.querySelector("#inputField");
inputF.addEventListener('keyup',e => {
    e.preventDefault();
    if (e.keyCode == 13){
        console.log(inputF.value);
        window.location.href = "http://localhost:8000/event/Search/Keywords/"+inputF.value;
    }
})