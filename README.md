# Project Title
RESERVA DE SILLAS PARA TEATRO

# Project Description
SENA(Servicio Nacional de Aprendizaje), curso Desarrollo Web con PHP.
# Screenshot
![](/inicio.png)

# Project Rules

Para las transacciones se tienen las siguientes reglas:

1)  Solo se modifica la información de un puesto a la vez.
2)	Si el puesto está libre debe aparecer la letra “L” en mayúscula (L), si el
puesto está reservado debe mostrar la letra “R” en mayúscula (R), si el
puesto está vendido debe aparecer la letra “V” en mayúscula (V).
3)  Un puesto en estado libre (L) puede ser pasado a estado vendido (V)
(mediante la opción comprar) o reservado (R).

4)  Un puesto en estado reservado (R) puede ser pasado a estado vendido
(V) o liberado (L).
5)	Un puesto en estado vendido (V) no puede cambiar a estado reservado
(R) ni liberado (L).
6)  Siempre que el usuario intente hacer una operación no valida (como
pasar un puesto en estado vendido (V) ha estado liberado (L)), el sistema
debe mostrarle un mensaje (puede hacerse usando JavaScript) que le
indique que la operación no pudo realizarse.

## Getting Started

# The easiest way to get started is to clone the repository:
git clone https://github.com/ENDERSON-MARIN/RESERVA-SILLAS-TEATRO

# Change directory
cd project_dir

# Then simply start your app
php artisan serve

you can check website will be up and running on localhost
http://localhost/sillas_teatro/


### Prerequisites

you need to install following software 
1)  WEB SERVER (PHP, APACHE)
2)	DATABASE MYSQL
3)  OTHER OPTIONS:
    laragon https://laragon.org/download/index.html
OR
    xammp https://www.apachefriends.org/download.html
OR
	wammp https://sourceforge.net/projects/wampserver/files/latest/download


## Author

* [Enderson Marín](https://github.com/ENDERSON-MARIN)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Web Site:

* https://www.marinenderson.com/