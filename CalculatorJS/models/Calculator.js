function Calculator(leftOperand, rightOperand, operator) {
    this.leftOperand = leftOperand;
    this.rightOperand = rightOperand;
    this.operator = operator;

    this.calculateResult = function () {
        let result = 0;

        switch (this.operator) {
            case '+':
                result = this.leftOperand + this.rightOperand;
                break;
            case '-':
                result = this.leftOperand - this.rightOperand;
                break;
            case '*':
                result = this.leftOperand * this.rightOperand;
                break;
            case '/':
                result = this.leftOperand / this.rightOperand;
                break;
            case "^":
                result = Math.pow(this.leftOperand, this.rightOperand);
                break;
            case "||":
                if ((this.leftOperand  == 0 || this.leftOperand  == 1) && (this.rightOperand == 0 || this.rightOperand == 1)) {
                    if (this.leftOperand  == 0 && this.rightOperand == 0) {
                        result = 0;
                    } else
                        result = 1;
                } else
                    result = "II";//invalid input
                break;
            case "&&":
                if ((this.leftOperand == 0 || this.leftOperand == 1) && (this.rightOperand == 0 || this.rightOperand == 1)) {
                    if (this.leftOperand == 1 && this.rightOperand == 1) {
                        result = 1;
                    } else
                        result = 0;
                } else
                    result = "II";//invalid input
                break;
        }

        return result;
    }
}

module.exports = Calculator;
