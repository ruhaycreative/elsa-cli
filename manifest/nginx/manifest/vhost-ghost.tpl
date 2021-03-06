server {
    listen 80; server_name HOSTNAME;
    return 301 https://$host$request_uri;
    access_log off; error_log off;
}

server {
    listen 80; listen 443 ssl http2;
    server_name www.HOSTNAME;
    return 301 https://HOSTNAME$request_uri;
    access_log off; error_log off;
    ssl_certificate         /etc/letsencrypt/live/www.HOSTNAME/fullchain.pem;
    ssl_certificate_key     /etc/letsencrypt/live/www.HOSTNAME/privkey.pem;
    ssl_trusted_certificate /etc/ssl/certs/chain.pem;
}

server {
    listen 443 ssl http2;
    server_name HOSTNAME;

    access_log           /srv/HOSTNAME/log/akses.log main;
    error_log            /srv/HOSTNAME/log/error.log warn;

    ssl_certificate        /etc/letsencrypt/live/HOSTNAME/fullchain.pem;
    ssl_certificate_key     /etc/letsencrypt/live/HOSTNAME/privkey.pem;
    ssl_trusted_certificate /etc/ssl/certs/chain.pem;

    add_header Public-Key-Pins 'pin-sha256="HPKP_VALUE"; max-age=2592000;';

    # ghost-handler
    include server.d/server.conf;
    location / {
        proxy_buffering  off;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header User-Agent $http_user_agent;
        proxy_set_header Host $http_host;
        proxy_pass http://127.0.0.1:GHOST_PORT;
    }
}