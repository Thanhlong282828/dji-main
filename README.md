# SCHEMA Main (`dji-main`)

Premium black/gold Laravel MVC product showcase and editorial journal with responsive Blade views, real photography, reveal/parallax interactions, cached read model and article pages.

## Local start

```bash
composer install && npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
composer run dev
```

Open `http://localhost:8000`; Docker exposes `http://localhost:8080`. The SQLite read model makes the frontend immediately demonstrable. Production should sync published content from `dji-admin` by signed API/event. See `db.txt`, `projec.txt`, and `luong.txt`.
