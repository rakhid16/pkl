# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'PKL.UI'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!

import sqlite3
from PyQt5 import QtCore, QtGui, QtWidgets
from tkinter import messagebox
from xlsxwriter.workbook import Workbook

class Ui_MainWindow(object):

    def messagebox(self, title, message):
        mess=QtWidgets.QMessageBox()
        mess.setWindowTitle(title)
        mess.setText(message)
        mess.setStandardButtons(QtWidgets.QMessageBox.Ok)
        mess.exec_()

    def loadData(self):
        conn = sqlite3.connect('D:/4.PKL/Data PKL/Repository Github PKL/coba.sqlite')
        c = conn.cursor()
       
        query = "SELECT * FROM data_poli_kosong"
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))
        
        for row in c.execute("SELECT tanggal,id,nama,tanggal_lahir,usia,golongan,diagnosa,perawatan,pengobatan from data_poli"):
            print("id = ", row[0])
            print("nama = ", row[1])
            print("tanggal_lahir = ", row[2])
            print("tanggal_lahir = ", row[3])
            print("tanggal_lahir = ", row[4])
            print("tanggal_lahir = ", row[5])
            print("tanggal_lahir = ", row[6])
            print("tanggal_lahir = ", row[7])
            print("tanggal_lahir = ", row[8])

        self.messagebox("Pesan","Data Baru siap digunakan!")
        conn.close()

    def setupUi(self, MainWindow):
        conn = sqlite3.connect('D:/4.PKL/Data PKL/Repository Github PKL/coba.sqlite')
        c = conn.cursor()
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(1339, 760)
        MainWindow.setLayoutDirection(QtCore.Qt.LeftToRight)
        MainWindow.setAutoFillBackground(False)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.label = QtWidgets.QLabel(self.centralwidget)
        self.label.setGeometry(QtCore.QRect(50, 20, 601, 61))
        font = QtGui.QFont()
        font.setFamily("Gabriola")
        font.setPointSize(36)
        self.label.setFont(font)
        self.label.setObjectName("label")
        self.tableWidget = QtWidgets.QTableWidget(self.centralwidget)
        self.tableWidget.setGeometry(QtCore.QRect(50, 110, 1240, 500))
        self.tableWidget.setSizeAdjustPolicy(QtWidgets.QAbstractScrollArea.AdjustToContents)
        self.tableWidget.setRowCount(10000)
        self.tableWidget.setColumnCount(9)
        self.tableWidget.setObjectName("tableWidget")
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(0, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(1, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(2, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(3, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(4, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(5, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(6, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(7, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(8, item)
        item = QtWidgets.QTableWidgetItem()
        item.setTextAlignment(QtCore.Qt.AlignCenter)
        self.tableWidget.setItem(0, 0, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setItem(0, 1, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setItem(0, 2, item)
        self.tableWidget.horizontalHeader().setMinimumSectionSize(0)
        self.tableWidget.setColumnWidth(0,80)
        self.tableWidget.setColumnWidth(1,150)
        self.tableWidget.setColumnWidth(2,250)
        self.tableWidget.setColumnWidth(3,80)
        self.tableWidget.setColumnWidth(4,50)
        self.tableWidget.setColumnWidth(5,80)
        self.tableWidget.setColumnWidth(6,250)
        self.tableWidget.setColumnWidth(7,250)
        self.tableWidget.setColumnWidth(8,250)
        self.btn_load = QtWidgets.QPushButton(self.centralwidget)
        self.btn_load.setGeometry(QtCore.QRect(70, 627, 101, 31))
        self.btn_load.setObjectName("btn_load")
        self.btn_load.clicked.connect(self.loadData)

        self.btn_search = QtWidgets.QPushButton(self.centralwidget)
        self.btn_search.setGeometry(QtCore.QRect(1050, 59, 91, 31))
        self.btn_search.setObjectName("btn_search")
        self.btn_ekspor = QtWidgets.QPushButton(self.centralwidget)
        self.btn_ekspor.setGeometry(QtCore.QRect(190, 627, 91, 31))
        self.btn_ekspor.setObjectName("btn_ekspor")
        self.btn_save = QtWidgets.QPushButton(self.centralwidget)
        self.btn_save.setGeometry(QtCore.QRect(1140, 627, 121, 31))
        self.btn_save.setObjectName("btn_save")
        self.lineEdit = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit.setGeometry(QtCore.QRect(1140, 60, 120, 29))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.lineEdit.setFont(font)
        self.lineEdit.setText("")
        self.lineEdit.setObjectName("lineEdit")
        MainWindow.setCentralWidget(self.centralwidget)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

        query = "SELECT * FROM data_poli"
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))
        
        conn.close()

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "MainWindow"))
        self.label.setText(_translate("MainWindow", "Rekap Kunjungan Pasien Poliklinik Gigi"))
        item = self.tableWidget.horizontalHeaderItem(0)
        item.setText(_translate("MainWindow", "Tanggal"))
        item = self.tableWidget.horizontalHeaderItem(1)
        item.setText(_translate("MainWindow", "NPM / NRP"))
        item = self.tableWidget.horizontalHeaderItem(2)
        item.setText(_translate("MainWindow", "Nama"))
        item = self.tableWidget.horizontalHeaderItem(3)
        item.setText(_translate("MainWindow", "Tanggal Lahir"))
        item = self.tableWidget.horizontalHeaderItem(4)
        item.setText(_translate("MainWindow", "Usia"))
        item = self.tableWidget.horizontalHeaderItem(5)
        item.setText(_translate("MainWindow", "Golongan"))
        item = self.tableWidget.horizontalHeaderItem(6)
        item.setText(_translate("MainWindow", "Diagnosa"))
        item = self.tableWidget.horizontalHeaderItem(7)
        item.setText(_translate("MainWindow", "Perawatan Gigi"))
        item = self.tableWidget.horizontalHeaderItem(8)
        item.setText(_translate("MainWindow", "Pengobatan"))
        __sortingEnabled = self.tableWidget.isSortingEnabled()
        self.tableWidget.setSortingEnabled(False)
        self.tableWidget.setSortingEnabled(__sortingEnabled)
        self.btn_load.setText(_translate("MainWindow", "Buat Data Baru"))
        self.btn_search.setText(_translate("MainWindow", "Cari Nama"))
        self.btn_ekspor.setText(_translate("MainWindow", "Ekspor Data"))
        self.btn_save.setText(_translate("MainWindow", "Simpan Perubahan"))


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())
