using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Calculator_CSharp.Models
{
    public class Calculator
    {
        public double leftOperand { get; set; }
        public double rightOperand { get; set; }
        public string operand { get; set; }
        public double result { get; set; }
        public Calculator()
        {
            this.result = 0;
        }

       
    }
}