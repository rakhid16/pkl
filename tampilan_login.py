# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'tampilan_login_fix.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!

from tkinter import messagebox
from PyQt5 import QtCore, QtGui, QtWidgets
from tampilan_baru import Ui_MainWindow_utama

class Ui_MainWindow_login(object):
    def btn_pindah(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_utama()
        self.ui.setupUi_utama(self.window)
        self.window.setFixedSize(1361, 692)
        self.window.show()
        self.closeWindow()
    
    def closeWindow(self):
        MainWindow.close()

    def setupUi_login(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(1362, 692)

        # # Disable rezie button window 
        # MainWindow.setWindowFlags(MainWindow.windowFlags() | QtCore.Qt.CustomizeWindowHint)
        # MainWindow.setWindowFlags(MainWindow.windowFlags() & ~QtCore.Qt.WindowMaximizeButtonHint)

        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.label = QtWidgets.QLabel(self.centralwidget)
        self.label.setGeometry(QtCore.QRect(5, 5, 1391, 691))
        self.label.setText("")
        self.label.setPixmap(QtGui.QPixmap(":/images/img/h_login_1.png"))
        self.label.setObjectName("label")
        self.lineEdit = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit.setGeometry(QtCore.QRect(695, 350, 133, 24))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.lineEdit.setFont(font)
        self.lineEdit.setObjectName("lineEdit")
        self.lineEdit_2 = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit_2.setGeometry(QtCore.QRect(695, 430, 133, 24))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.lineEdit_2.setFont(font)
        self.lineEdit_2.setText("")
        self.lineEdit_2.setEchoMode(QtWidgets.QLineEdit.Password)
        self.lineEdit_2.setObjectName("lineEdit_2")
        self.label_2 = QtWidgets.QLabel(self.centralwidget)
        self.label_2.setGeometry(QtCore.QRect(695, 320, 71, 19))
        font = QtGui.QFont()
        font.setPointSize(12)
        self.label_2.setFont(font)
        self.label_2.setObjectName("label_2")
        self.label_3 = QtWidgets.QLabel(self.centralwidget)
        self.label_3.setGeometry(QtCore.QRect(695, 400, 67, 19))
        font = QtGui.QFont()
        font.setPointSize(12)
        self.label_3.setFont(font)
        self.label_3.setObjectName("label_3")
        self.pushButton = QtWidgets.QPushButton(self.centralwidget)
        self.pushButton.setGeometry(QtCore.QRect(695, 485, 91, 27))
        self.pushButton.setObjectName("pushButton")

        self.pushButton.clicked.connect(self.btn_login_handler)

        self.label.raise_()
        self.lineEdit.raise_()
        self.label_3.raise_()
        self.label_2.raise_()
        self.lineEdit_2.raise_()
        self.pushButton.raise_()
        MainWindow.setCentralWidget(self.centralwidget)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Halaman Login"))
        self.lineEdit.setText(_translate("MainWindow", "ida"))
        self.label_2.setText(_translate("MainWindow", "Username"))
        self.label_3.setText(_translate("MainWindow", "Password"))
        self.pushButton.setText(_translate("MainWindow", "Masuk"))

    def messagebox(self, title, message):
        mess=QtWidgets.QMessageBox()
        mess.setWindowTitle(title)
        mess.setText(message)
        mess.setStandardButtons(QtWidgets.QMessageBox.Ok)
        mess.exec_()

    def btn_login_handler(self):
        if len(self.lineEdit.text()) <= 1:
            self.messagebox('Pesan','Username Tidak Boleh Kosong!')
        else:
            if len(self.lineEdit_2.text()) <= 1:
                self.messagebox("Pesan","Password Tidak Boleh Kosong!")

            else:
                username = self.lineEdit.text()
                password = self.lineEdit_2.text()

                if (username == 'ida') & (password == 'ida123'):
                    self.btn_pindah()
                else:
                    self.messagebox("Pesan","Username / Password Salah, Mohon di Cek Kembali !")

            # ==== If - Else Comparasion parameter Jika Menggunakan Database ====
            # else:
            #     username = self.lineEdit.text()
            #     password = self.lineEdit_2.text()

            #     conn = sqlite3.connect('database/pangkalan_data.db')
            #     cursor = conn.cursor()

            #     cursor.execute("SELECT Nama_User,Pass_User FROM user")
            #     val = cursor.fetchall()

            #     if len(val) >= 1:

            #         for x in val:
            #             if username in x[0] and password in x[1]:
            #                 print("welcome ")
            #             else:
            #                 self.messagebox("Pesan","Username / Password Salah, Mohon di Cek Kembali !")

            #     else:
            #         print('No user Found')        

import resource_login


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow_login()
    ui.setupUi_login(MainWindow)
    MainWindow.setFixedSize(1361, 692)
    MainWindow.show()
    sys.exit(app.exec_())
