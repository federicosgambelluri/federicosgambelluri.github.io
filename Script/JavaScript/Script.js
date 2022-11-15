function ilDisplay(num) {
    calcolatrice.visualizzatore.value += num;
}

var operando;
var Operaz;

function ricordaOP(Op) {
    operando = calcolatrice.visualizzatore.value;
    calcolatrice.visualizzatore.value = "";
    Operaz = Op;
}

function operazione() {
    switch (Operaz) {

        case '+':
            calcolatrice.visualizzatore.value = eval(operando) + eval(calcolatrice.visualizzatore.value);
            break;

        case '-':
            calcolatrice.visualizzatore.value = eval(operando) - eval(calcolatrice.visualizzatore.value);
            break;

        case '/':
            calcolatrice.visualizzatore.value = eval(operando) / eval(calcolatrice.visualizzatore.value);
            break;

        case '*':
            calcolatrice.visualizzatore.value = eval(operando) * eval(calcolatrice.visualizzatore.value);
            break;

            case '√':
            calcolatrice.visualizzatore.value = Math.sqrt(eval(operando));
            break;

            case 'x^2':
            calcolatrice.visualizzatore.value = Math.pow(eval(operando),2);
            break;

            case '1/X':
            calcolatrice.visualizzatore.value = eval(1) / eval(operando);
            break;

            case 'CE':
                default:
                    break;
    }
}