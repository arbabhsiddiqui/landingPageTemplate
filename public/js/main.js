


// ------------------------------declare variables----------------------------------------------------------------------------------------

const submitBtn=document.getElementById('btn');
const addform=document.getElementById('form');
const select=document.getElementById('select');
const city=document.getElementById('city');
const phone=document.getElementById('phone');
const email=document.getElementById('email');
const inputfi=document.querySelectorAll('.form-control');
const form=document.querySelector('.form');
const fullName=document.getElementById('name');
const footer=document.querySelector('.footer');
//--------------------------------------check form validity---------------------------------------------------------------------------------
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

//-----------------------------------------------submit button styling---------------------------------------------------------------------------
submitBtn.addEventListener('click' ,change);
    
   function change(e)
   {
       
    select.style.marginTop="-15px";
    city.style.marginTop="-15px";
    phone.style.marginTop="-15px";
    email.style.marginTop="-15px";
    addform.style.paddingTop="0px";
    addform.style.marginTop="-25px";
 
   
  

}




