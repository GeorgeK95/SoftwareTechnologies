package com.softuni.controller;

import com.softuni.models.Calculator;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class HomeController {
    @GetMapping("/")
    public String index(Model model) {
        model.addAttribute("operator", "+");
        model.addAttribute("view", "views/calculatorForm");
        return "base-layout";
    }

    @PostMapping("/")
    public String calculate(@RequestParam String leftOperand, @RequestParam String rightOperand, @RequestParam String operator, Model model) {
        double fNum;
        double sNum;

        try {
            fNum = Integer.parseInt(leftOperand);
        } catch (NumberFormatException e) {
            fNum = 0;
        }
        try {
            sNum = Integer.parseInt(rightOperand);
        } catch (NumberFormatException e) {
            sNum = 0;
        }

        Calculator calc = new Calculator(fNum, sNum, operator);
        double res = calc.calculate();

        model.addAttribute("leftOperand", calc.getLeftOperand());
        model.addAttribute("operator", calc.getOperator());
        model.addAttribute("rightOperand", calc.getRightOperand());

        model.addAttribute("result", res);

        model.addAttribute("view", "views/CalculatorForm");
        return "base-layout";
    }
}

