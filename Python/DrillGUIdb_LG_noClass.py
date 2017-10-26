#Python 3.5 SQLite3 FileTransfer Drill TN & LG (minimized code)

from tkinter import *
from tkinter import ttk
from tkinter import filedialog
import os
import shutil
import datetime as dt
import time
import sqlite3
root = Tk()

#create database and table
conn = sqlite3.connect('fileTransferdb.db')
c = conn.cursor()
c.execute('CREATE TABLE IF NOT EXISTS timeElapsed(time TIMESTAMP)')
c.execute('INSERT INTO timeElapsed VALUES (2017)') # dummy value for the table/ first entry

#functions to attach in buttons
varS = StringVar()
varD = StringVar()

def askSource():
    desName = filedialog.askdirectory()
    varS.set(desName)

def askDestination():
    desName = filedialog.askdirectory()
    varD.set(desName)

def fileCopy():# inserts time to db whenever copy button is pressed and copies files
    now = dt.datetime.now()
    c.execute('INSERT INTO timeElapsed VALUES(?)',(now.strftime('%Y-%m-%d %H:%M'),))                                
    conn.commit()
    #get the paths for send and recieving folders
    sender = varS.get()
    receiver = varD.get()
    ago = now - dt.timedelta(hours = 24)
    for files in os.listdir(sender):
        path = os.path.join(sender, files)
        st = os.stat(path)
        mtime = dt.datetime.fromtimestamp(st.st_mtime)
        if mtime > ago:
            shutil.copy2(path, receiver)
            print (files)  
           
# select time of last file move from db
c.execute('SELECT time FROM timeElapsed ORDER by time DESC')
theTime = c.fetchone()[0]

#Buttons & Labels
browseButton = ttk.Button(text = 'SourceFile  Folder', command = askSource).grid(row = 1, column = 2, padx = 5, pady = 5)
browseButton = ttk.Button(text = 'Destination Folder', command = askDestination).grid(row = 2, column = 2, padx = 5, pady = 5)       
copyButton = ttk.Button(root, text = 'Copy The Files', command = fileCopy).grid(row = 3, column = 1, padx = 5, pady = 5)
pathLabel = ttk.Entry(text = varS).grid(row = 1, column = 1, padx = 1, pady = 1)
pathLabel = ttk.Entry(text = varD).grid(row = 2, column = 1, padx = 1, pady = 1)
timeLabel = ttk.Label(text = "Last File Check:  "+ str(theTime)).grid(row = 4, column = 1,padx = 1, pady = 1)

# The END
