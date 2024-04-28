const SignIn = document.querySelector('.SignIn')
const PetsImg= document.querySelectorAll('.PetsImg');
const MidCenter = document.querySelector('.MidCenter')
const Btns = MidCenter.querySelectorAll('button')
SignIn.addEventListener("click", (e) => {
    e.preventDefault()
    document.querySelector('.login-container').style.display = 'block';
    // document.querySelector('.login-container').style.filter = 'blur(0)';
})

document.querySelector('.LoginDisplayOff').addEventListener('click', () => {
    document.querySelector('.login-container').style.display = 'none';
})
document.querySelector('.PetFormDisplayOff').addEventListener('click', () => {
    document.querySelector('.pet-form').style.display = 'none';
})

for(let i of Btns){
    i.addEventListener('click', () => {
        document.querySelector('.pet-form').style.display = 'flex';
    })
}

for(let i of PetsImg){
    i.addEventListener('click', () => {
        document.querySelector('.pet-form').style.display = 'flex';
        console.log(i.getAttribute('id'))
        document.querySelector('.NameOfPet').value = i.getAttribute('id')
    })
}
// alert()