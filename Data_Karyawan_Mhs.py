# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'tampilan_baru_ke_3.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!
import sqlite3
from win32api import GetSystemMetrics
from PyQt5 import QtCore, QtGui, QtWidgets
from Riwayat_Pasien import Ui_MainWindow_riwayat
from Tambah_Data_Pasien import Ui_MainWindow_tambah
from tkinter import messagebox

class Ui_MainWindow_golongan(object):
    
    def messagebox(self, title, message):
        mess=QtWidgets.QMessageBox()
        mess.setWindowTitle(title)
        mess.setText(message)
        mess.setStandardButtons(QtWidgets.QMessageBox.Ok)
        mess.exec_()

    def refreshData(self):
        conn = sqlite3.connect('database/pangkalan_data.db')
        c = conn.cursor()

        query = "select * from data_karyawan_mhs WHERE Golongan='Dosen' OR Golongan='Admin' OR Golongan='Laboran'"
            
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        self.messagebox("Pesan","Telah Direfresh!")
        c.close()

    def loadData(self):
        conn = sqlite3.connect('database/pangkalan_data.db')
        c = conn.cursor()

        query = "SELECT * FROM data_karyawan_mhs WHERE Golongan='Kebersihan'"
        
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        conn.close()

    def loadData1(self):
        conn = sqlite3.connect('database/pangkalan_data.db')
        c = conn.cursor()

        query = "select * from data_karyawan_mhs WHERE Golongan='Mahasiswa'"
        
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        conn.close()

    def loadData2(self):
        conn = sqlite3.connect('database/pangkalan_data.db')
        c = conn.cursor()

        query = "select * from data_karyawan_mhs WHERE Golongan='Dosen' OR Golongan='Admin' OR Golongan='Laboran'"
                
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        conn.close()

    def loadData3(self):
        conn = sqlite3.connect('database/pangkalan_data.db')
        c = conn.cursor()

        query = "select * from data_karyawan_mhs WHERE Golongan='PAM'"
        
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        conn.close()

    def setupUi_golongan(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(800, 590)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.gridLayout = QtWidgets.QGridLayout(self.centralwidget)
        self.gridLayout.setObjectName("gridLayout")
        self.frame = QtWidgets.QFrame(self.centralwidget)
        self.frame.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame.setObjectName("frame")
        self.frame_2 = QtWidgets.QFrame(self.frame)
        self.frame_2.setGeometry(QtCore.QRect(10, 10, 759, 98))
        self.frame_2.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_2.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_2.setObjectName("frame_2")
        self.gridLayout_3 = QtWidgets.QGridLayout(self.frame_2)
        self.gridLayout_3.setObjectName("gridLayout_3")
        self.horizontalLayout = QtWidgets.QHBoxLayout()
        self.horizontalLayout.setObjectName("horizontalLayout")
        self.label_3 = QtWidgets.QLabel(self.frame_2)
        self.label_3.setText("")
        self.label_3.setPixmap(QtGui.QPixmap(":/images/img/upn logo.png"))
        self.label_3.setScaledContents(True)
        self.label_3.setObjectName("label_3")
        self.horizontalLayout.addWidget(self.label_3)
        self.label = QtWidgets.QLabel(self.frame_2)
        self.label.setText("")
        self.label.setPixmap(QtGui.QPixmap(":/images/img/poli gigi logo.png"))
        self.label.setObjectName("label")
        self.horizontalLayout.addWidget(self.label)
        self.gridLayout_3.addLayout(self.horizontalLayout, 0, 0, 1, 1)
        spacerItem = QtWidgets.QSpacerItem(258, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.gridLayout_3.addItem(spacerItem, 0, 1, 1, 1)
        self.frame_4 = QtWidgets.QFrame(self.frame)
        self.frame_4.setGeometry(QtCore.QRect(10, 114, 761, 331))
        self.frame_4.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_4.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_4.setObjectName("frame_4")
        self.tableWidget = QtWidgets.QTableWidget(self.frame_4)
        self.tableWidget.setGeometry(QtCore.QRect(130, 10, 621, 311))
        self.tableWidget.setObjectName("tableWidget")
        self.tableWidget.setColumnCount(5)
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
        self.frame_8 = QtWidgets.QFrame(self.frame_4)
        self.frame_8.setGeometry(QtCore.QRect(-30, 10, 151, 321))
        self.frame_8.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_8.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_8.setObjectName("frame_8")
        self.layoutWidget_2 = QtWidgets.QWidget(self.frame_8)
        self.layoutWidget_2.setGeometry(QtCore.QRect(50, 0, 81, 81))
        self.layoutWidget_2.setObjectName("layoutWidget_2")
        self.verticalLayout_7 = QtWidgets.QVBoxLayout(self.layoutWidget_2)
        self.verticalLayout_7.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_7.setObjectName("verticalLayout_7")
        self.pushButton_2 = QtWidgets.QPushButton(self.layoutWidget_2)
        self.pushButton_2.setText("")
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/images/img/karyawan.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_2.setIcon(icon)
        self.pushButton_2.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_2.setObjectName("pushButton_2")
        self.verticalLayout_7.addWidget(self.pushButton_2)
        self.label_7 = QtWidgets.QLabel(self.layoutWidget_2)
        self.label_7.setAlignment(QtCore.Qt.AlignCenter)
        self.label_7.setObjectName("label_7")
        self.verticalLayout_7.addWidget(self.label_7)
        self.layoutWidget_3 = QtWidgets.QWidget(self.frame_8)
        self.layoutWidget_3.setGeometry(QtCore.QRect(50, 80, 81, 81))
        self.layoutWidget_3.setObjectName("layoutWidget_3")
        self.verticalLayout_6 = QtWidgets.QVBoxLayout(self.layoutWidget_3)
        self.verticalLayout_6.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_6.setObjectName("verticalLayout_6")
        self.pushButton_4 = QtWidgets.QPushButton(self.layoutWidget_3)
        self.pushButton_4.setText("")
        icon1 = QtGui.QIcon()
        icon1.addPixmap(QtGui.QPixmap(":/images/img/satpam.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_4.setIcon(icon1)
        self.pushButton_4.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_4.setObjectName("pushButton_4")
        self.verticalLayout_6.addWidget(self.pushButton_4)
        self.label_8 = QtWidgets.QLabel(self.layoutWidget_3)
        self.label_8.setAlignment(QtCore.Qt.AlignCenter)
        self.label_8.setObjectName("label_8")
        self.verticalLayout_6.addWidget(self.label_8)
        self.layoutWidget_4 = QtWidgets.QWidget(self.frame_8)
        self.layoutWidget_4.setGeometry(QtCore.QRect(50, 160, 81, 81))
        self.layoutWidget_4.setObjectName("layoutWidget_4")
        self.verticalLayout_5 = QtWidgets.QVBoxLayout(self.layoutWidget_4)
        self.verticalLayout_5.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_5.setObjectName("verticalLayout_5")
        self.pushButton_5 = QtWidgets.QPushButton(self.layoutWidget_4)
        self.pushButton_5.setText("")
        icon2 = QtGui.QIcon()
        icon2.addPixmap(QtGui.QPixmap(":/images/img/cs.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_5.setIcon(icon2)
        self.pushButton_5.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_5.setObjectName("pushButton_5")
        self.verticalLayout_5.addWidget(self.pushButton_5)
        self.label_9 = QtWidgets.QLabel(self.layoutWidget_4)
        self.label_9.setAlignment(QtCore.Qt.AlignCenter)
        self.label_9.setObjectName("label_9")
        self.verticalLayout_5.addWidget(self.label_9)
        self.layoutWidget_5 = QtWidgets.QWidget(self.frame_8)
        self.layoutWidget_5.setGeometry(QtCore.QRect(50, 240, 81, 81))
        self.layoutWidget_5.setObjectName("layoutWidget_5")
        self.verticalLayout_8 = QtWidgets.QVBoxLayout(self.layoutWidget_5)
        self.verticalLayout_8.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_8.setObjectName("verticalLayout_8")
        self.pushButton_6 = QtWidgets.QPushButton(self.layoutWidget_5)
        self.pushButton_6.setText("")
        icon3 = QtGui.QIcon()
        icon3.addPixmap(QtGui.QPixmap(":/images/img/mahasiswa.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_6.setIcon(icon3)
        self.pushButton_6.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_6.setObjectName("pushButton_6")
        self.verticalLayout_8.addWidget(self.pushButton_6)
        self.label_10 = QtWidgets.QLabel(self.layoutWidget_5)
        self.label_10.setAlignment(QtCore.Qt.AlignCenter)
        self.label_10.setObjectName("label_10")
        self.verticalLayout_8.addWidget(self.label_10)
        self.frame_3 = QtWidgets.QFrame(self.frame)
        self.frame_3.setGeometry(QtCore.QRect(10, 440, 762, 101))
        self.frame_3.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_3.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_3.setObjectName("frame_3")
        self.frame_5 = QtWidgets.QFrame(self.frame_3)
        self.frame_5.setGeometry(QtCore.QRect(59, 20, 20, 20))
        self.frame_5.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_5.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_5.setObjectName("frame_5")
        self.gridLayout_2 = QtWidgets.QGridLayout(self.frame_5)
        self.gridLayout_2.setObjectName("gridLayout_2")
        self.frame_7 = QtWidgets.QFrame(self.frame_3)
        self.frame_7.setGeometry(QtCore.QRect(10, 10, 43, 91))
        self.frame_7.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_7.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_7.setObjectName("frame_7")
        self.frame_6 = QtWidgets.QFrame(self.frame_3)
        self.frame_6.setGeometry(QtCore.QRect(540, 50, 20, 20))
        self.frame_6.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_6.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_6.setObjectName("frame_6")
        self.gridLayout_7 = QtWidgets.QGridLayout(self.frame_6)
        self.gridLayout_7.setObjectName("gridLayout_7")
        self.pushButton_3 = QtWidgets.QPushButton(self.frame_3)
        self.pushButton_3.setGeometry(QtCore.QRect(670, 11, 72, 68))
        self.pushButton_3.setText("")
        icon4 = QtGui.QIcon()
        icon4.addPixmap(QtGui.QPixmap(":/images/img/refresh.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_3.setIcon(icon4)
        self.pushButton_3.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_3.setObjectName("pushButton_3")
        self.label_6 = QtWidgets.QLabel(self.frame_3)
        self.label_6.setGeometry(QtCore.QRect(670, 78, 71, 20))
        self.label_6.setAlignment(QtCore.Qt.AlignCenter)
        self.label_6.setObjectName("label_6")
        self.gridLayout.addWidget(self.frame, 0, 1, 1, 1)
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 800, 21))
        self.menubar.setObjectName("menubar")
        MainWindow.setMenuBar(self.menubar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

        self.pushButton_6.clicked.connect(self.loadData1)        
        self.pushButton_4.clicked.connect(self.loadData3)
        self.pushButton_2.clicked.connect(self.loadData2)
        self.pushButton_5.clicked.connect(self.loadData)
        self.pushButton_3.clicked.connect(self.refreshData)

        conn = sqlite3.connect('database/pangkalan_data.db')
        c = conn.cursor()
        query = "select * from data_karyawan_mhs WHERE Golongan='Dosen' OR Golongan='Admin' OR Golongan='Laboran'"
                
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        conn.close()
        
    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Halaman Detail Utama"))
        item = self.tableWidget.verticalHeaderItem(0)
        item.setText(_translate("MainWindow", "1"))
        item = self.tableWidget.verticalHeaderItem(1)
        item.setText(_translate("MainWindow", "2"))
        item = self.tableWidget.horizontalHeaderItem(0)
        item.setText(_translate("MainWindow", "NPM/NRP"))
        item = self.tableWidget.horizontalHeaderItem(1)
        item.setText(_translate("MainWindow", "Nama"))
        item = self.tableWidget.horizontalHeaderItem(2)
        item.setText(_translate("MainWindow", "Tanggal Lahir"))
        item = self.tableWidget.horizontalHeaderItem(3)
        item.setText(_translate("MainWindow", "Golongan"))
        item = self.tableWidget.horizontalHeaderItem(4)
        item.setText(_translate("MainWindow", "Jumlah Kunjungan"))
        item = self.tableWidget.horizontalHeaderItem(5)
        self.label_7.setText(_translate("MainWindow", "Karyawan"))
        self.label_8.setText(_translate("MainWindow", "Keamanan"))
        self.label_9.setText(_translate("MainWindow", "Kebersihan"))
        self.label_10.setText(_translate("MainWindow", "Mahasiswa"))
        self.label_6.setText(_translate("MainWindow", "Refresh Data"))
import resource


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow_golongan()
    ui.setupUi_golongan(MainWindow)
    MainWindow.setFixedSize(800, 590)
    MainWindow.show()
    sys.exit(app.exec_())
