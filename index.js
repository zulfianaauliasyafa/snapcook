// import Swal from 'sweetalert2'
import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@8/src/sweetalert2.js'



const submitClick = () => {
    const tombol = document.getElementById('buttonSubmit')
    
    
    tombol.addEventListener("click", tombolClick)
    
    

    function tombolClick(){
        passCheck()
        emailCheck()
        console.log('test1')

        
    }
    const passCheck = () => {
        const password = document.getElementById('password').value;
    
            if (password === '') {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "password Tidak Boleh kosong",
                    footer: '<a href="#">Why do I have this issue?</a>'
                  });
                return false;
            }
    
            return true;
            
    
    }

    const emailCheck = () => {
        const username = document.getElementById('email').value;
    
            if (username === '') {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Email Tidak Boleh kosong",
                    footer: '<a href="#">Why do I have this issue?</a>'
                  });
                return false;
            }
           
    
            return true;
            
    }
    
    
}

submitClick()
console.log('test')








// const submitClick = () => {
//     const tombol = document.getElementById('buttonSubmit')
//     var toastLivePassword = document.getElementById('liveToastPassword')
//     var toastLiveEmail = document.getElementById('liveToastEmail')

    
//     tombol.addEventListener("click", tombolClick)
    
    

//     function tombolClick(){
//         passCheck()
//         emailCheck()
//         console.log('test1')

        
//     }
//     const passCheck = () => {
//         const password = document.getElementById('password').value;
    
//             if (password === '') {
//                 tombol.addEventListener('click', function () {
//                     var toastPassword = new bootstrap.Toast(toastLivePassword)
                
//                     toastPassword.show()
//                   })

//                   console.log('nice')
//                 return false;
//             }
    
//             return true;
            
    
//     }

//     const emailCheck = () => {
//         const username = document.getElementById('email').value;
    
//             if (username === '') {
//                 tombol.addEventListener('click', function () {
//                     var toast = new bootstrap.Toast(toastLiveEmail)
                
//                     toast.show()
//                   })

//                   console.log('nice')
//                 return false;
//             }
    
//             return true;
            
//     }
    
    
// }

// submitClick()
// console.log('test')