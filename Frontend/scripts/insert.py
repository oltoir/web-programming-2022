import mysql.connector
import random

# establishing the connection
conn = mysql.connector.connect(
    user='root', password='', host='localhost', database='mysql')

# Creating a cursor object using the cursor() method
cursor = conn.cursor()

# Preparing SQL query to INSERT a record into the database.
insert_stmt = (
    "INSERT INTO flights(departure_city, arrival_city, carrier, departure_time, arrival_time, departure_date, arrival_date, base_cost)"
    "VALUES (%s, %s, %s, %s, %s, %s, %s, %s)"
)

delete_stmt = "DELETE FROM flights WHERE departure_city = 'Almaty'"

cities = ['Almaty', 'Pavlodar', 'Astana', 'Uralsk', 'Shymkent', 'Taraz', 'Aktau',
          'Aktobe', 'Atyrau', 'Kyzylorda', 'Kostanai', 'Kokshetau', 'Petropavlovsk', 'Karagandy']
carriers = ['FlyArystan', 'SCAT', 'AirAstana', 'BekAir']

data = ('Almaty', 'Pavlodar', 'FlyArystan', '16:50:00',
        '18:20:00', '2023-01-14', '2023-01-14', 50000)

succ = 0

while succ < 1000:
    departure_city = random.choice(cities)
    arrival_city = random.choice(cities)
    carrier = random.choice(carriers)
    day = random.randint(1, 30)
    mon = random.randint(1, 12)
    dep_hour = random.randint(1, 24)
    arr_hour = random.randint(1, 24)
    dep_min = random.randint(1, 59)
    arr_min = random.randint(1, 59)
    if arrival_city != departure_city:
        if dep_hour < arr_hour:
            dep_hour = str(dep_hour)
            dep_min = str(dep_min)
            arr_hour = str(arr_hour)
            arr_min = str(arr_min)
            day = str(day)
            mon = str(mon)
            cost = random.randint(10000, 120000)
            if len(dep_hour) == 1:
                dep_hour = "0" + dep_hour
            if len(dep_min) == 1:
                dep_min = "0" + dep_min
            if len(arr_hour) == 1:
                arr_hour = "0" + arr_hour
            if len(arr_min) == 1:
                arr_min = "0" + arr_min
            if len(day) == 1:
                day = "0" + day
            if len(mon) == 1:
                mon = "0" + mon
            data = (departure_city, arrival_city, carrier, f'{dep_hour}:{dep_min}:00',
                    f'{arr_hour}:{arr_min}:00', f'2023-{mon}-{day}', f'2023-{mon}-{day}', cost)
            cursor.execute(insert_stmt, data)
            conn.commit()
            print("Data inserted")
            succ += 1
conn.close()
