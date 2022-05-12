// Moderation Modal
const modal = document.querySelector('#moderation');
const modalBtn = document.querySelector('#open_commands');
const closeBtn = document.querySelector('.close');

// Events
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  modal.style.display = 'block';
}

// Close
function closeModal() {
  modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}




// fun Modal
const fun_modal = document.querySelector('#funmodal');
const fun_modalBtn = document.querySelector('#open_fun');
const fun_closeBtn = document.querySelector('.close_fun');

// Events
fun_modalBtn.addEventListener('click', openfunModal);
fun_closeBtn.addEventListener('click', closefunModal);

// Open
function openfunModal() {
    fun_modal.style.display = 'block';
}

// Close
function closefunModal() {
    fun_modal.style.display = 'none';
}







// user Modal
const user_modal = document.querySelector('#usermodal');
const user_modalBtn = document.querySelector('#open_user');
const user_closeBtn = document.querySelector('.close_user');

// Events
user_modalBtn.addEventListener('click', openuserModal);
user_closeBtn.addEventListener('click', closeuserModal);

// Open
function openuserModal() {
    user_modal.style.display = 'block';
}

// Close
function closeuserModal() {
    user_modal.style.display = 'none';
}

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)
