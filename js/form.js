const form = document.querySelector("form") 
const textInputs = Array.from(document.querySelectorAll(".contact-input"))
// const radioInputs = Array.from(document.querySelectorAll("input[type=radio]"))
// const checkInputs = Array.from(document.querySelectorAll("input[type=checkbox]"))

const showError = (element, msg) => {
    const parentElement = element.parentNode
    const errorElement = element.nextElementSibling || element.parentNode.nextElementSibling

    errorElement.innerHTML = msg

    if(!parentElement.classList.contains("error")) 
        parentElement.classList.add("error")

}

const removeError = (element) => {
    const parentElement = element.parentNode
    const errorElement = element.nextElementSibling || element.parentNode.nextElementSibling
    console.log(errorElement)

    errorElement.innerHTML = ""

    if(parentElement.classList.contains("error")) 
        parentElement.className = "form-group"

}

const checkEmpty = (element) => {
    const value = element.value.trim()

    if(!value) {
        showError(element, "Required")
        return false
    }
    else {
        removeError(element)
        return true
    }
}


const checkRequiredLength = (element) => {
    const length = element.dataset.length ? parseInt(element.dataset.length) : 2
    const value = element.value.trim() 

    if(value.length < length) {
        showError(element, `Requires minimum of ${length} ${length === 1 ? "character" : "characters"}`)
        return false
    }
    else {
        removeError(element)
        return true
    }

}


const checkIfChecked = (elements = []) => {
    elements.forEach(element => {
        if(element.type === "checkbox") {
            if(!element.checked) {
                showError(element, "You need to check this")
            }
            else {
                removeError(element)
            }
        }
    })
    return elements.some(element => element.checked === true)
}

const validateInputs = () => {
    let returnedValues = []

    textInputs.forEach(input => {
        returnedValues.push(checkEmpty(input))
        returnedValues.push(checkRequiredLength(input))
    })

    return returnedValues.every((item) => item == true)
}



form.addEventListener("submit", (e) => {
    e.preventDefault()
    validateInputs() && form.submit()
})

textInputs.forEach(input => {
    input.addEventListener("blur", (e) => checkRequiredLength(input))
})

