using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Store
{
    public class Store
    {
        private string name;
        private List<Product> productsList;
        private DB_Helper dbh;

        public string Name { get {return name;}}

        public Store(string nm)
        {
            this.name = nm;
            this.productsList = new List<Product>();
        }


        public List<Product> GetAllProducts()
        {
            return productsList;
        }

        public Product GetProduct(string nm)
        {
            int i = 0;
            while (i<productsList.Count)
            {
                if (productsList[i].Name == nm)
                {
                    return productsList[i];
                }
                else
                {
                    i++;
                }
            }
            return null;
        }

        public bool AddProduct(int id, string nm, double pr, string category)
        {
            if (GetProduct(nm) == null)
            {
                this.productsList.Add(new Product(id, nm, pr, category));
                return true;
            }
            else return false;
        }




    }
}
