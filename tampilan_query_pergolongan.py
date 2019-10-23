# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file '.\tampilan_baru_ke_2.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!

import sqlite3
from PyQt5 import QtCore, QtGui, QtWidgets


class Ui_MainWindow_2(object):
    def loadData(self):
        conn = sqlite3.connect('D:/4. PKL/Data PKL/Repo From Wahid Asli PKL/database/pangkalan_data.db')
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
        conn = sqlite3.connect('D:/4. PKL/Data PKL/Repo From Wahid Asli PKL/database/pangkalan_data.db')
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
        conn = sqlite3.connect('D:/4. PKL/Data PKL/Repo From Wahid Asli PKL/database/pangkalan_data.db')
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
        conn = sqlite3.connect('D:/4. PKL/Data PKL/Repo From Wahid Asli PKL/database/pangkalan_data.db')
        c = conn.cursor()

        query = "select * from data_karyawan_mhs WHERE Golongan='PAM'"
        
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
            for column_number, data in enumerate(row_data):
                self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        conn.close()

    def loadDataUtama(self):
        from tampilan_program_utama import Ui_MainWindow
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow()
        self.ui.setupUi(self.window)
        self.window.show()
        self.window.showMaximized()
        
        

    def setupUi_2(self, MainWindow):
        MainWindow.showMaximized()
        MainWindow.setObjectName("MainWindow")
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.gridLayout = QtWidgets.QGridLayout(self.centralwidget)
        self.gridLayout.setObjectName("gridLayout")
        self.frame = QtWidgets.QFrame(self.centralwidget)
        self.frame.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame.setObjectName("frame")
        self.gridLayout_6 = QtWidgets.QGridLayout(self.frame)
        self.gridLayout_6.setObjectName("gridLayout_6")
        self.label = QtWidgets.QLabel(self.frame)
        self.label.setText("")
        self.label.setObjectName("label")
        self.gridLayout_6.addWidget(self.label, 2, 0, 1, 1)
        self.frame_2 = QtWidgets.QFrame(self.frame)
        self.frame_2.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_2.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_2.setObjectName("frame_2")
        self.gridLayout_5 = QtWidgets.QGridLayout(self.frame_2)
        self.gridLayout_5.setObjectName("gridLayout_5")
        self.verticalLayout_7 = QtWidgets.QVBoxLayout()
        self.verticalLayout_7.setObjectName("verticalLayout_7")
        self.pushButton = QtWidgets.QPushButton(self.frame_2)
        self.pushButton.setText("")
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/images/img/karyawan.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton.setIcon(icon)
        self.pushButton.setIconSize(QtCore.QSize(85, 85))
        self.pushButton.setObjectName("pushButton")
        self.verticalLayout_7.addWidget(self.pushButton)
        self.label_5 = QtWidgets.QLabel(self.frame_2)
        self.label_5.setAlignment(QtCore.Qt.AlignCenter)
        self.label_5.setObjectName("label_5")
        self.verticalLayout_7.addWidget(self.label_5)
        self.gridLayout_5.addLayout(self.verticalLayout_7, 0, 0, 1, 1)
        self.verticalLayout_6 = QtWidgets.QVBoxLayout()
        self.verticalLayout_6.setObjectName("verticalLayout_6")
        self.pushButton_2 = QtWidgets.QPushButton(self.frame_2)
        self.pushButton_2.setText("")
        icon1 = QtGui.QIcon()
        icon1.addPixmap(QtGui.QPixmap(":/images/img/satpam.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_2.setIcon(icon1)
        self.pushButton_2.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_2.setObjectName("pushButton_2")
        self.verticalLayout_6.addWidget(self.pushButton_2)
        self.label_6 = QtWidgets.QLabel(self.frame_2)
        self.label_6.setAlignment(QtCore.Qt.AlignCenter)
        self.label_6.setObjectName("label_6")
        self.verticalLayout_6.addWidget(self.label_6)
        self.gridLayout_5.addLayout(self.verticalLayout_6, 1, 0, 1, 1)
        self.verticalLayout_5 = QtWidgets.QVBoxLayout()
        self.verticalLayout_5.setObjectName("verticalLayout_5")
        self.pushButton_3 = QtWidgets.QPushButton(self.frame_2)
        self.pushButton_3.setText("")
        icon2 = QtGui.QIcon()
        icon2.addPixmap(QtGui.QPixmap(":/images/img/cs.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_3.setIcon(icon2)
        self.pushButton_3.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_3.setObjectName("pushButton_3")
        
        self.pushButton_3.clicked.connect(self.loadData)
        
        self.pushButton.clicked.connect(self.loadData2)
        self.pushButton_2.clicked.connect(self.loadData3)

        self.verticalLayout_5.addWidget(self.pushButton_3)
        self.label_7 = QtWidgets.QLabel(self.frame_2)
        self.label_7.setAlignment(QtCore.Qt.AlignCenter)
        self.label_7.setObjectName("label_7")
        self.verticalLayout_5.addWidget(self.label_7)
        self.gridLayout_5.addLayout(self.verticalLayout_5, 2, 0, 1, 1)
        self.verticalLayout_8 = QtWidgets.QVBoxLayout()
        self.verticalLayout_8.setObjectName("verticalLayout_8")
        self.pushButton_4 = QtWidgets.QPushButton(self.frame_2)
        self.pushButton_4.setText("")
        icon3 = QtGui.QIcon()
        icon3.addPixmap(QtGui.QPixmap(":/images/img/mahasiswa.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_4.setIcon(icon3)
        self.pushButton_4.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_4.setObjectName("pushButton_4")
        
        self.pushButton_4.clicked.connect(self.loadData1)

        self.verticalLayout_8.addWidget(self.pushButton_4)
        self.label_8 = QtWidgets.QLabel(self.frame_2)
        self.label_8.setAlignment(QtCore.Qt.AlignCenter)
        self.label_8.setObjectName("label_8")
        self.verticalLayout_8.addWidget(self.label_8)
        self.gridLayout_5.addLayout(self.verticalLayout_8, 3, 0, 1, 1)
        self.gridLayout_6.addWidget(self.frame_2, 1, 0, 2, 1)
        self.frame_3 = QtWidgets.QFrame(self.frame)
        self.frame_3.setFrameShape(QtWidgets.QFrame.NoFrame)
        self.frame_3.setFrameShadow(QtWidgets.QFrame.Plain)
        self.frame_3.setObjectName("frame_3")
        self.gridLayout_2 = QtWidgets.QGridLayout(self.frame_3)
        self.gridLayout_2.setObjectName("gridLayout_2")
        self.home = QtWidgets.QPushButton(self.frame_3)
        self.home.setStyleSheet("")
        self.home.setText("")
        icon4 = QtGui.QIcon()
        icon4.addPixmap(QtGui.QPixmap(":/images/img/home.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.home.setIcon(icon4)
        self.home.setIconSize(QtCore.QSize(60, 60))
        self.home.setObjectName("home")
        self.home.clicked.connect(self.loadDataUtama)
        self.gridLayout_2.addWidget(self.home, 0, 1, 1, 1)
        spacerItem = QtWidgets.QSpacerItem(40, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.gridLayout_2.addItem(spacerItem, 0, 0, 1, 1)
        spacerItem1 = QtWidgets.QSpacerItem(17, 9, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.gridLayout_2.addItem(spacerItem1, 1, 1, 1, 1)
        self.gridLayout_6.addWidget(self.frame_3, 0, 3, 1, 1)
        self.frame_5 = QtWidgets.QFrame(self.frame)
        self.frame_5.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_5.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_5.setObjectName("frame_5")
        self.gridLayout_7 = QtWidgets.QGridLayout(self.frame_5)
        self.gridLayout_7.setObjectName("gridLayout_7")
        spacerItem2 = QtWidgets.QSpacerItem(20, 373, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.gridLayout_7.addItem(spacerItem2, 0, 0, 2, 1)
        self.tableWidget = QtWidgets.QTableWidget(self.frame_5)
        self.tableWidget.setFrameShadow(QtWidgets.QFrame.Raised)
        self.tableWidget.setObjectName("tableWidget")
        self.tableWidget.setColumnCount(5)
        self.tableWidget.setRowCount(8)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(0, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(1, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(2, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(3, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(4, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(5, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(6, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setVerticalHeaderItem(7, item)
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
        self.tableWidget.horizontalHeader().setVisible(True)
        self.tableWidget.horizontalHeader().setCascadingSectionResizes(False)
        self.tableWidget.horizontalHeader().setHighlightSections(True)
        self.tableWidget.horizontalHeader().setSortIndicatorShown(False)
        self.tableWidget.horizontalHeader().setStretchLastSection(False)
        self.tableWidget.verticalHeader().setVisible(True)
        self.tableWidget.verticalHeader().setCascadingSectionResizes(False)
        self.tableWidget.verticalHeader().setDefaultSectionSize(23)
        self.tableWidget.verticalHeader().setHighlightSections(True)
        self.gridLayout_7.addWidget(self.tableWidget, 1, 1, 1, 1)
        self.gridLayout_6.addWidget(self.frame_5, 1, 1, 3, 3)
        self.frame_6 = QtWidgets.QFrame(self.frame)
        self.frame_6.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_6.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_6.setObjectName("frame_6")
        self.gridLayout_4 = QtWidgets.QGridLayout(self.frame_6)
        self.gridLayout_4.setObjectName("gridLayout_4")
        self.horizontalLayout = QtWidgets.QHBoxLayout()
        self.horizontalLayout.setObjectName("horizontalLayout")
        self.label_9 = QtWidgets.QLabel(self.frame_6)
        self.label_9.setText("")
        self.label_9.setPixmap(QtGui.QPixmap(":/images/img/upn logo.png"))
        self.label_9.setObjectName("label_9")
        self.horizontalLayout.addWidget(self.label_9)
        self.label_10 = QtWidgets.QLabel(self.frame_6)
        self.label_10.setText("")
        self.label_10.setPixmap(QtGui.QPixmap(":/images/img/poli gigi logo.png"))
        self.label_10.setObjectName("label_10")
        self.horizontalLayout.addWidget(self.label_10)
        self.gridLayout_4.addLayout(self.horizontalLayout, 0, 0, 1, 1)
        spacerItem3 = QtWidgets.QSpacerItem(17, 17, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.gridLayout_4.addItem(spacerItem3, 1, 0, 1, 1)
        spacerItem4 = QtWidgets.QSpacerItem(40, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.gridLayout_4.addItem(spacerItem4, 0, 1, 1, 1)
        self.gridLayout_6.addWidget(self.frame_6, 0, 0, 1, 3)
        self.gridLayout.addWidget(self.frame, 0, 0, 1, 1)
        self.frame_4 = QtWidgets.QFrame(self.centralwidget)
        self.frame_4.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_4.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_4.setObjectName("frame_4")
        self.gridLayout_3 = QtWidgets.QGridLayout(self.frame_4)
        self.gridLayout_3.setObjectName("gridLayout_3")
        spacerItem5 = QtWidgets.QSpacerItem(690, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.gridLayout_3.addItem(spacerItem5, 0, 0, 1, 1)
        self.label_2 = QtWidgets.QLabel(self.frame_4)
        self.label_2.setAlignment(QtCore.Qt.AlignCenter)
        self.label_2.setObjectName("label_2")
        self.gridLayout_3.addWidget(self.label_2, 1, 1, 1, 1)
        spacerItem6 = QtWidgets.QSpacerItem(17, 119, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.gridLayout_3.addItem(spacerItem6, 0, 3, 1, 1)
        self.pushButton_6 = QtWidgets.QPushButton(self.frame_4)
        self.pushButton_6.setText("")
        icon5 = QtGui.QIcon()
        icon5.addPixmap(QtGui.QPixmap(":/images/img/edit.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_6.setIcon(icon5)
        self.pushButton_6.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_6.setObjectName("pushButton_6")
        self.gridLayout_3.addWidget(self.pushButton_6, 0, 1, 1, 1)
        self.pushButton_5 = QtWidgets.QPushButton(self.frame_4)
        self.pushButton_5.setText("")
        icon6 = QtGui.QIcon()
        icon6.addPixmap(QtGui.QPixmap(":/images/img/data_baru.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_5.setIcon(icon6)
        self.pushButton_5.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_5.setObjectName("pushButton_5")
        self.gridLayout_3.addWidget(self.pushButton_5, 0, 2, 1, 1)
        self.label_3 = QtWidgets.QLabel(self.frame_4)
        self.label_3.setAlignment(QtCore.Qt.AlignCenter)
        self.label_3.setObjectName("label_3")
        self.gridLayout_3.addWidget(self.label_3, 1, 2, 1, 1)
        self.gridLayout.addWidget(self.frame_4, 1, 0, 1, 1)
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 1010, 21))
        self.menubar.setObjectName("menubar")
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)
        
        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

        conn = sqlite3.connect('D:/4. PKL/Data PKL/Repo From Wahid Asli PKL/database/pangkalan_data.db')
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
        MainWindow.setWindowTitle(_translate("MainWindow", "MainWindow"))
        self.label_5.setText(_translate("MainWindow", "Karyawan"))
        self.label_6.setText(_translate("MainWindow", "Keamanan"))
        self.label_7.setText(_translate("MainWindow", "Kebersihan"))
        self.label_8.setText(_translate("MainWindow", "Mahasiswa"))
        item = self.tableWidget.verticalHeaderItem(0)
        item.setText(_translate("MainWindow", "1"))
        item = self.tableWidget.verticalHeaderItem(1)
        item.setText(_translate("MainWindow", "2"))
        item = self.tableWidget.verticalHeaderItem(2)
        item.setText(_translate("MainWindow", "3"))
        item = self.tableWidget.verticalHeaderItem(3)
        item.setText(_translate("MainWindow", "5"))
        item = self.tableWidget.verticalHeaderItem(4)
        item.setText(_translate("MainWindow", "6"))
        item = self.tableWidget.verticalHeaderItem(5)
        item.setText(_translate("MainWindow", "7"))
        item = self.tableWidget.verticalHeaderItem(6)
        item.setText(_translate("MainWindow", "8"))
        item = self.tableWidget.verticalHeaderItem(7)
        item.setText(_translate("MainWindow", "10"))
        item = self.tableWidget.horizontalHeaderItem(0)
        item.setText(_translate("MainWindow", "NPM/NRP"))
        item = self.tableWidget.horizontalHeaderItem(1)
        item.setText(_translate("MainWindow", "Nama"))
        item = self.tableWidget.horizontalHeaderItem(2)
        item.setText(_translate("MainWindow", "Tanggal lahir"))
        item = self.tableWidget.horizontalHeaderItem(3)
        item.setText(_translate("MainWindow", "Usia"))
        item = self.tableWidget.horizontalHeaderItem(4)
        item.setText(_translate("MainWindow", "Golongan"))
        self.label_2.setText(_translate("MainWindow", "Edit Data"))
        self.label_3.setText(_translate("MainWindow", "Tambah Data"))

import resource




if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow_2()
    ui.setupUi_2(MainWindow)
    MainWindow.showMaximized()
    MainWindow.show()
    sys.exit(app.exec_())
