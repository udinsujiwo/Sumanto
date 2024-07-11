import pandas as pd
from sqlalchemy import create_engine
from airflow import DAG
from airflow.operators.python import PythonOperator
from datetime import datetime, timedelta

def extract_data(**kwargs):
    engine = create_engine('mysql+pymysql://root:@localhost:3306/2021158_setopuspo')
    query = 'SELECT * FROM 2021158_barang'
    df = pd.read_sql(query, engine)
    df.to_csv('/tmp/extracted_data.csv', index=False)

def transform_data(**kwargs):
    df = pd.read_csv('/tmp/extracted_data.csv')
    df['new_column'] = df['existing_column'].apply(lambda x: x * 2)
    df['date_column'] = pd.to_datetime(df['date_column'])
    df.to_csv('/tmp/transformed_data.csv', index=False)

def load_data(**kwargs):
    engine = create_engine('mysql+pymysql://root:@localhost:3306/2021158_setopuspo')
    df = pd.read_csv('/tmp/transformed_data.csv')
    df.to_sql('target_table', engine, if_exists='replace', index=False)

default_args = {
    'owner': 'airflow',
    'depends_on_past': False,
    'start_date': datetime(2023, 7, 11),
    'email_on_failure': False,
    'email_on_retry': False,
    'retries': 1,
    'retry_delay': timedelta(minutes=5),
}

with DAG('mysql_etl_pipeline', default_args=default_args, schedule_interval=timedelta(days=1)) as dag:
    extract_task = PythonOperator(
        task_id='extract', 
        python_callable=extract_data,
        provide_context=True
    )
    transform_task = PythonOperator(
        task_id='transform', 
        python_callable=transform_data,
        provide_context=True
    )
    load_task = PythonOperator(
        task_id='load', 
        python_callable=load_data,
        provide_context=True
    )

    extract_task >> transform_task >> load_task
