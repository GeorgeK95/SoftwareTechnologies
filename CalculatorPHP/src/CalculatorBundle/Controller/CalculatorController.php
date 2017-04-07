<?php

namespace CalculatorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        $calc = new Calculator();

        $form = $this->createForm(CalculatorType::class, $calc);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $firstNum = $calc->getLeftOperand();
            $secondNum = $calc->getRightOperand();
            $operator = $calc->getOperator();
            $result = 0;

            switch ($operator) {
                case "+":
                    $result = $firstNum + $secondNum;
                    break;
                case "-":
                    $result = $firstNum - $secondNum;
                    break;
                case "*":
                    $result = $firstNum * $secondNum;
                    break;
                case "/":
                    $result = $firstNum / $secondNum;
                    break;
                case "^":
                    $result = pow($firstNum, $secondNum);
                    break;
                case "||":
                    if (($firstNum == 0 || $firstNum == 1) && ($secondNum == 0 || $secondNum == 1)) {
                        if ($firstNum == 0 && $secondNum == 0) {
                            $result = 0;
                        } else
                            $result = 1;
                    } else
                        $result = "II";//invalid input

                    break;
                case "&&":
                    if (($firstNum == 0 || $firstNum == 1) && ($secondNum == 0 || $secondNum == 1)) {
                        if ($firstNum == 1 && $secondNum == 1) {
                            $result = 1;
                        } else
                            $result = 0;
                    } else
                        $result = "II";//invalid input

                    break;
            }

            return $this->render('calculator/index.html.twig', ['result' => $result, 'calculator' => $calc, 'form' => $form->createView()]);
        }

        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);
    }
}
