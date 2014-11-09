using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Store
{
    public partial class Form1 : Form
    {

        private Store FastFood;
        double totalPrice = 0;

        DB_Helper dbh;
        public Form1()
        {
            InitializeComponent();

            dbh = new DB_Helper();

            FastFood = new Store("FastFood");
            this.Text = FastFood.Name;

            //TestData();
        }

     /*  public void TestData()
        {
            FastFood.AddProduct(34,"Pizzaa Pepperoni", 4.50);
            FastFood.AddProduct(45,"Brodje kip doner", 3.50);
        }*/

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            TreeNode pizza = treeView1.Nodes.Add("pizza");
            TreeNode burger = treeView1.Nodes.Add("burger");
            TreeNode drink = treeView1.Nodes.Add("drink");

            foreach (Product pro in dbh.ShowAllStudent())
            {
                if (pro.Category == "pizza")
                {
                    pizza.Nodes.Add(pro.Name);
                }
                else if (pro.Category == "burger")
                {
                    burger.Nodes.Add(pro.Name);
                }
                else if (pro.Category == "drink")
                {
                    drink.Nodes.Add(pro.Name);
                }
            }

        }

        private void button4_Click(object sender, EventArgs e)
        {
            Product pr = dbh.GetProduct((treeView1.SelectedNode.Text).ToString());
            listBox1.Items.Add(pr.AsString());
            totalPrice += pr.Price;
            label2.Text = "Total price: " + totalPrice;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string name = textBox1.Text;
            double price = Convert.ToDouble(textBox2.Text);
            string cat = comboBox1.SelectedItem.ToString();
            int i = dbh.InsertNewStudent(name,price,cat);
            //listBox1.Items.Add("number of records changed: " + i);
        }

        private void button5_Click(object sender, EventArgs e)
        {
            /*TreeNode category;
            foreach (Product pr in dbh.ShowAllStudent())
            {
                category = treeView1.Nodes.Add(pr.Category);
                foreach (Product pro in dbh.ShowAllStudent())
                {
                    if (pro.Category == pr.Category)
                    {
                        category.Nodes.Add(pro.Name);
                    }                   
                }
            }*/

            TreeNode pizza = treeView1.Nodes.Add("pizza");
            TreeNode burger = treeView1.Nodes.Add("burger");
            TreeNode drink = treeView1.Nodes.Add("drink");

            foreach (Product pro in dbh.ShowAllStudent())
            {
                if (pro.Category == "pizza")
                {
                    pizza.Nodes.Add(pro.Name);
                }
                else if (pro.Category == "burger") 
                {
                    burger.Nodes.Add(pro.Name);
                }
                else if(pro.Category=="drink")
                {
                    drink.Nodes.Add(pro.Name);
                }
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            listBox1.Items.Clear();
            label2.Text = "Total price";
        }
    }
}
