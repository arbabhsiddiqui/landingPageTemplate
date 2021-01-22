


// ------------------------------declare variables----------------------------------------------------------------------------------------

const submitBtn=document.getElementById('btn');
const addform=document.getElementById('form');
const select=document.getElementById('select');
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
submitBtn.addEventListener('click' ,(e)=>{
    inputfi.forEach(i =>{
        
        i.style.marginTop="-10px";
    });
    select.style.marginTop="-10px";
   fullName.style.marginTop="0px";
   
  

});




