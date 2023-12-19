const button = document.getElementById('button');
const ajouter = document.getElementById('ajouter');
button.addEventListener('click', (e)=>{
    ajouter.classList.remove("scale-0");
    ajouter.classList.add("scale-90");

});
const hide =document.getElementById('hide')
hide.addEventListener('click',(e)=>{
    ajouter.classList.add("scale-0")
    ajouter.classList.remove("scale-90");

});