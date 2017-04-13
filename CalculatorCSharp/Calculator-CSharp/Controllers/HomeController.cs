using Calculator_CSharp.Models;
using System;
using System.Web.Mvc;

namespace Calculator_CSharp.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index(Calculator calculator)
        {
            return View(calculator);
        }

        [HttpPost]
        public ActionResult Calculate(Calculator calculator)
        {
            calculator.result = CalculateResult(calculator);
            return RedirectToAction("Index", calculator);
        }
        public double CalculateResult(Calculator calculator)
        {
            double res = 0;

            switch (calculator.operand)
            {
                case "+":
                    res = calculator.leftOperand + calculator.rightOperand;
                    break;
                case "-":
                    res = calculator.leftOperand - calculator.rightOperand;
                    break;
                case "*":
                    res = calculator.leftOperand * calculator.rightOperand;
                    break;
                case "/":
                    res = calculator.leftOperand / calculator.rightOperand;
                    break;
                case "^":
                    res = Math.Pow(calculator.leftOperand, calculator.rightOperand);
                    break;
                case "||":
                    if ((calculator.leftOperand == 0 || calculator.leftOperand == 1) && (calculator.rightOperand == 0 || calculator.rightOperand == 1))
                    {
                        if (calculator.leftOperand == 0 && calculator.rightOperand == 0)
                        {
                            res = 0;
                        }
                        else
                            res = 1;
                    }
                    else
                        res = -1;//invalid input
                    break;
                case "&&":
                    if ((calculator.leftOperand == 0 || calculator.leftOperand == 1) && (calculator.rightOperand == 0 || calculator.rightOperand == 1))
                    {
                        if (calculator.leftOperand == 1 && calculator.rightOperand == 1)
                        {
                            res = 1;
                        }
                        else
                            res = 0;
                    }
                    else
                        res = -1;//invalid input
                    break;
            }

            return res;
        }
    }
}