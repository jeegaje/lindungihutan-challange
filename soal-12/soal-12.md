# How to run project
1. `composer install`
2. `php artisan key:generate`
3. `php artisan migrate --seed`
4. `npm install`
5. `npm run dev`
6. `php artisan serve`

## 1. Tampilkan nama film dan nominasi dari nominasi yang terbesar
````
Film::select('nm_film', 'nominasi')->orderBy('nominasi', 'desc')->get()
````
## 2. Tampilkan nama film dan nominasi yang paling banyak mendapatkan nominasi
````
Film::select('nm_film', 'nominasi')->orderBy('nominasi', 'desc')->first()
````
## 3. Tampilkan rata2 pendapatan film keseluruhan
````
Film::avg('pendapatan')
````
## 4. Tampilkan nama film yang huruf terakhir ‘n’
````
Film::select('nm_film')->where('nm_film', 'LIKE', '%n')->get()
````
## 5. Tampilkan nama film dengan pendapatan terbesar mengandung huruf ‘s’
````
Film::select('nm_film')
->where('nm_film', 'LIKE', '%s%')
->orderBy('pendapatan', 'desc')->first()
````
## 6. Tampilkan nama artis yang tidak pernah bermain film
````
Artis::doesntHave('showFilms')->get()
````
## 7. Tampilkan nama artis yang paling banyak bermain film
````
Artis::join('film', 'artis.kd_artis', '=', 'film.artis')
->select('artis.nm_artis', DB::raw('COUNT(*) as jumlah_film'))
->groupBy('artis.nm_artis')
->orderBy('jumlah_film', 'desc')
->first()
````
## 8. Tampilkan nama artis yang bermain film dengan genre drama
````
Artis::whereHas('showFilms', function ($query) {
    $query->whereHas('showGenre', function ($query) {
        $query->where('nm_genre', 'drama');
    });
})->get()
````
## 9. Tampilkan jumlah nominasi dari masing2 produser
````
Produser::leftjoin('film', 'produser.kd_produser', '=', 'film.produser')
->select('produser.nm_produser', DB::raw('SUM(film.nominasi) as jumlah_nominasi'))
->groupBy('produser.nm_produser')
->get()
````
## 10. Tampilkan jumlah pendapatan produser marvel secara keseluruhan
````
Produser::where('nm_produser', '=', 'MARVEL')
->join('film', 'produser.kd_produser', '=', 'film.produser')
->select('produser.nm_produser', DB::raw('SUM(film.pendapatan) as jumlah_pendapatan'))
->groupBy('produser.nm_produser')
->get()
````


### Evidence
https://jam.dev/c/8ce1025a-5d3e-49ec-8dff-0608c2c3a02f