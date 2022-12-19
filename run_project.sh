docker compose down
docker image rm arturbruno17/socialproject-backend:v1

docker build --tag arturbruno17/socialproject-backend:v1 .
docker compose up -d

# sleep 20

# docker compose exec socialproject-backend php artisan migrate