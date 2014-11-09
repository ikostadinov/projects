using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Store
{
    public class Product
    {
        private int id;
        private string name;
        private double price;
        private string category;

        public int ID { get { return id; } set { id = value; } }
        public string Name { get { return name; } set { name = value; } }
        public double Price { get { return price; } set { price = value; } }
        public string Category { get { return category; } set {category = value;} }

        public Product(int id, string nm, double pr, string category)
        {
            this.id = id;
            this.name = nm;
            this.price = pr;
            this.category = category;
        }

        public string AsString()
        {
            string s = this.name + ", price: " + this.price;
            return s;
        }

    }
}
