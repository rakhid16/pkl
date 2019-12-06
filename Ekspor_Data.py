# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'coba_rentang_dude.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!


import sqlite3
import pandas as pd
from datetime import date
from tkinter import messagebox
from xlsxwriter.workbook import Workbook
from PyQt5 import QtCore, QtGui, QtWidgets


class Ui_MainWindow_export(object):
    def exportData_rentang(self):
        
        
        conn=sqlite3.connect('database/pangkalan_data.db')
        c=conn.cursor()
        tes_query=("SELECT Tanggal, `NPM/NRP`, Nama, Tanggal_Lahir, Golongan, Diagnosa, Perawatan_Gigi, Pengobatan FROM pengunjung WHERE Tanggal BETWEEN '{0}' AND '{1}'").format(self.dateEdit_2.text(),
                                            self.dateEdit_3.text())
        query=c.execute(tes_query)
        
        workbook = Workbook("Data Ekspor Tanggal " + str(self.dateEdit_2.text()) + " sampai " +  str(self.dateEdit_3.text()) + ".xlsx")
        worksheet = workbook.add_worksheet()

        worksheet.write('A1', 'Tanggal')
        worksheet.set_column('A:A', 13)
        worksheet.write('B1', 'NPM/NRP')
        worksheet.set_column('B:B', 21)  
        worksheet.write('C1', 'Nama')
        worksheet.set_column('C:C', 31)
        worksheet.write('D1', 'Tanngal Lahir') 
        worksheet.set_column('D:D', 14)  
        worksheet.write('E1', 'Golongan')
        worksheet.set_column('E:E', 15)  
        worksheet.write('F1', 'Diagnosa')
        worksheet.set_column('F:F', 25)  
        worksheet.write('G1', 'Perawatan Gigi')
        worksheet.set_column('G:G', 25)  
        worksheet.write('H1', 'Pengobatan Gigi')
        worksheet.set_column('H:H', 25)  

        for i, row in enumerate(query):
            for j, value in enumerate(row):
                worksheet.write(i+1, j, value)    
        workbook.close()

        self.messagebox("Pesan","Data Telah Diekspor!")

    def messagebox(self, title, message):
        mess=QtWidgets.QMessageBox()
        mess.setWindowTitle(title)
        mess.setText(message)
        mess.setStandardButtons(QtWidgets.QMessageBox.Ok)
        mess.exec_()

    def setupUi_export(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(800, 530)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.frame = QtWidgets.QFrame(self.centralwidget)
        self.frame.setGeometry(QtCore.QRect(9, 9, 782, 491))
        self.frame.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame.setObjectName("frame")
        self.frame_4 = QtWidgets.QFrame(self.frame)
        self.frame_4.setGeometry(QtCore.QRect(10, 21, 759, 331))
        self.frame_4.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_4.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_4.setObjectName("frame_4")
        self.gridLayout_4 = QtWidgets.QGridLayout(self.frame_4)
        self.gridLayout_4.setObjectName("gridLayout_4")
        self.tableWidget = QtWidgets.QTableWidget(self.frame_4)
        self.tableWidget.setEditTriggers(QtWidgets.QAbstractItemView.NoEditTriggers)
        self.tableWidget.setObjectName("tableWidget")
        self.tableWidget.setColumnCount(8)
        self.tableWidget.setRowCount(2)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(0, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(1, item)
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
        self.gridLayout_4.addWidget(self.tableWidget, 0, 0, 1, 1)
        self.frame_3 = QtWidgets.QFrame(self.frame)
        self.frame_3.setGeometry(QtCore.QRect(10, 380, 762, 121))
        self.frame_3.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_3.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_3.setObjectName("frame_3")
        self.label_2 = QtWidgets.QLabel(self.frame_3)
        self.label_2.setGeometry(QtCore.QRect(360, 10, 61, 16))
        self.label_2.setObjectName("label_2")
        self.label_6 = QtWidgets.QLabel(self.frame_3)
        self.label_6.setGeometry(QtCore.QRect(515, 10, 81, 16))
        self.label_6.setObjectName("label_6")
        self.layoutWidget = QtWidgets.QWidget(self.frame_3)
        self.layoutWidget.setGeometry(QtCore.QRect(0, 0, 7, 15))
        self.layoutWidget.setObjectName("layoutWidget")
        self.verticalLayout_2 = QtWidgets.QVBoxLayout(self.layoutWidget)
        self.verticalLayout_2.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_2.setObjectName("verticalLayout_2")
        self.label_4 = QtWidgets.QLabel(self.layoutWidget)
        self.label_4.setText("")
        self.label_4.setAlignment(QtCore.Qt.AlignCenter)
        self.label_4.setObjectName("label_4")
        self.verticalLayout_2.addWidget(self.label_4)
        self.layoutWidget1 = QtWidgets.QWidget(self.frame_3)
        self.layoutWidget1.setGeometry(QtCore.QRect(650, 10, 74, 89))
        self.layoutWidget1.setObjectName("layoutWidget1")
        self.verticalLayout = QtWidgets.QVBoxLayout(self.layoutWidget1)
        self.verticalLayout.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout.setObjectName("verticalLayout")
        self.pushButton = QtWidgets.QPushButton(self.layoutWidget1)
        self.pushButton.setText("")
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/images/img/export.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton.setIcon(icon)
        self.pushButton.setIconSize(QtCore.QSize(60, 60))
        self.pushButton.setObjectName("pushButton")
        self.verticalLayout.addWidget(self.pushButton)
        self.label_5 = QtWidgets.QLabel(self.layoutWidget1)
        self.label_5.setAlignment(QtCore.Qt.AlignCenter)
        self.label_5.setObjectName("label_5")
        self.verticalLayout.addWidget(self.label_5)
        self.dateEdit_2 = QtWidgets.QDateEdit(self.frame_3)
        self.dateEdit_2.setGeometry(QtCore.QRect(325, 35, 131, 22))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.dateEdit_2.setFont(font)
        self.dateEdit_2.setAutoFillBackground(False)
        self.dateEdit_2.setCalendarPopup(True)
        self.dateEdit_2.setTimeSpec(QtCore.Qt.LocalTime)
        self.dateEdit_2.setDate(QtCore.QDate(2019, 10, 31))
        self.dateEdit_2.setObjectName("dateEdit_2")
        self.dateEdit_3 = QtWidgets.QDateEdit(self.frame_3)
        self.dateEdit_3.setGeometry(QtCore.QRect(490, 35, 131, 22))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.dateEdit_3.setFont(font)
        self.dateEdit_3.setAutoFillBackground(False)
        self.dateEdit_3.setCalendarPopup(True)
        self.dateEdit_3.setTimeSpec(QtCore.Qt.LocalTime)
        self.dateEdit_3.setDate(QtCore.QDate(2019, 10, 31))
        self.dateEdit_3.setObjectName("dateEdit_3")
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 800, 21))
        self.menubar.setObjectName("menubar")
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

        self.pushButton.clicked.connect(self.exportData_rentang)

        conn = sqlite3.connect('database/pangkalan_data.db')
        c = conn.cursor()

        query = "select Tanggal, Nama, `NPM/NRP`, `Tanggal Lahir`, Golongan, Diagnosa, Perawatan, Pengobatan FROM riwayat_pengunjung"
            
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
        item = self.tableWidget.verticalHeaderItem(0)
        item.setText(_translate("MainWindow", "1"))
        item = self.tableWidget.verticalHeaderItem(1)
        item.setText(_translate("MainWindow", "2"))
        item = self.tableWidget.horizontalHeaderItem(0)
        item.setText(_translate("MainWindow", "Tanggal"))
        item = self.tableWidget.horizontalHeaderItem(1)
        item.setText(_translate("MainWindow", "Nama"))
        item = self.tableWidget.horizontalHeaderItem(2)
        item.setText(_translate("MainWindow", "NPM/NRP"))
        item = self.tableWidget.horizontalHeaderItem(3)
        item.setText(_translate("MainWindow", "Tanggal Lahir"))
        item = self.tableWidget.horizontalHeaderItem(4)
        item.setText(_translate("MainWindow", "Golongan"))
        item = self.tableWidget.horizontalHeaderItem(5)
        item.setText(_translate("MainWindow", "Diagnosa"))
        item = self.tableWidget.horizontalHeaderItem(6)
        item.setText(_translate("MainWindow", "Perawatan"))
        item = self.tableWidget.horizontalHeaderItem(7)
        item.setText(_translate("MainWindow", "Pengobatan"))
        self.label_2.setText(_translate("MainWindow", "Dari Tanggal"))
        self.label_6.setText(_translate("MainWindow", "Sampai Tanggal"))
        self.label_5.setText(_translate("MainWindow", "Ekspor"))
        self.dateEdit_2.setDisplayFormat(_translate("MainWindow", "yyyy-MM-dd"))
        self.dateEdit_3.setDisplayFormat(_translate("MainWindow", "yyyy-MM-dd"))
import resource




if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow_export()
    ui.setupUi_export(MainWindow)
    MainWindow.setFixedSize(800, 530)
    MainWindow.show()
    sys.exit(app.exec_())
