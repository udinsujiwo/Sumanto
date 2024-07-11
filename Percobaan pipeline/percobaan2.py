import pandas as pd
import pymysql

# Ekstraksi data dari MySQL
def extract_data():
    connection = pymysql.connect(host='localhost',
                                 user='user',
                                 password='password',
                                 database='sumber_database')
    query = "SELECT * FROM tabel_sumber"
    df = pd.read_sql(query, con=connection)
    connection.close()
    return df

# Transformasi data
def transform_data(df):
    # Contoh transformasi: mengubah format tanggal
    df['tanggal'] = pd.to_datetime(df['tanggal'], format='%Y-%m-%d')
    return df

# Memuat data ke MySQL
def load_data(df):
    connection = pymysql.connect(host='localhost',
                                 user='user',
                                 password='password',
                                 database='tujuan_database')
    # Misalnya, memuat DataFrame ke tabel tujuan
    df.to_sql(name='tabel_tujuan', con=connection, if_exists='append', index=False)
    connection.close()

# Main ETL process
def etl_pipeline():
    # Ekstraksi data
    data = extract_data()
    
    # Transformasi data
    data_transformed = transform_data(data)
    
    # Memuat data
    load_data(data_transformed)

# Menjalankan ETL pipeline
if __name__ == "__main__":
    etl_pipeline()
