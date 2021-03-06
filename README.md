<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"><img src="https://blog.phusion.nl/content/images/2016/07/Heroku.png" width="250"></p>

Backend trial of [iAR](https://www.iar-soft.com/) made in Laravel and deployed in Heroku. As it designed, all work was done in 2 hours. Therefor, the second exercise is incomplete. It will be completed in the next days.

-   [Trial documentation](https://github.com/IgorMy/api_rest_serie_data_center_backend/blob/main/documentation/iAR_prueba_backend.pdf)
-   [Database diagram](https://github.com/IgorMy/api_rest_serie_data_center_backend/blob/main/database_diagram/diagram.pdf)

## Migrations

All done. Therefor, the database is controlled by the API.

## Routes

### Actors (Eloquent)

-   Get all actor data.

```
   GET: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor
```

-   Create an actor in the database.

```
   POST: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor
   DATA: {name:'actor_name'}
```

-   Update actor.

```
   PUT/PATCH: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor/{id}?name=actor_name
```

-   Delete actor.

```
   DELETE: https://api-rest-serie-data-center-bac.herokuapp.com/api/actor/{id}

```

### Creator (Query Builder)
-   Get all creator data.

```
   GET: https://api-rest-serie-data-center-bac.herokuapp.com/api/creator
```

-   Create a creator in the database.

```
   POST: https://api-rest-serie-data-center-bac.herokuapp.com/api/creator
   DATA: {name:'actor_name'}
```

-   Update creator.

```
   PUT/PATCH: https://api-rest-serie-data-center-bac.herokuapp.com/api/creator/{id}?name=actor_name
```

-   Delete creator.

```
   DELETE: https://api-rest-serie-data-center-bac.herokuapp.com/api/creator/{id}

```

### Series (raw querys)
-   Get all series data.

```
   GET: https://api-rest-serie-data-center-bac.herokuapp.com/api/series
```

-   Create a serie in the database.

```
   POST: https://api-rest-serie-data-center-bac.herokuapp.com/api/series
   DATA: {name:'serie_name',date:'dd/mm/yyyy',creator:creator_id}
   - Creator is optional
```

-   Update serie.

```
   PUT/PATCH: https://api-rest-serie-data-center-bac.herokuapp.com/api/series/{id}?name=serie_name&date=dd/mm/yyyy&creator=creator_id
   - Creator is optional
```

-   Delete serie.

```
   DELETE: https://api-rest-serie-data-center-bac.herokuapp.com/api/series/{id}

```
