# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'h_login.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!


from PyQt5 import QtCore, QtGui, QtWidgets
from tkinter import messagebox
from h_utama import Ui_MainWindow_h_utama

class Ui_MainWindow(object):
    def login(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_h_utama()
        self.ui.setup_h_utama(self.window)
        self.window.show()
        self.window.showMaximized()
        MainWindow.hide()

    def setupUi(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(1366, 705)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.label = QtWidgets.QLabel(self.centralwidget)
        self.label.setGeometry(QtCore.QRect(0, 0, 1401, 701))
        self.label.setText("")
        self.label.setPixmap(QtGui.QPixmap("desain ui/h_login.png"))
        self.label.setObjectName("label")
        self.lineEdit_h_login = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit_h_login.setGeometry(QtCore.QRect(715, 310, 131, 22))
        self.lineEdit_h_login.setObjectName("lineEdit_h_login")
        self.label_2 = QtWidgets.QLabel(self.centralwidget)
        self.label_2.setGeometry(QtCore.QRect(756, 280, 61, 16))
        font = QtGui.QFont()
        font.setPointSize(14)
        self.label_2.setFont(font)
        self.label_2.setObjectName("label_2")
        self.label_3 = QtWidgets.QLabel(self.centralwidget)
        self.label_3.setGeometry(QtCore.QRect(741, 350, 101, 16))
        font = QtGui.QFont()
        font.setPointSize(14)
        self.label_3.setFont(font)
        self.label_3.setObjectName("label_3")
        self.lineEdit_2_h_login = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit_2_h_login.setGeometry(QtCore.QRect(715, 380, 131, 22))
        self.lineEdit_2_h_login.setObjectName("lineEdit_2_h_login")

        self.pushButton_h_login = QtWidgets.QPushButton(self.centralwidget)
        self.pushButton_h_login.setGeometry(QtCore.QRect(715, 450, 131, 41))
        self.pushButton_h_login.setObjectName("pushButton_h_login")
        self.pushButton_h_login.clicked.connect(self.login)

        self.label_4 = QtWidgets.QLabel(self.centralwidget)
        self.label_4.setGeometry(QtCore.QRect(1290, 655, 47, 13))
        self.label_4.setStyleSheet("color: rgb(255, 255, 255);")
        self.label_4.setObjectName("label_4")
        MainWindow.setCentralWidget(self.centralwidget)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Login"))
        self.lineEdit_h_login.setText(_translate("MainWindow", "bu ida"))
        self.label_2.setText(_translate("MainWindow", "Nama"))
        self.label_3.setText(_translate("MainWindow", "Password"))
        self.pushButton_h_login.setText(_translate("MainWindow", "Masuk"))
        self.label_4.setText(_translate("MainWindow", "Ver: 1.0"))
        

if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    MainWindow.showMaximized()
    sys.exit(app.exec_())
