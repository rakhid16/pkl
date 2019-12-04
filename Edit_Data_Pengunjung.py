import sqlite3
from tkinter import messagebox
from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_MainWindow_edit(object):
    def batalReset(self):
        self.lineEdit.setText("")
        self.lineEdit_2.setText("")
        self.lineEdit_7.setText("")
        self.textEdit.setText("")
        self.textEdit_2.setText("")
        self.textEdit_3.setText("")
        self.messagebox("Pesan","Data Telah Direset Ulang!")

    def messagebox(self, title, message):
        mess=QtWidgets.QMessageBox()
        mess.setWindowTitle(title)
        mess.setText(message)
        mess.setStandardButtons(QtWidgets.QMessageBox.Ok)
        mess.exec_()

    def setupUi_edit(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(802, 603)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.gridLayout = QtWidgets.QGridLayout(self.centralwidget)
        self.gridLayout.setObjectName("gridLayout")
        self.frame = QtWidgets.QFrame(self.centralwidget)
        self.frame.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame.setObjectName("frame")
        self.frame_2 = QtWidgets.QFrame(self.frame)
        self.frame_2.setGeometry(QtCore.QRect(43, 425, 671, 109))
        self.frame_2.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_2.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_2.setObjectName("frame_2")
        self.gridLayout_2 = QtWidgets.QGridLayout(self.frame_2)
        self.gridLayout_2.setObjectName("gridLayout_2")
        spacerItem = QtWidgets.QSpacerItem(270, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.gridLayout_2.addItem(spacerItem, 0, 2, 1, 1)
        self.verticalLayout_3 = QtWidgets.QVBoxLayout()
        self.verticalLayout_3.setObjectName("verticalLayout_3")
        self.pushButton = QtWidgets.QPushButton(self.frame_2)
        self.pushButton.setText("")
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/images/img/centang.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton.setIcon(icon)
        self.pushButton.setIconSize(QtCore.QSize(60, 60))
        self.pushButton.setObjectName("pushButton")
        self.verticalLayout_3.addWidget(self.pushButton)
        self.label_3 = QtWidgets.QLabel(self.frame_2)
        self.label_3.setAlignment(QtCore.Qt.AlignCenter)
        self.label_3.setObjectName("label_3")
        self.verticalLayout_3.addWidget(self.label_3)
        self.gridLayout_2.addLayout(self.verticalLayout_3, 0, 0, 1, 1)
        self.verticalLayout_2 = QtWidgets.QVBoxLayout()
        self.verticalLayout_2.setObjectName("verticalLayout_2")
        self.pushButton_2 = QtWidgets.QPushButton(self.frame_2)
        self.pushButton_2.setText("")
        icon1 = QtGui.QIcon()
        icon1.addPixmap(QtGui.QPixmap(":/images/img/silang.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_2.setIcon(icon1)
        self.pushButton_2.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_2.setObjectName("pushButton_2")
        self.verticalLayout_2.addWidget(self.pushButton_2)

        self.label_8 = QtWidgets.QLabel(self.frame_2)
        self.label_8.setAlignment(QtCore.Qt.AlignCenter)
        self.label_8.setObjectName("label_8")
        self.verticalLayout_2.addWidget(self.label_8)
        self.gridLayout_2.addLayout(self.verticalLayout_2, 0, 1, 1, 1)
        self.frame_3 = QtWidgets.QFrame(self.frame)
        self.frame_3.setGeometry(QtCore.QRect(30, -10, 711, 211))
        self.frame_3.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_3.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_3.setObjectName("frame_3")
        self.widget = QtWidgets.QWidget(self.frame_3)
        self.widget.setGeometry(QtCore.QRect(93, 41, 371, 142))
        self.widget.setObjectName("widget")
        self.verticalLayout = QtWidgets.QVBoxLayout(self.widget)
        self.verticalLayout.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout.setObjectName("verticalLayout")
        self.dateEdit_2 = QtWidgets.QDateEdit(self.widget)
        font = QtGui.QFont()
        font.setPointSize(10)
        self.dateEdit_2.setFont(font)
        self.dateEdit_2.setCalendarPopup(True)
        self.dateEdit_2.setDate(QtCore.QDate(2019, 10, 31))
        self.dateEdit_2.setObjectName("dateEdit_2")
        self.verticalLayout.addWidget(self.dateEdit_2)
        self.lineEdit = QtWidgets.QLineEdit(self.widget)
        font = QtGui.QFont()
        font.setPointSize(10)
        self.lineEdit.setFont(font)
        self.lineEdit.setObjectName("lineEdit")
        self.verticalLayout.addWidget(self.lineEdit)
        self.lineEdit_2 = QtWidgets.QLineEdit(self.widget)
        font = QtGui.QFont()
        font.setPointSize(10)
        self.lineEdit_2.setFont(font)
        self.lineEdit_2.setObjectName("lineEdit_2")
        self.verticalLayout.addWidget(self.lineEdit_2)
        self.lineEdit_7 = QtWidgets.QLineEdit(self.widget)
        font = QtGui.QFont()
        font.setPointSize(10)
        self.lineEdit_7.setFont(font)
        self.lineEdit_7.setObjectName("lineEdit_7")
        self.verticalLayout.addWidget(self.lineEdit_7)
        self.dateEdit = QtWidgets.QDateEdit(self.widget)
        font = QtGui.QFont()
        font.setPointSize(10)
        self.dateEdit.setFont(font)
        self.dateEdit.setAutoFillBackground(False)
        self.dateEdit.setCalendarPopup(True)
        self.dateEdit.setTimeSpec(QtCore.Qt.LocalTime)
        self.dateEdit.setDate(QtCore.QDate(2019, 10, 31))
        self.dateEdit.setObjectName("dateEdit")
        self.verticalLayout.addWidget(self.dateEdit)
        self.label_11 = QtWidgets.QLabel(self.frame_3)
        self.label_11.setGeometry(QtCore.QRect(22, 42, 51, 26))
        self.label_11.setObjectName("label_11")
        self.label_9 = QtWidgets.QLabel(self.frame_3)
        self.label_9.setGeometry(QtCore.QRect(22, 74, 27, 16))
        self.label_9.setObjectName("label_9")
        self.label = QtWidgets.QLabel(self.frame_3)
        self.label.setGeometry(QtCore.QRect(22, 102, 45, 16))
        self.label.setObjectName("label")
        self.label_4 = QtWidgets.QLabel(self.frame_3)
        self.label_4.setGeometry(QtCore.QRect(22, 131, 45, 16))
        self.label_4.setObjectName("label_4")
        self.label_2 = QtWidgets.QLabel(self.frame_3)
        self.label_2.setGeometry(QtCore.QRect(22, 159, 64, 16))
        self.label_2.setObjectName("label_2")
        self.frame_4 = QtWidgets.QFrame(self.frame)
        self.frame_4.setGeometry(QtCore.QRect(30, 200, 711, 231))
        self.frame_4.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_4.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_4.setObjectName("frame_4")
        self.textEdit = QtWidgets.QTextEdit(self.frame_4)
        self.textEdit.setGeometry(QtCore.QRect(94, 10, 581, 55))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.textEdit.setFont(font)
        self.textEdit.setObjectName("textEdit")
        self.label_6 = QtWidgets.QLabel(self.frame_4)
        self.label_6.setGeometry(QtCore.QRect(25, 98, 52, 16))
        self.label_6.setObjectName("label_6")
        self.textEdit_2 = QtWidgets.QTextEdit(self.frame_4)
        self.textEdit_2.setGeometry(QtCore.QRect(94, 80, 581, 55))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.textEdit_2.setFont(font)
        self.textEdit_2.setObjectName("textEdit_2")
        self.textEdit_3 = QtWidgets.QTextEdit(self.frame_4)
        self.textEdit_3.setGeometry(QtCore.QRect(94, 150, 581, 55))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.textEdit_3.setFont(font)
        self.textEdit_3.setObjectName("textEdit_3")
        self.label_5 = QtWidgets.QLabel(self.frame_4)
        self.label_5.setGeometry(QtCore.QRect(25, 30, 47, 13))
        self.label_5.setObjectName("label_5")
        self.label_7 = QtWidgets.QLabel(self.frame_4)
        self.label_7.setGeometry(QtCore.QRect(25, 166, 61, 16))
        self.label_7.setObjectName("label_7")
        self.gridLayout.addWidget(self.frame, 0, 0, 1, 1)
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 802, 21))
        self.menubar.setObjectName("menubar")
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

        self.pushButton_2.clicked.connect(self.batalReset)
        self.pushButton.clicked.connect(self.editData)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Edit Data Pasien"))
        self.label_3.setText(_translate("MainWindow", "Simpan"))
        self.label_8.setText(_translate("MainWindow", "Reset"))
        self.lineEdit_7.setPlaceholderText(_translate("MainWindow", "Mahasiswa/Dosen/Admin/Laboran/PAM/Kebersihan"))
        self.label_11.setText(_translate("MainWindow", "Tanggal \n"
"Kunjungan"))
        self.label_9.setText(_translate("MainWindow", "Nama"))
        self.label.setText(_translate("MainWindow", "NPM/NRP"))
        self.label_4.setText(_translate("MainWindow", "Golongan"))
        self.label_2.setText(_translate("MainWindow", "Tanggal Lahir"))
        self.textEdit.setHtml(_translate("MainWindow", "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0//EN\" \"http://www.w3.org/TR/REC-html40/strict.dtd\">\n"
"<html><head><meta name=\"qrichtext\" content=\"1\" /><style type=\"text/css\">\n"
"p, li { white-space: pre-wrap; }\n"
"</style></head><body style=\" font-family:\'MS Shell Dlg 2\'; font-size:10pt; font-weight:400; font-style:normal;\">\n"
"<p style=\"-qt-paragraph-type:empty; margin-top:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; -qt-block-indent:0; text-indent:0px;\"><br /></p></body></html>"))
        self.label_6.setText(_translate("MainWindow", "Perawatan"))
        self.label_5.setText(_translate("MainWindow", "Diagnosa"))
        self.label_7.setText(_translate("MainWindow", "Pengobatan"))

    def editData(self):
        conn = sqlite3.connect('database/pangkalan_data.db')
        cur = conn.cursor()

        query_verifikasi=('SELECT `NPM/NRP` FROM pengunjung WHERE `NPM/NRP`=("%s")' % (''.join(self.lineEdit_2.text())))
        a = cur.execute(query_verifikasi)
        result = a.fetchall()
        
        id_key = "[("+self.lineEdit_2.text()+",)]"

        if (str(id_key) != str(result)):
                self.messagebox('Pesan','Error Data NPM/NRP Tidak Ditemukan')
                cur.close()
        else:
            query=("UPDATE pengunjung SET Tanggal='{0}',\
                                Nama='{1}', \
                                Tanggal_Lahir='{2}', \
                                Golongan='{3}', \
                                Diagnosa='{4}', \
                                Perawatan_Gigi='{5}', \
                                Pengobatan='{6}' WHERE `NPM/NRP`='{7}'").format(self.dateEdit_2.text(),
                                                self.lineEdit.text(),
                                                self.dateEdit.text(),
                                                self.lineEdit_7.text(),
                                                self.textEdit.toPlainText(),
                                                self.textEdit_2.toPlainText(),
                                                self.textEdit_3.toPlainText(),
                                                self.lineEdit_2.text())
            cur.execute(query)
            conn.commit()
            self.messagebox("Pesan","Data Telah Sukses Diedit!")
            cur.close()


import resource


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow_edit()
    ui.setupUi_edit(MainWindow)
    MainWindow.setFixedSize(802, 603)
    MainWindow.show()
    sys.exit(app.exec_())
