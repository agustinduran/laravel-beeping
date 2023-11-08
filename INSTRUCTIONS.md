Prueba técnica Beeping

Instalar Laravel 8 (php 7.4)
Livewire
Crear Migraciones
Añadir a la DB 20 registros de “orders” con sus “lines” y 10 de “products”
Hacer comando con una consulta con eloquent que:
Calcule el coste total de todas las órdenes de la DB, para calcular este coste hay que multiplicar el order_line “qty” por el “product cost”.
Esta consulta debe ser ejecutada de forma asíncrona a través de un JOB de laravel en DB.
Al ejecutar las colas imprimir el resultado en la terminal.
Para el front con livewire mostrar un listado de todas las órdenes en una tabla: order_ref, customer_name, total qty
Crear un mini instructivo con la configuración principal del .env

Tener en cuenta que cada tarea debe ser registrada en una rama de git.
Enviar el link del proyecto (repositorio) al reclutador/a

Tablas:
orders
ID (bigint)
order_ref (varchar)
customer_name (varchar)
created_at (timestamp)
updated_at (timestamp)

orders_lines
ID (bigint)
order_id(bigint)
qty (int)
product_id(bigint)
created_at (timestamp)
updated_at (timestamp)

products
ID (bigint)
name (varchar)
cost (double)
created_at (timestamp)
updated_at (timestamp)
