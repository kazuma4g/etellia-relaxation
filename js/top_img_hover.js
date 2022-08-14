const circle_img_salon =  document.querySelector('.circle_img_salon_filter');
const circle_text_salon = document.querySelector('.circle_img_salon_text');

const circle_img_menu =  document.querySelector('.circle_img_menu_filter');
const circle_text_menu = document.querySelector('.circle_img_menu_text');

const circle_img_note =  document.querySelector('.circle_img_note_filter');
const circle_text_note = document.querySelector('.circle_img_note_text');

circle_img_salon.addEventListener('mouseover',() => {
    circle_text_salon.style.color = '#AD0000'
})

circle_img_salon.addEventListener('mouseout',() => {
    circle_text_salon.style.color = '#ffffff'
})

circle_img_menu.addEventListener('mouseover',() => {
    circle_text_menu.style.color = '#AD0000'
})

circle_img_menu.addEventListener('mouseout',() => {
    circle_text_menu.style.color = '#ffffff'
})

circle_img_note.addEventListener('mouseover',() => {
    circle_text_note.style.color = '#AD0000'
})

circle_img_note.addEventListener('mouseout',() => {
    circle_text_note.style.color = '#ffffff'
})