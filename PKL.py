# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'pkl1.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!


from PyQt5 import QtCore, QtGui, QtWidgets
import sqlite3

class Ui_MainWindow(object):
    def messagebox(self, title, message):
        mess=QtWidgets.QMessageBox()
        mess.setWindowTitle(title)
        mess.setText(message)
        mess.setStandardButtons(QtWidgets.QMessageBox.Ok)
        mess.exec_()
        
    # def saveData(self):
    #     self.tableWidget.setRowCount(0)
    #     for row_number, row_data in enumerate():
    #         self.tableWidget.insertRow(row_number)
    #     for column_number, data in enumerate(row_data):
    #         self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))
        

    def loadData(self):
        conn = sqlite3.connect('D:/4.PKL/Data PKL/database_poli.sqlite')
        c = conn.cursor()
        c.execute("CREATE TABLE IF NOT EXISTS data_baru(tanggal date,id number,nama text,tanggal_lahir,usia number,golongan text,diagnosa text,perawatan text,pengobatan text)")
        
        
        conn.commit()

        query = "SELECT * FROM data_baru"
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
        for column_number, data in enumerate(row_data):
            self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))

        self.messagebox("Pesan","Data Baru siap digunakan!")
        conn.close()

    def setupUi(self, MainWindow):
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

        conn = sqlite3.connect('D:/4.PKL/Data PKL/database_poli.sqlite')
        c = conn.cursor()

        query = "SELECT * FROM data_baru"
        result = c.execute(query)

        self.tableWidget.setRowCount(0)
        for row_number, row_data in enumerate(result):
            self.tableWidget.insertRow(row_number)
        for column_number, data in enumerate(row_data):
            self.tableWidget.setItem(row_number, column_number, QtWidgets.QTableWidgetItem(str(data)))
        conn.close()

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
        self.tableWidget.setItem(0, 0, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setItem(0, 1, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setItem(0, 2, item)
        self.tableWidget.horizontalHeader().setMinimumSectionSize(39)
        self.btn_load = QtWidgets.QPushButton(self.centralwidget)
        self.btn_load.setGeometry(QtCore.QRect(1050, 626, 101, 31))
        self.btn_load.setObjectName("btn_load")
        self.btn_load.clicked.connect(self.loadData)

        self.btn_search = QtWidgets.QPushButton(self.centralwidget)
        self.btn_search.setGeometry(QtCore.QRect(920, 61, 91, 31))
        self.btn_search.setObjectName("btn_search")

        self.btn_ekspor = QtWidgets.QPushButton(self.centralwidget)
        self.btn_ekspor.setGeometry(QtCore.QRect(1160, 626, 91, 31))
        self.btn_ekspor.setObjectName("btn_ekspor")

        self.btn_save = QtWidgets.QPushButton(self.centralwidget)
        self.btn_save.setGeometry(QtCore.QRect(1130, 60, 121, 31))
        self.btn_save.setObjectName("btn_save")

        self.lineEdit = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit.setGeometry(QtCore.QRect(1010, 62, 110, 29))
        self.lineEdit.setObjectName("lineEdit")

        MainWindow.setCentralWidget(self.centralwidget)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "MainWindow"))
        self.label.setText(_translate("MainWindow", "Rekap Kunjungan Pasien Poliklinik Gigi"))
        header = self.tableWidget.horizontalHeader() 
        
        header.setSectionResizeMode(0, QtWidgets.QHeaderView.ResizeToContents) 
        item = self.tableWidget.horizontalHeaderItem(0)
        item.setText(_translate("MainWindow", "Tanggal"))

        header.setSectionResizeMode(1, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(1, QtWidgets.QHeaderView.ResizeToContents) 
        item = self.tableWidget.horizontalHeaderItem(1)
        item.setText(_translate("MainWindow", "NPM / NRP"))

        header.setSectionResizeMode(2, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(2, QtWidgets.QHeaderView.ResizeToContents)
        item = self.tableWidget.horizontalHeaderItem(2)
        item.setText(_translate("MainWindow", "Nama"))

        header.setSectionResizeMode(3, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(3, QtWidgets.QHeaderView.ResizeToContents)
        item = self.tableWidget.horizontalHeaderItem(3)
        item.setText(_translate("MainWindow", "Tanggal Lahir"))

        header.setSectionResizeMode(4, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(4, QtWidgets.QHeaderView.ResizeToContents)
        item = self.tableWidget.horizontalHeaderItem(4)
        item.setText(_translate("MainWindow", "Usia"))

        header.setSectionResizeMode(5, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(5, QtWidgets.QHeaderView.ResizeToContents)
        item = self.tableWidget.horizontalHeaderItem(5)
        item.setText(_translate("MainWindow", "Golongan"))

        header.setSectionResizeMode(6, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(6, QtWidgets.QHeaderView.ResizeToContents) 
        item = self.tableWidget.horizontalHeaderItem(6)
        item.setText(_translate("MainWindow", "Diagnosa"))

        header.setSectionResizeMode(7, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(7, QtWidgets.QHeaderView.ResizeToContents) 
        item = self.tableWidget.horizontalHeaderItem(7)
        item.setText(_translate("MainWindow", "Perawatan Gigi"))

        header.setSectionResizeMode(8, QtWidgets.QHeaderView.Stretch)
        header.setSectionResizeMode(8, QtWidgets.QHeaderView.ResizeToContents)
        item = self.tableWidget.horizontalHeaderItem(8)
        item.setText(_translate("MainWindow", "Pengobatan"))
        __sortingEnabled = self.tableWidget.isSortingEnabled()
        self.tableWidget.setSortingEnabled(False)
        self.tableWidget.setSortingEnabled(__sortingEnabled)
        self.btn_load.setText(_translate("MainWindow", "Buat Data Baru"))
        self.btn_search.setText(_translate("MainWindow", "Cari NPM / NRP"))
        self.btn_ekspor.setText(_translate("MainWindow", "Ekspor Data"))
        self.btn_save.setText(_translate("MainWindow", "Simpan Perubahan"))
        self.lineEdit.setText(_translate("MainWindow", "17081010055"))


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())
