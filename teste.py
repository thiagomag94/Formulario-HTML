import pymysql
from flask import request

if request.method == 'POST':
    user =  request.POST['nome']
    email =  request.POST['email'] 

    
db = pymysql.connect(host='form.criuxypwt58s.sa-east-1.rds.amazonaws.com',
                      user='admin',
                      password='D4rk0102',
                      database='testepython')
cursor = db.cursor()
cursor.execute("USE testepython")
cursor.execute("CREATE TABLE IF NOT EXISTS teste2(nome varchar(50), email varchar(40))")


