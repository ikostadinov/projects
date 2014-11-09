using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.OleDb;
using System.Windows.Forms;

namespace Store
{
    class DB_Helper
    {
        private OleDbConnection connection;

        public DB_Helper()
        {
            string str = "provider=Microsoft.ACE.OLEDB.12.0;Data Source=ProductsDB.accdb";
            connection = new OleDbConnection(str);
        }

        public Product GetProduct(string nm)
        {
            int i = 0;
            while (i < ShowAllStudent().Count)
            {
                if (ShowAllStudent()[i].Name == nm)
                {
                    return ShowAllStudent()[i];
                }
                else
                {
                    i++;
                }
            }
            return null;
        }

        public List<Product> ShowAllStudent()
        {
            connection.Open();
            string sql = "SELECT * FROM ProductsTable";
            List<Product> temp = new List<Product>();
            try
            {
                OleDbCommand cmd = new OleDbCommand(sql, connection);

                OleDbDataReader reader = cmd.ExecuteReader();
                while (reader.Read())
                {
                    temp.Add(new Product((int)reader[0], (string)reader[1], (double)reader[2], (string)reader[3]));
                }

                reader.Close();
                return temp;
            }
            catch (Exception ex)
            {
                MessageBox.Show("error");
                return null;
            }
            finally
            { connection.Close(); }
        }

        public int InsertNewStudent(string name, double price, string cat)
        {
            connection.Open();

            string sql = "INSERT INTO ProductsTable(ProductName, ProductPrice, ProductCategory) VALUES ('" + name + "'," + price + ",'"+cat+"')";
            try
            {
                OleDbCommand cmd = new OleDbCommand(sql, connection);

                int i = cmd.ExecuteNonQuery();
                return i;
            }
            catch (Exception ex)
            {
                MessageBox.Show("error");
                return -1;
            }
            finally
            { connection.Close(); }
        }
    }
}
