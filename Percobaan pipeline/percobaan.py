import pandas as pd
from sqlalchemy import create_engine

# Koneksi ke MySQL
engine = create_engine('mysql+pymysql://root:@localhost:3306/2021158_setopuspo')

# Ekstrak data dari MySQL
query = 'SELECT * FROM 2021158_barang'
df = pd.read_sql(query, engine)

print(df.head())
