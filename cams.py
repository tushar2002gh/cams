import mysql.connector
from tkinter import *
from tkinter import messagebox

# establish database connection
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="password",
    database="clinic"
)

# create cursor
mycursor = mydb.cursor()

# create table if not exists
mycursor.execute("CREATE TABLE IF NOT EXISTS patients (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), age INT, phone VARCHAR(255), email VARCHAR(255))")

# create table for appointments
mycursor.execute("CREATE TABLE IF NOT EXISTS appointments (id INT AUTO_INCREMENT PRIMARY KEY, patient_id INT, doctor VARCHAR(255), date VARCHAR(255), time VARCHAR(255))")

# main window
root = Tk()
root.title("Clinic Management System")
root.geometry("600x400")

# function to add new patient
def add_patient():
    name = name_entry.get()
    age = age_entry.get()
    phone = phone_entry.get()
    email = email_entry.get()

    if name == "" or age == "" or phone == "" or email == "":
        messagebox.showwarning("Warning", "All fields are required!")
    else:
        # insert data to database
        mycursor.execute("INSERT INTO patients (name, age, phone, email) VALUES (%s, %s, %s, %s)", (name, age, phone, email))
        mydb.commit()

        # clear fields
        name_entry.delete(0, END)
        age_entry.delete(0, END)
        phone_entry.delete(0, END)
        email_entry.delete(0, END)

        messagebox.showinfo("Success", "Patient added successfully!")

# function to search for patients
def search_patients():
    search_query = search_entry.get()
    if search_query == "":
        messagebox.showwarning("Warning", "Please enter a search query.")
    else:
        # search for patients by name, age, or email
        mycursor.execute("SELECT * FROM patients WHERE name LIKE %s OR age=%s OR email LIKE %s", ('%' + search_query + '%', search_query, '%' + search_query + '%'))
        patients = mycursor.fetchall()

        # clear table
        for i in treeview.get_children():
            treeview.delete(i)

        # insert search results to table
        for patient in patients:
            treeview.insert('', 'end', values=patient)

# function to update patient information
def update_patient():
    selected = treeview.focus()
    if not selected:
        messagebox.showwarning("Warning", "Please select a patient.")
    else:
        # get data from selected row
        values = treeview.item(selected, 'values')
        id = values[0]
        name = name_entry.get()
        age = age_entry.get()
        phone = phone_entry.get()
        email = email_entry.get()

        if name == "" or age == "" or phone == "" or email == "":
            messagebox.showwarning("Warning", "All fields are required!")
        else:
            # update data in database
            mycursor.execute("UPDATE patients SET name=%s, age=%s, phone=%s, email=%s WHERE id=%s", (name, age, phone, email, id))
            mydb.commit()

            # clear fields
            name_entry.delete(0, END)
            age_entry.delete(0, END)
            phone_entry.delete(0, END)
            email_entry.delete(0, END)

            messagebox.showinfo("Success", "Patient information updated successfully!")

# function to delete patient
def delete_patient():
    selected = treeview.focus()
   
