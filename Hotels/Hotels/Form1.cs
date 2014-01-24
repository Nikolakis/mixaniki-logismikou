﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.OleDb;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;
using MySql.Data;
using MySql.Data.MySqlClient;


namespace Hotels
{
    public partial class Form1 : Form
    {
        string dateFrom, dateTo;
        int day1, day2, error;
        //DateTime dateFrom, dateTo;

        //private MySqlConnection myCon;
        //string server = "mysql9.000webhost.com";
        //string database = "a8643869_testing";
        //string uid = "a8643869_testUsr";
        //string password = "testing1234";
        //string connectionString;

        public Form1()
        {
            InitializeComponent();
           
        }

        private void Form1_Load(object sender, EventArgs e)
        {
               
            //try
            //{
            //    connectionString = "SERVER=" + server + ";" + "DATABASE=" + database + ";" + "UID=" + uid + ";" + "PASSWORD=" + password + ";";
            //    myCon = new MySqlConnection(connectionString);
            //    myCon.Open();
            //    MySqlDataAdapter da = new MySqlDataAdapter("select * from Diklina", myCon);
            //    DataSet DS = new DataSet();
            //    da.Fill(DS);
            //    dataGridView1.DataSource = DS;
            //}

            //catch (Exception ex)
            //{
            //    MessageBox.Show(ex.ToString());
            //}

        }

        private void runButton_Click(object sender, EventArgs e)
        {
            //ifs 
            if (meres(day1, day2) && twra(day1, day2))
            {
                if (comboBox1.Text == "All Rooms")
                {      
                    //    MySqlDataAdapter da = new MySqlDataAdapter("select * from Diklina", myCon);
                    //    DataSet DS = new DataSet();
                    //    da.Fill(DS);
                    //    dataGridView1.DataSource = DS;
                }
                else if (comboBox1.Text == "Rent Rooms")
                { 
                
                }
                else if (comboBox1.Text == "Free Rooms")
                { 
                
                }
            }
            else if (error == 1)
            {
                errorLabel.Text = "Η ημερομηνία `Μέχρι` δεν μπορεί να" + System.Environment.NewLine + "είναι μετά την ημερομηνία `Από`";
            }
            else if (error == 2)
            {
                errorLabel.Text = "Οι ημερομηνίες δεν μπορούν να" + System.Environment.NewLine + "είναι πριν την σημερινή ημερομηνία";
            }
        }

        private void monthCalendar1_DateChanged(object sender, DateRangeEventArgs e)
        {
            dateFrom = monthCalendar1.SelectionRange.Start.Date.ToString();
            day1 = Convert.ToInt32(monthCalendar1.SelectionRange.Start.Day);
        }

        private void monthCalendar2_DateChanged(object sender, DateRangeEventArgs e)
        {
            dateTo = monthCalendar2.SelectionRange.Start.Date.ToString();
            day2 = Convert.ToInt32(monthCalendar2.SelectionRange.Start.Day);
        }

        private void exitToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Environment.Exit(0);
        }

        private void helpToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Διαλέγεις ημερομηνία για τις μέρες που θέλεις να ελέγξεις. Επιλέγεις από κάτω τι δωμάτια θέλεις και στον πίνακα θα εμφανιστούν τα αποτελέσματα.");
        }


        public Boolean meres(int from, int to)
        {
            Boolean m = true;
            //if (month1 < month2)
            if ((to - from) < 0)
            {
                m = false;
                error = 1;
            }
            return m;
        }

        public Boolean twra(int from, int to)
        {
            Boolean t = true;
            //if (month1 < month2)
            if (from < Convert.ToInt32(DateTime.Now.Day) || (to < Convert.ToInt32(DateTime.Now.Day)))
            {
                t = false;
                error = 2;
            }
            return t;
        }

      
    }
}