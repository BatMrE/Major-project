import mysql.connector
import numpy as np
import sqlite3
import sys

conn= mysql.connector.connect(user="root",password="",host="localhost",database="videojs")

conn_two= sqlite3.connect('videojs')
c=conn_two.cursor() 


def read_from_db():

    #sess_id=sys.argv[1]
    sess_id = 1;
    print(sess_id)
    cursor_one = conn.cursor(buffered=True)
    cursor_one.execute("select time_arr from info where sess_id= '%s'" % (sess_id))
    data=cursor_one.fetchone()
    cursor_two = conn.cursor()
    cursor_two.execute("select type from questions")
    data_two=cursor_two.fetchall()
    str_data_two = ''.join(map(str, data_two))
    split_data_two=str_data_two.replace(")('","").replace("'","").split(',') 
    the_new_list = [x.split(',') for x in data]
    str_data = ''.join(map(str, the_new_list))
    split_data=str_data.replace(" ", "").strip('[]').split(',')
    i = 0
    while i < len(split_data):
        i += 1
 
    fobj = open("one.srt")
    text = fobj.read().strip().split()
    quo_text= (', '.join("'" + item + "'" for item in text))
    add_list=[]
    i = 0
    while i < len(split_data):
        print(split_data[i])
        if  split_data[i] in quo_text: #string in present in the text file
                ind_text=text.index(split_data[i].replace("'",""))
                fix_max=ind_text+5
                fix_min=ind_text-5
                while ind_text < fix_max:
                     add_list.append(text[ind_text])  
                     ind_text += 1
                while ind_text > fix_min:
                     add_list.append(text[ind_text])    
                     ind_text -= 1 
        else:
                print("not matched" )    
	        i += 1 
    database_list=[]
    i = 0
    while i < len(split_data_two):
        if  split_data_two[i] in add_list: #string in present in the text file
                ind_text=add_list.index(split_data_two[i])
                database_list.append(add_list[ind_text])
        else:
                print("not matched" )    
        i += 1       
    sess= sess_id 
    cursor_three=conn.cursor()
    for elem in database_list:
          cursor_three.execute("INSERT INTO data(sess_id,list) VALUES (%s,%s)",( sess,elem))
    conn.commit()  
    fobj.close()
 

read_from_db()

 
   


