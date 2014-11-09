using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculator
{
    public partial class Calculator : Form
    {
        public Calculator()
        {
            InitializeComponent();
        }

        
        //Declare variables
        double total1 = 0;
        double total2 = 0;
        string theOperator;
        

        //Number Buttons
        private void button1_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text+button1.Text;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button2.Text;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button3.Text;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button4.Text;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button5.Text;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button6.Text;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button7.Text;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button8.Text;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button9.Text;
        }

        private void button0_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text + button0.Text;
        }

        //Button Clear
        private void buttonClear_Click(object sender, EventArgs e)
        {
            txtDisplay.Clear();
        }

        
        

        //Button Plus
        private void buttonPlus_Click(object sender, EventArgs e)
        {
            total1 += double.Parse(txtDisplay.Text);
            txtDisplay.Clear();


            theOperator = "+";

           
        }

        
        //Button Point
        private void buttonPoint_Click(object sender, EventArgs e)
        {
            txtDisplay.Text = txtDisplay.Text +buttonPoint.Text;
        }


        
        //Button Minus
        private void button10_Click(object sender, EventArgs e)
        {
            total1 = total1 + double.Parse(txtDisplay.Text);
            txtDisplay.Clear();

            theOperator = "-";

           
        }

        //Button Multiply
        private void buttonMultiply_Click(object sender, EventArgs e)
        {
            total1 = total1 + double.Parse(txtDisplay.Text);
            txtDisplay.Clear();

            theOperator = "*";
            

        }

        //Button Divide
        private void buttonDivide_Click(object sender, EventArgs e)
        {
            total1 = total1 + double.Parse(txtDisplay.Text);
            txtDisplay.Clear();

            theOperator = "/";
           
        }


        //Button Equals
        private void buttonEquals_Click(object sender, EventArgs e)
        {
            double num2;

            num2 = double.Parse(txtDisplay.Text);

            switch (theOperator)
            {
                case "+":
                   total2 = total1 + num2;
                   break;

                case "-":
                   total2 = total1 - num2;
                   break;

                case "*":
                   total2 = total1 * num2;
                   break;

                case "/":
                   total2 = total1 / num2;
                   break;


                default:
                    break;
            }

                    txtDisplay.Text = total2.ToString();
                    total1 = 0;

        }
      
    }
}
