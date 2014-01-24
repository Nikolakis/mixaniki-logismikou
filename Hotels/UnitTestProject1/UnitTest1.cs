﻿using Hotels;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using System;


namespace UnitTestHotels
{
    [TestClass]
    public class UnitTest1
    {
        [TestMethod]
        public void TestMeres()
        {
            Form1 test = new Form1 { };
            Assert.AreEqual(true, test.meres(20, 30));
        }

        [TestMethod]
        public void TestMeresTrue()
        {
            Form1 test = new Form1 { };
            Assert.AreEqual(false, test.meres(30, 20));
        }

        [TestMethod]
        public void TestTwra()
        {
            Form1 test = new Form1 { };
            Assert.AreEqual(false, test.twra(15, 20));
        }

        [TestMethod]
        public void TestTwraTrue()
        {
            Form1 test = new Form1 { };
            Assert.AreEqual(true, test.twra(25, 30));
        }
        
    }
}