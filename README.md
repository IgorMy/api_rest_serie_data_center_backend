<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"><img src="https://seekvectorlogo.net/wp-content/uploads/2018/12/heroku-vector-logo.png" width="250"></p>

Backend trial of (iAR)[https://www.iar-soft.com/] made in laravel and deployed in heroku. As it designed, all work was done in 2 hours. Therefor, the second excercize is incomplete. It will be completed in the next days.

[Trial documentation](https://github.com/IgorMy/api_rest_serie_data_center_backend/blob/main/documentation/iAR_prueba_backend.pdf)
[Database diagram](https://github.com/IgorMy/api_rest_serie_data_center_backend/blob/main/database_diagram/diagram.pdf)

## Routes

-   Get all actor data.

```
   GET: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor
```

-   Create an actor in the database.

```
   POST: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor
   POST DATA: {name:'actor_name'}
```

-   Update actor.

```
   PUT/PATCH: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor/{id}?name={name}
```

-   Delete actor

```
   DELETE: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor/{id}

```
