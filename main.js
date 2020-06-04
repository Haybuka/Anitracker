const input = document.querySelector('input')
const form = document.querySelector('form')
const button = document.querySelector('form button')
console.log(input.value)
console.log(button.type)
form.addEventListener('submit', (e) => {
    e.preventDefault()
    console.log(e)
})