# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'tampilan_baru.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!


import sqlite3
import pandas as pd
from tkinter import messagebox
import matplotlib.pyplot as plt
from win32api import GetSystemMetrics
from xlsxwriter.workbook import Workbook
from PyQt5 import QtCore, QtGui, QtWidgets
from Ekspor_Data import Ui_MainWindow_export
from Riwayat_Pasien import Ui_MainWindow_riwayat
from Tambah_Data_Pasien import Ui_MainWindow_tambah
from Edit_Data_Pengunjung import Ui_MainWindow_edit
from Data_Karyawan_Mhs import Ui_MainWindow_golongan
from Hapus_Data_Pengunjung import Ui_MainWindow_deleteUtama

from matplotlib.backends.backend_qt5agg import FigureCanvasQTAgg as FigureCanvas
from matplotlib.figure import Figure
import matplotlib.pyplot as plt

m = 0

import random

class Ui_MainWindow_utama(object):
    def refreshData(self):
        self.frame_5.deleteLater()
        self.setupUi_utama(MainWindow)
        # self.frame_5 = QtWidgets.QFrame(self.frame)
        self.frame_5.setGeometry(QtCore.QRect(164, 110, 2141, 631))
        # self.frame_5.setFrameShape(QtWidgets.QFrame.StyledPanel)
        # self.frame_5.setFrameShadow(QtWidgets.QFrame.Raised)
        # self.frame_5.setObjectName("frame_5")
        
        # self.window.destroy
        # self.setupUi_utama(MainWindow)
       

        self.messagebox("Pesan","Grafik sudah di Refresh")
        

    def pindaheditData(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_edit()
        self.ui.setupUi_edit(self.window)
        self.window.setFixedSize(802, 603)
        self.window.show()

    def pindahdelData(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_deleteUtama()
        self.ui.setupUi_deleteUtama(self.window)
        self.window.setFixedSize(802, 603)
        self.window.show()

    def pindahRiwayat(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_riwayat()
        self.ui.setupUi_riwayat(self.window)
        self.window.setFixedSize(802, 530)
        self.window.show()

    def pindahTambah(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_tambah()
        self.ui.setupUi_tambah(self.window)
        self.window.setFixedSize(802, 603)
        self.window.show()

    def messagebox(self, title, message):
        mess=QtWidgets.QMessageBox()
        mess.setWindowTitle(title)
        mess.setText(message)
        mess.setStandardButtons(QtWidgets.QMessageBox.Ok)
        mess.exec_()

    def eksporData(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_export()
        self.ui.setupUi_export(self.window)
        self.window.setFixedSize(800, 530)
        self.window.show()

    def button_pindah(self):
        self.window=QtWidgets.QMainWindow()
        self.ui=Ui_MainWindow_golongan()
        self.ui.setupUi_golongan(self.window)
        self.window.setFixedSize(GetSystemMetrics(0), GetSystemMetrics(1))
        self.window.setFixedSize(800, 590)
        self.window.show()

    def setupUi_utama(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(1350, 867)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.frame = QtWidgets.QFrame(self.centralwidget)
        self.frame.setGeometry(QtCore.QRect(10, 30, 1331, 641))
        self.frame.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame.setObjectName("frame")
        self.frame_5 = QtWidgets.QFrame(self.frame)
        self.frame_5.setGeometry(QtCore.QRect(164, 110, 1200, 731))
        self.frame_5.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_5.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_5.setObjectName("frame_5")
        global m
        m=PlotCanvas(self.frame_5, width=11, height=3.6)
        self.label_14 = QtWidgets.QLabel(self.frame_5)
        self.label_14.setAlignment(QtCore.Qt.AlignCenter)
        self.label_14.setObjectName("label_14")
        self.frame_3 = QtWidgets.QFrame(self.frame)
        self.frame_3.setGeometry(QtCore.QRect(570, 10, 761, 115))
        self.frame_3.setFrameShape(QtWidgets.QFrame.NoFrame)
        self.frame_3.setFrameShadow(QtWidgets.QFrame.Plain)
        self.frame_3.setObjectName("frame_3")
        self.gridLayout_2 = QtWidgets.QGridLayout(self.frame_3)
        self.gridLayout_2.setObjectName("gridLayout_2")
        spacerItem = QtWidgets.QSpacerItem(40, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.gridLayout_2.addItem(spacerItem, 0, 0, 1, 1)
        spacerItem1 = QtWidgets.QSpacerItem(17, 9, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.gridLayout_2.addItem(spacerItem1, 2, 1, 1, 1)
        self.label_11 = QtWidgets.QLabel(self.frame_3)
        self.label_11.setAlignment(QtCore.Qt.AlignCenter)
        self.label_11.setObjectName("label_11")
        self.gridLayout_2.addWidget(self.label_11, 1, 1, 1, 1)
        self.pushButton_7 = QtWidgets.QPushButton(self.frame_3)
        self.pushButton_7.setText("")
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/images/img/riwayat.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_7.setIcon(icon)
        self.pushButton_7.setIconSize(QtCore.QSize(60, 55))
        self.pushButton_7.setObjectName("pushButton_7")
        self.gridLayout_2.addWidget(self.pushButton_7, 0, 1, 1, 1)
        self.frame_6 = QtWidgets.QFrame(self.frame)
        self.frame_6.setGeometry(QtCore.QRect(10, 10, 541, 121))
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
        spacerItem2 = QtWidgets.QSpacerItem(17, 17, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.gridLayout_4.addItem(spacerItem2, 1, 0, 1, 1)
        spacerItem3 = QtWidgets.QSpacerItem(40, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.gridLayout_4.addItem(spacerItem3, 0, 1, 1, 1)
        self.frame_2 = QtWidgets.QFrame(self.frame)
        self.frame_2.setGeometry(QtCore.QRect(-20, 110, 161, 451))
        self.frame_2.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_2.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_2.setObjectName("frame_2")
        self.layoutWidget = QtWidgets.QWidget(self.frame_2)
        self.layoutWidget.setGeometry(QtCore.QRect(50, 20, 111, 91))
        self.layoutWidget.setObjectName("layoutWidget")
        self.verticalLayout_7 = QtWidgets.QVBoxLayout(self.layoutWidget)
        self.verticalLayout_7.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_7.setObjectName("verticalLayout_7")
        self.pushButton = QtWidgets.QPushButton(self.layoutWidget)
        self.pushButton.setText("")
        icon1 = QtGui.QIcon()
        icon1.addPixmap(QtGui.QPixmap(":/images/img/karyawan.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton.setIcon(icon1)
        self.pushButton.setIconSize(QtCore.QSize(85, 85))
        self.pushButton.setObjectName("pushButton")
        self.verticalLayout_7.addWidget(self.pushButton)
        self.label_5 = QtWidgets.QLabel(self.layoutWidget)
        self.label_5.setAlignment(QtCore.Qt.AlignCenter)
        self.label_5.setObjectName("label_5")
        self.verticalLayout_7.addWidget(self.label_5)
        self.layoutWidget1 = QtWidgets.QWidget(self.frame_2)
        self.layoutWidget1.setGeometry(QtCore.QRect(50, 120, 111, 91))
        self.layoutWidget1.setObjectName("layoutWidget1")
        self.verticalLayout_6 = QtWidgets.QVBoxLayout(self.layoutWidget1)
        self.verticalLayout_6.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_6.setObjectName("verticalLayout_6")
        self.pushButton_2 = QtWidgets.QPushButton(self.layoutWidget1)
        self.pushButton_2.setText("")
        icon2 = QtGui.QIcon()
        icon2.addPixmap(QtGui.QPixmap(":/images/img/satpam.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_2.setIcon(icon2)
        self.pushButton_2.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_2.setObjectName("pushButton_2")
        self.verticalLayout_6.addWidget(self.pushButton_2)
        self.label_6 = QtWidgets.QLabel(self.layoutWidget1)
        self.label_6.setAlignment(QtCore.Qt.AlignCenter)
        self.label_6.setObjectName("label_6")
        self.verticalLayout_6.addWidget(self.label_6)
        self.layoutWidget2 = QtWidgets.QWidget(self.frame_2)
        self.layoutWidget2.setGeometry(QtCore.QRect(50, 220, 111, 101))
        self.layoutWidget2.setObjectName("layoutWidget2")
        self.verticalLayout_5 = QtWidgets.QVBoxLayout(self.layoutWidget2)
        self.verticalLayout_5.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_5.setObjectName("verticalLayout_5")
        self.pushButton_3 = QtWidgets.QPushButton(self.layoutWidget2)
        self.pushButton_3.setText("")
        icon3 = QtGui.QIcon()
        icon3.addPixmap(QtGui.QPixmap(":/images/img/cs.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_3.setIcon(icon3)
        self.pushButton_3.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_3.setObjectName("pushButton_3")
        self.verticalLayout_5.addWidget(self.pushButton_3)
        self.label_7 = QtWidgets.QLabel(self.layoutWidget2)
        self.label_7.setAlignment(QtCore.Qt.AlignCenter)
        self.label_7.setObjectName("label_7")
        self.verticalLayout_5.addWidget(self.label_7)
        self.layoutWidget3 = QtWidgets.QWidget(self.frame_2)
        self.layoutWidget3.setGeometry(QtCore.QRect(50, 333, 111, 101))
        self.layoutWidget3.setObjectName("layoutWidget3")
        self.verticalLayout_8 = QtWidgets.QVBoxLayout(self.layoutWidget3)
        self.verticalLayout_8.setContentsMargins(0, 0, 0, 0)
        self.verticalLayout_8.setObjectName("verticalLayout_8")
        self.pushButton_4 = QtWidgets.QPushButton(self.layoutWidget3)
        self.pushButton_4.setText("")
        icon4 = QtGui.QIcon()
        icon4.addPixmap(QtGui.QPixmap(":/images/img/mahasiswa.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_4.setIcon(icon4)
        self.pushButton_4.setIconSize(QtCore.QSize(85, 85))
        self.pushButton_4.setObjectName("pushButton_4")
        self.verticalLayout_8.addWidget(self.pushButton_4)
        self.label_8 = QtWidgets.QLabel(self.layoutWidget3)
        self.label_8.setAlignment(QtCore.Qt.AlignCenter)
        self.label_8.setObjectName("label_8")
        self.verticalLayout_8.addWidget(self.label_8)
        self.frame_4 = QtWidgets.QFrame(self.centralwidget)
        self.frame_4.setGeometry(QtCore.QRect(9, 570, 1321, 107))
        self.frame_4.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_4.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_4.setObjectName("frame_4")
        self.pushButton_6 = QtWidgets.QPushButton(self.frame_4)
        self.pushButton_6.setGeometry(QtCore.QRect(36, 10, 72, 68))
        self.pushButton_6.setText("")
        icon5 = QtGui.QIcon()
        icon5.addPixmap(QtGui.QPixmap(":/images/img/edit.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_6.setIcon(icon5)
        self.pushButton_6.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_6.setObjectName("pushButton_6")
        self.pushButton_5 = QtWidgets.QPushButton(self.frame_4)
        self.pushButton_5.setGeometry(QtCore.QRect(114, 10, 72, 68))
        self.pushButton_5.setText("")
        icon6 = QtGui.QIcon()
        icon6.addPixmap(QtGui.QPixmap(":/images/img/data_baru.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_5.setIcon(icon6)
        self.pushButton_5.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_5.setObjectName("pushButton_5")
        self.pushButton_8 = QtWidgets.QPushButton(self.frame_4)
        self.pushButton_8.setGeometry(QtCore.QRect(192, 10, 72, 68))
        self.pushButton_8.setText("")
        icon7 = QtGui.QIcon()
        icon7.addPixmap(QtGui.QPixmap(":/images/img/hapus_data.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_8.setIcon(icon7)
        self.pushButton_8.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_8.setObjectName("pushButton_8")
        self.export_2 = QtWidgets.QPushButton(self.frame_4)
        self.export_2.setGeometry(QtCore.QRect(1240, 10, 72, 68))
        self.export_2.setText("")
        icon8 = QtGui.QIcon()
        icon8.addPixmap(QtGui.QPixmap(":/images/img/export.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.export_2.setIcon(icon8)
        self.export_2.setIconSize(QtCore.QSize(60, 60))
        self.export_2.setAutoRepeat(False)
        self.export_2.setAutoExclusive(False)
        self.export_2.setObjectName("export_2")
        self.label_2 = QtWidgets.QLabel(self.frame_4)
        self.label_2.setGeometry(QtCore.QRect(52, 84, 44, 16))
        self.label_2.setAlignment(QtCore.Qt.AlignCenter)
        self.label_2.setObjectName("label_2")
        self.label_3 = QtWidgets.QLabel(self.frame_4)
        self.label_3.setGeometry(QtCore.QRect(118, 84, 64, 16))
        self.label_3.setAlignment(QtCore.Qt.AlignCenter)
        self.label_3.setObjectName("label_3")
        self.label_12 = QtWidgets.QLabel(self.frame_4)
        self.label_12.setGeometry(QtCore.QRect(202, 84, 56, 16))
        self.label_12.setAlignment(QtCore.Qt.AlignCenter)
        self.label_12.setObjectName("label_12")
        self.label_4 = QtWidgets.QLabel(self.frame_4)
        self.label_4.setGeometry(QtCore.QRect(1248, 84, 58, 16))
        self.label_4.setAlignment(QtCore.Qt.AlignCenter)
        self.label_4.setObjectName("label_4")
        self.label_14 = QtWidgets.QLabel(self.frame_5)
        self.label_14.setGeometry(QtCore.QRect(533, 368, 64, 16))
        self.label_14.setAlignment(QtCore.Qt.AlignCenter)
        self.label_14.setObjectName("label_14")

        self.pushButton_9 = QtWidgets.QPushButton(self.frame_4)
        self.pushButton_9.setGeometry(QtCore.QRect(270, 10, 72, 68))
        self.pushButton_9.setText("")
        icon9 = QtGui.QIcon()
        icon9.addPixmap(QtGui.QPixmap(":/images/img/refresh.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.pushButton_9.setIcon(icon9)
        self.pushButton_9.setIconSize(QtCore.QSize(60, 60))
        self.pushButton_9.setObjectName("pushButton_9")
        self.label_13 = QtWidgets.QLabel(self.frame_4)
        self.label_13.setGeometry(QtCore.QRect(275, 84, 64, 16))
        self.label_13.setAlignment(QtCore.Qt.AlignCenter)
        self.label_13.setObjectName("label_13")
        MainWindow.setCentralWidget(self.centralwidget)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

        self.pushButton_7.clicked.connect(self.pindahRiwayat)
        self.pushButton_5.clicked.connect(self.pindahTambah)
        self.pushButton.clicked.connect(self.button_pindah)
        self.pushButton_2.clicked.connect(self.button_pindah)
        self.pushButton_3.clicked.connect(self.button_pindah)
        self.pushButton_4.clicked.connect(self.button_pindah)
        self.export_2.clicked.connect(self.eksporData)
        self.pushButton_8.clicked.connect(self.pindahdelData)
        self.pushButton_6.clicked.connect(self.pindaheditData)
        self.pushButton_9.clicked.connect(self.refreshData)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Halaman Utama"))
        self.label_11.setText(_translate("MainWindow", "Lihat Riwayat"))
        self.label_5.setText(_translate("MainWindow", "Karyawan"))
        self.label_6.setText(_translate("MainWindow", "Keamanan"))
        self.label_7.setText(_translate("MainWindow", "Kebersihan"))
        self.label_8.setText(_translate("MainWindow", "Mahasiswa"))
        self.label_2.setText(_translate("MainWindow", "Edit Data"))
        self.label_3.setText(_translate("MainWindow", "Tambah Data"))
        self.label_12.setText(_translate("MainWindow", "Hapus Data"))
        self.label_4.setText(_translate("MainWindow", "Ekspor Data"))
        self.label_13.setText(_translate("MainWindow", "Refresh Data"))
        self.label_14.setText(_translate("MainWindow", "Kurun Waktu"))
import resource


class PlotCanvas(FigureCanvas):
    def __init__(self, parent=None, width=7, height=3, dpi=100):
        fig = Figure(figsize=(width, height), dpi=dpi)
        con = sqlite3.connect("database/pangkalan_data.db")

        self.axes = fig.add_subplot(111)

        FigureCanvas.__init__(self, fig)
        self.setParent(parent)

        FigureCanvas.setSizePolicy(self,
                QtWidgets.QSizePolicy.Expanding,
                QtWidgets.QSizePolicy.Expanding)
        FigureCanvas.updateGeometry(self)

        data = pd.read_sql("select * from riwayat_pengunjung", con, index_col='Tanggal', parse_dates=True)
        data.index = pd.to_datetime(data.index)
        data.index.name = "Kurun Waktu"
        
        plt.style.use("seaborn-whitegrid")
        plt.ylabel("Jumlah Pasien")
        plt.title("Statistik Kunjungan Poliklinik GIGI UPN Veteran Jawa Timur")
        plt.ylim(0,data.resample('M').count()['Nama'].max()*1.25)
        
        data.resample('M').count()['Nama'].plot(grid=True, linewidth=3.5, ax=self.axes)

        self.plot()
        # self.restrart()


    def plot(self):
        self.draw()
        self.flush_events()

    # def restrart(self):
        # self.flush_events()


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow_utama()
    ui.setupUi_utama(MainWindow)
    MainWindow.setFixedSize(GetSystemMetrics(0), GetSystemMetrics(1))
    MainWindow.show()
    sys.exit(app.exec_())