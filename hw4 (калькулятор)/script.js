const input = document.querySelector('.input');
const expression = document.querySelector('.expression');
let inputValue = '';

const numberButtons = document.querySelectorAll('.number');
const operatorButtons = document.querySelectorAll('.operator');
const equalButton = document.querySelector('.equal');
const dotButton = document.querySelector('.dot');

const braceButtons = document.querySelectorAll('.brace');
const eraseButton = document.querySelector('.erase');
const deleteButton = document.querySelector('.delete');

const calcForm = document.querySelector('.calcForm');


function updateInput(button) {
    inputValue += button.textContent;
    input.textContent = inputValue;
    expression.value = inputValue;
}

numberButtons.forEach(button => {
    button.addEventListener('click', () => updateInput(button));
});

operatorButtons.forEach(button => {
    button.addEventListener('click', () => updateInput(button));
});

braceButtons.forEach(button => {
    button.addEventListener('click', () => updateInput(button));
});

dotButton.addEventListener('click', () => {
    if (inputValue) {
        inputValue += '.';
        input.textContent = inputValue;
    }
    else {
        inputValue = '0.';
        input.textContent = '0.';
    } 
});

eraseButton.addEventListener('click', () => {
    inputValue = '';
    input.textContent = 0;
});

deleteButton.addEventListener('click', () => {
    inputValue = inputValue.slice(0, -1);
    if (inputValue) {
        input.textContent = inputValue;
    }
    else {
        input.textContent = 0;
    }
});

equalButton.addEventListener('click', () => {
    const finalExpression = expression.value;

    fetch('calculate.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'expression=' + encodeURIComponent(finalExpression),
    })
    .then(response => response.text())
    .then(result => {
        inputValue = result;
        input.textContent = inputValue;
        expression.value = inputValue;
    })
    .catch(error => {
        console.log(error);
        inputValue = 'An error has accured';
        input.textContent = inputValue;
        expression.value = inputValue;
    })
});