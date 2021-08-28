
## Setup Instructions 
### Artisan

- Clone the project from main branch
- Execute `composer install` and this will install all the project dependancies
- Rename `.env.example` to `.env`
- Add database and Redis credentials to the `.env` file
- Execute `php artisan migrate --seed`. This will create the tables needed for the 
database and will populate some sample data too.
- Execute `php artisan serve`
- Now you will be able to connect with runner form data API using `http://127.0.0.1:8000/api/v1/runner/{runner_id}/form-data`

### Docker
- Project comes with [Laravel Sail](https://laravel.com/docs/8.x/sail) support.
- Clone the project and execute `./vendor/bin/sail up`.
- If youre on Windows WSL,
CD to your project directory and type `WSL`. This will open Bash terminal. Then `./vendor/bin/sail up`
- Connect to Docker instance using `docker exec -it <containerID> bash`
- To get container ID execute `docker ps`. from there select the instance running laravel
- After connectig to docker instance, execute `php artisan migrate --seed`
- Now you will be able to connect with runner form data API using `http://localhost/api/v1/runner/{runner_id}/form-data`
