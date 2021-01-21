const btn=document.getElementById('btn');
const addform=document.getElementById('form');

const heading=document.getElementById('heading');
const phone=document.querySelector('.phone');
const email=document.querySelector('.email');
const city=document.querySelector('.city');
const select=document.getElementById('select');
const disclaimer=document.getElementById('disclaimer');
const footer=document.getElementById('footer');

addform.addEventListener('submit',(e)=>{
    e.preventDefault();
    const formData= new FormData(addform);
    formData.append("add" ,1);

    if(addform.checkValidity()===false){
        e.preventDefault();
        e.stopPropagation();
        addform.classList.add("was-validated");
        return false;
    }

}
);


btn.addEventListener('click' ,(e)=>{




phone.style.marginTop="-15px";
email.style.marginTop="-15px";
city.style.marginTop="-15px";
select.style.marginTop="-15px"
footer.style.paddingBottom="0px";


})




