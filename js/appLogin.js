

const redistrarUsuario=()=>{
    var nombresUsu=document.querySelector('#nombresUsu').value;
    var apePaternoUsu=document.querySelector('#apePaternoUsu').value;
    var apeMaternoAlum=document.querySelector('#apeMaternoAlum').value;

    if(nombresUsu.trim()===''||
    apePaternoUsu.trim()===''||
    apeMaternoAlum.trim()===''){
        Swal.fire({
            icon: 'error',
            title: 'ERROR',
            text: 'Falta Llenar!',
            footer: '<a href="">Why do I have this issue?</a>'
          })

    }
}