

const inputField = document.querySelectorAll(".numberInput");
// console.log(inputField)

inputField.forEach( e => e.addEventListener("input", function() {

    if (/^\d*$/.test(this.value)) {
        this.classList.remove("invalid");
    } else {
        this.classList.add("invalid");
    }
})
)
