const CalculatorController = require('../models/Calculator');

module.exports = {
    indexGet: (req, res) => {
        res.render('home/index');
    },
    indexPost: (req, res) => {
        let calcBody = req.body;
        let calcParams = calcBody['calculator'];

        let calc = new CalculatorController();
        calc.leftOperand = Number(calcParams.leftOperand);
        calc.rightOperand = Number(calcParams.rightOperand);
        calc.operator = calcParams.operator;

        let result = calc.calculateResult();
        res.render('home/index', {'calculator': calc, 'result': result});
    }
};